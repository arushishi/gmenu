<html>
	<body>
        <form action="./upload/upload" method="post" enctype="multipart/form-data">
            <input type="file" name="upload[]" multiple="true" />
            <input type="submit" />
        </form>
		<?php
		foreach ($files as $file)
		{
			?>
			<?php if (is_array($file) or ! is_file(Config::get('upload.path') . DS . $file)) continue; ?>
			<img src="../uploads/<?php echo $file; ?>" />
			<?php break; ?>
		<?php } ?>
    </body>
</html>
