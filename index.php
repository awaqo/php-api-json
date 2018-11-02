<?php
	include 'koneksi.php';

	$qry = mysqli_query($koneksi,"SELECT * FROM user");

	if(mysqli_num_rows($qry) > 0 ){
		$response = array();
		$response["data"] = array();
		while($b = mysqli_fetch_array($qry)){
			$a['id'] = $b["id"];
			$a['username'] = $b["username"];
			$a['password'] = $b["password"];
			$a['level'] = $b["level"];
			$a['fullname'] = $b["fullname"];
			array_push($response["data"], $a);
		}
		echo json_encode($response);
	} else {
		$response["message"]="tidak ada data";
		echo json_encode($response);
	}
?>