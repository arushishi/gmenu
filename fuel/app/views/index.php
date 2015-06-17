
<?php echo Form::label('塾種別', 'school_id', array('class' => 'control-label')); ?>

<?php echo Form::select('school_id', array('', '') /* $id */, $schoolinfos); ?>

<div id="tabtable"></div>

<script type="text/javascript">// <![CDATA[
    $(document).ready(function () {

        // select選択変更時
        $('#form_school_id').change('click', ajax_tab);

        // 再表示などの際に表示する
        $('#form_school_id').ready(ajax_tab);

        // ajaxでタブ情報収集
        function ajax_tab() {

            if ($("#form_school_id option:selected").val() !== "")
            {
                // 空行は初めだけ表示したら後は消して選択できないように
                $('#form_school_id option[value=""]').remove();
                // alert($("#form_school_id option:selected").val());
                //alert($("#form_school_id option:selected").text());
                // ajax処理
                $.ajax({
                    url: "tabajax/exec.json",
                    type: "POST",
                    data: {schoolid: $("#form_school_id option:selected").val()} //, schoolname: $("#form_school_id option:selected").text()
                }).done(function (json) {
                    if (json.result === 'OK')
                    {
                        $('#tabtable').html(json.tabs);
                    }
                    else
                    {
                        alert(json.tabs);
                    }
                }).fail(function (jqXHR, textStatus) {
                    alert('Error!');
                });
            }
        }
    });
    // ]]></script>
