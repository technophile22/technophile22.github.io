<?php
 include 'connect.php';

  if (isset($_POST)) {



  	$id = $_POST['reg_id_edm2'];
    $sql_u = "SELECT * FROM users WHERE id='$id'";
    $res_u = mysqli_query($conn,$sql_u) or die(mysqli_error($conn));


    if (mysqli_num_rows($res_u) > 0) {
  	  echo "1";
  	}else{
      echo "0";



  	}
  }

  mysqli_close($conn);
?>
