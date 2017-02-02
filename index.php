<?php

// HANDLE REGISTRATION HTTP POST REQUEST

if(array_key_exists('register_pet', $_POST))
{
	$name = $_POST['pet_name'];
	$owner = $_POST['pet_owner'];
	$species = $_POST['pet_species'];
	$sex = $_POST['pet_sex'];
	$birth = $_POST['pet_birth'];
	$death = $_POST['pet_death']; 
	// echo $name.'<br>'.$owner.'<br>'.$species.'<br>'.$sex.'<br>'.$birth.'<br>'.$death;

	include "/var/www/html/wbcoursework4/includes/connection.php";

	$sql = "INSERT INTO pet(name, owner, species, sex, birth, death) 
			VALUES('$name', '$owner', '$species', '$sex', '$birth', '$death')";
	$rs = mysqli_query($conn, $sql)	;
	if(!$rs){ echo "Error When trying to insert data :".mysqli_error(); exit();}
	else{
		header('Location: .');
  	exit();
	}	

}

// REQUEST THE FORM TO ADD A NEW PET INSTANCE

if(isset($_GET['AddNewPet']))
{
	$action = "?addRequest";// NOT YET USED BUT WILL TRY IF THINGS GO WRONG
	$buttonValue = "REGISTER PET";
	$buttonName = "register_pet";
include "form.html.php";
exit();
}

/*
 *  HANDLE UPDATE OR EDIT OPERATIONS
 */

if((isset($_POST['action']) && $_POST['action'] == "Edit"))
{
	include "/var/www/html/wbcoursework4/includes/connection.php";

	$id = $_POST['id'];
	// var_dump($id);

	$query = "SELECT * FROM pet WHERE id = '$id' ";
	$result = mysqli_query($conn, $query);

	// POPULATE THE CURRENT ID'S FIELDS FOR EDITION
	foreach ($result as $rs) {
		# code...
	$name = $rs['name'];
	$owner = $rs['owner'];
	$species = $rs['species'];
	$sex = $rs['sex'];
	$birth = $rs['birth'];
	$death = $rs['death'];
	$id = $rs['id'];

	}
	$buttonValue = "UPDATE PET";
	$buttonName = "update_pet";
	$id = 

	

	include("form.html.php");
    exit();
}

// HANLE UPDATE HTTP POST REQUEST

if(array_key_exists('update_pet', $_POST))
{
	$name = $_POST['pet_name'];
	$owner = $_POST['pet_owner'];
	$species = $_POST['pet_species'];
	$sex = $_POST['pet_sex'];
	$birth = $_POST['pet_birth'];
	$death = $_POST['pet_death']; 

	$id = $_POST['id'];
	// echo $name.'<br>'.$owner.'<br>'.$species.'<br>'.$sex.'<br>'.$birth.'<br>'.$death;

	include "/var/www/html/wbcoursework4/includes/connection.php";

	$sql = "UPDATE pet
			SET name = '$name',
			 owner = '$owner', 
			 species = '$species',
			 sex = '$sex',
			 birth = '$birth',
			 death = '$death' 
			 WHERE id = '$id' ";
	$rs = mysqli_query($conn, $sql)	;

	if(!$rs){ echo "Error When trying to update data :".mysqli_error($conn); exit();}
	else{
		header('Location: .');
  	exit();
	}	

}

/*
 *  HANDLE DELETIONS OPERATIONS
 */


if((isset($_POST['action']) && $_POST['action'] == "Delete"))
{
	include "/var/www/html/wbcoursework4/includes/connection.php";
	$id = $_POST['id'];
	var_dump($id);

	$query = "DELETE FROM pet WHERE id = '$id' ";
	$result = mysqli_query($conn, $query);
	header('Location: .');
    exit();
}



include "/var/www/html/wbcoursework4/includes/connection.php";
$sql = "SELECT * FROM pet";
$rs = mysqli_query($conn, $sql);

include "index.html.php";