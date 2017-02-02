<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
<script type="text/javascript" src="assets/jquery.js"></script>
<script type="text/javascript" src="assets/datepicker.js"></script>
	<title></title>
</head>
<body>
<div class="container">

<div class="row"><div class="col-md-3"></div>
	<div class="col-md-4">
	<h2>Register Pet Info</h2>
	<form class="form form-horizontal" method="post" action="<?php if(isset($action)){echo $action;}?>">

	<input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}?>">	
		<div class="form-group">
			<label class="control-label">Name :</label>
			<input type="text" name="pet_name" class="form-control" value="<?php if(isset($name)){echo $name;};?>">
		</div>
		<div class="form form-group">
			<label class="control-label">Owner :</label>
			<input type="text" name="pet_owner" class="form-control" value="<?php if(isset($owner)){echo $owner;};?>">	
		</div>
		<div class="form form-group">
			<label class="control-label">Species :</label>
			<input type="text" name="pet_species" class="form-control" value="<?php if(isset($species)){echo $species;}?>">	
		</div>
		<div class="form form-group">
			 <div class="radio">
            <label>
                <input type="radio" name="pet_sex" id="m"
                       value="m" <?php if (isset($sex) && $sex == "m") {
                       	echo "checked";
                       }?>> Male
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="pet_sex" id="f"
                       value="f" <?php if (isset($sex) && $sex == "f") {
                       	echo "checked";
                       }?>>Female
            </label>
        </div>
		</div>

		<div class="form form-group">
			<label class="control-label">Birth :</label>
			<input type="text" name="pet_birth" class="form-control" value="<?php if(isset($birth)){echo $birth;}?>">	
		</div>

		<div class="form form-group">
			<label class="control-label">Death :</label>
			<input type="text" name="pet_death" class="form-control" value="<?php if(isset($death)){echo $death;}?>">	
		</div>

		<div class="form-group">
        <div class="">
            <button type="submit" class="btn btn-primary" name="<?php  if(isset($buttonName)){echo $buttonName;}?>">
                <?php if(isset($buttonValue)){ echo $buttonValue;}?>
            </button>
        </div>

    </div>

		
		
		
		
	</form>
</div>
</div>
</div>
</body>
</html>