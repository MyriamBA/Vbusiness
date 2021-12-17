<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['fname']) && isset($_POST['uname'])
    && isset($_POST['genre']) && isset($_POST['password']) && isset($_POST['re_password']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$fname = validate($_POST['fname']);
    $uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$genre = validate($_POST['genre']);
    $re_pass = validate($_POST['re_password']);



	if (empty($fname)) {
		header("Location: index.php?error= Name is required !");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required !");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: index.php?error=Re Password is required !");
	    exit();
	}
    else if(empty($genre)){
        header("Location: index.php?error=Genre is required !");
	    exit();
	}

	else if(empty($uname)){
        header("Location: index.php?error=User Name is required !");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: index.php?error=The confirmation password  does not match !");
	    exit();
	}

	else{

		// hashing the password
       // $pass = md5($pass);
       if($genre == 'Female'){
        $avatar= 'https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-512.png'	;   }else{
            $avatar= ' https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png'	;}




	    $sql = "SELECT * FROM employees WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=The username is taken try another !");
	        exit();
		}else {
           $sql2 = "INSERT INTO employees (user_name, password, name, genre, avatar) VALUES('$uname', '$pass', '$fname', '$genre', ' $avatar')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=Your account has been created successfully, You ca now Log In !");
	         exit();
           }else {
	           	header("Location: index.php?error=unknown error occurred !");
		        exit();
           }
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}