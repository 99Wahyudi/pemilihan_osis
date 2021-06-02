<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pemilih.xls");
	?>
	<table>
		<?php foreach ($choosers as $chooser): ?>	
		<tr>
			<td>Username : <?=$chooser['username']?></td>
			<td>Password : <?=$chooser['password']?></td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>