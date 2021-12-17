<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['new_name']) && isset($_POST['new_password']) && isset($_POST['nename']) ) {
	
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$nename = validate($_POST['nename']);

	$nname = validate($_POST['new_name']);
	$npass = validate($_POST['new_password']);
    $navatar = $_SESSION['avatar'];
	$id = $_SESSION['id'];

	if (empty($nname)) {
		header("Location: home.php?id=$id&error=Name is required");
	}else if (empty($npass)) {
		header("Location: home.php?id=$id&error=Password is required");
	}else {

    
	$sql = "SELECT * FROM employees WHERE id='$id'";

	$result = mysqli_query($conn, $sql);
           if ($result) {

			$sql2 ="UPDATE employees SET user_name='$nname', name='$nename', password='$npass', avatar=' $navatar' WHERE id= '$id'";
        	 mysqli_query($conn, $sql2);
			 $_SESSION['user_name'] =  $nname;
			 $_SESSION['name'] =  $nename;

			 $_SESSION['password'] =  $npass ;
			 $_SESSION['navatar'] =  $row['avatar'];  

             header("Location: home.php?success=Your informations has been successfully Updated !"); 
		
			 exit();
           }else {
	           	header("Location: home.php?error=unknown error occurred");
		        exit();
           }





		}


}else{
	header("Location: home.php?error=unknown error occurred");
	exit();

}
?>