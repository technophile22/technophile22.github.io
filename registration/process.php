<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phone	= $_POST['phone'];
	$select_box = $_POST['select_box'];
	$gender = $_POST['gender'];
	$accomodation = $_POST['accomodation'];

		$sql = "INSERT INTO users (firstname,lastname,email,phone,college,gender,accomodation) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phone, $select_box,$gender,$accomodation]);

		$sql = "SELECT * FROM users ORDER BY id";
    $res = $db->query($sql);
    foreach ($res as $row) {
        $id = $row["id"];
    }
		if($result){
		    $to= $email;
$from = "info@helix20.com";
$subject = 'Registration For Helix-20';
$message = "Hello " .$firstname.",\n"."You are Successfully Registered for Helix-20.\n Your 8-Digit Registration ID is ".$id."\n"."This ID will be required to participate in various events. \nYou will be provided physical passes at the venue through this Registration ID. \nDon't forget to bring your respective College ID cards.\n\n\nThank You,\n Regards,\n Team Helix.\n For any query feel free to contact us.";
$headers="From: ".$from;
mail($to,$subject,$message,$headers);
$to="helix20official@gmail.com";
$headers="From: ".$email;
mail($to,$subject,$message,$headers);
			echo 'Successfully Registered. Your Registration ID is ' ;
			echo $id;
			echo '. KINDLY CHECK YOUR EMAIL.';
		}else{
			echo 'There were erros while saving the data. Try Again';
		}
}else{
	echo 'No data';
}

$db=null;
?>
