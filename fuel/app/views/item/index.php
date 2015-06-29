<h2>Listing <span class='muted'>Items</span></h2>
<br>
<table class="table table-striped" style="border:1">
	<thead></thead>
	<tbody>
		<?php for ($i = 1; $i < $rownum + 1; $i++) : ?>
			<tr>
				<?php for ($j = 1; $j < $columnnum + 1; $j++) : ?>
					<td>
						<?php echo Html::anchor('#', '<i class="icon-wrench"></i> ' . $i . '-' . $j, array('class' => 'btn btn-default btn-sm itembutton')); ?>
					</td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</tbody>
</table>

<p>
	<!--?php echo Html::anchor('item/create', 'Add new Item', array('class' => 'btn btn-success')); ?-->
</p>

<div id="itemtable"></div>

<script type="text/javascript">// <![CDATA[
    $(document).ready(function () {

        // select選択変更時
        $('.itembutton').on('click', ajax_item);

        // ajaxでタブ情報収集
        function ajax_item() {
            var tmp = $(this).text();
            var row_col = tmp.split("-");
            //alert(row_col[0]);
            //alert(row_col[1]);
            $.ajax({
                url: "../../../../itemajax/exec.json",
                type: "POST",
                data: {tabid: "8", rownum: row_col[0], columnnum: row_col[1]}
            }).done(function (json) {
                if (json.result === 'OK')
                {
                    $('#itemtable').html(json.items);
                }
                else
                {
                    alert('Error!!!');
                }
            }).fail(function (jqXHR, textStatus) {
                alert('Error!');
            });
        }
    });
    // ]]></script>
