<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/app.css">
	<title>Course Work 4  CRUD OPERATION</title>
</head>
<body>
<div class="container">
	<div class="row">
		<h2>LIST OF PET AND THEIR INFOS</h2><br>
		<a href="?AddNewPet" class="btn btn-info">Add A New Pet</a>

		<table class="table">
			<thead>
				<tr><th>Name</th><th>Owner</th><th>Species</th><th>Sex</th><th>Birth</th><th>Death</th></tr>
			</thead>
			<tbody>
				<?php foreach ($rs as $r): ?>
				<tr>
					<form method="post">
					<input type="hidden" name="id" value="<?=$r['id']?>">
					<td><?=$r['name']?></td><td><?=$r['owner']?></td><td><?=$r['species']?></td>
					<td><?=$r['sex']?></td><td><?=$r['birth']?></td><td><?=$r['death']?></td>
					<td><input type="submit" name="action" class="btn btn-info" value="Edit">
					<td><input type="submit" name="action" class="btn btn-danger" value="Delete">
					</form>
					
				</tr>	
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>