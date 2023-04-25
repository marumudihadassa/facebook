<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'"><br>';
         }
      ?>

<?php
	$sql1 = "select * from user_form where id = '$user_id' ";
	$result = mysqli_query($conn,$sql1);
	if($sql1)
	{
		$row = [];
		while($row = mysqli_fetch_assoc($result))
		{
            echo "WELCOME  <tr><td>".$row['name']."</td><br>";
			echo "NAME :<tr><td>".$row['name']."</td><br>";
			echo "EMAIL :<td>".$row['email']."</td>";

		}
	
	}


?>