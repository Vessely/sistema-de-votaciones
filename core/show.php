<?php 


function countAll(){
	include("config/database.php");

	$sql = "SELECT COUNT(*) AS 'count' FROM vote_table";
	$obj_get = mysqli_query( $connecttion, $sql );

	echo $obj_get;
}


function show(){
	include_once("config/database.php");
	$sql = "SELECT * FROM vote_table";
	$get_obj = mysqli_query( $connection, $sql);

	while($row = $get_obj->fetch_assoc()){
		$title = $row['title'];
		$date  = $row['date_n'];
		$uni   = $row['unique_ident'];
		$a_per = $row['count_a'];
		$b_per = $row['count_b'];
		$total = $a_per + $b_per;

		if($total == 0){
			$perc_a = 0 . "%";
			$perc_b = 0 . "%";
		}else if($a_per == 1 && $b_per == 0){
			$perc_a = 100 . "%";
			$perc_b = 0 . "%";
		}else if($b_per == 1 && $a_per == 0){
			$perc_a = 0 . "%";
			$perc_b = 100 . "%";
		}else{
			$perc_a = $total / 100;
			$perc_a = $perc_a * $a_per;
			$perc_a = round($perc_a);

			
			$perc_b = $total / 100 * $b_per . "%";
		}
		echo
		'
		<div class="row mar-20">
			<div class="col-md-12 vote">
				<div class="row my-color">
					<div class="col-md-6 tool">
						<p class="text-left">'.$title.'</p>
					</div>
					<div class="col-md-6 tool">
						<div class="col-md-6 text-right">'.$date.'</div>
						<div class="col-md-6 text-right">'.$uni.'</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6"></div>
				</div>
				<div class="row">
					<div class="col-md-6 perc text-center">'.$perc_a.'</div>
					<div class="col-md-6 perc text-center">'.$perc_b.'</div>
				</div>
			</div>
		</div>
		';
	}

}

 ?>