<?php 

//Variables.
$title       = $_POST["title"];
$oa          = $_POST["oa"];
$ob          = $_POST["ob"];
$description = $_POST["description"];
$range       = $_POST["range"];
$date        = date("j-m-y");
$finaldate   = date("j") + $range;
$ui          = shortUnique();

//Storage.
store($title, $oa, $ob, $description, $range, $date, $finaldate, $ui);

//Funciones.
function store($title, $oa, $ob, $description, $range, $date, $final_date, $ui){
	include("../config/database.php");

	$query = "INSERT INTO vote_table (title, oa, ob, description, range_n, date_n, f_date, unique_ident) VALUES ('$title', '$oa', '$ob', '$description', '$range', '$date', '$final_date', '$ui')";
	$insert_obj = mysqli_query($connection, $query);

	if($insert_obj){
		echo "success";
	}else{
		echo "error";
	}
	
}

function shortUnique(){
	$shortUI = bin2hex(openssl_random_pseudo_bytes(10));

	return $shortUI;
}

 ?>