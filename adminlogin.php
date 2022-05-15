<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
    <title>Admin Login Page</title>
</head>
<body>
<?php include 'connection.php' ?>
<form method="POST" action="" class="box">
    <br>
    <br>
    <h3 >Sign-In</h3>
    <br>
    <label for="username">Username:</label>
    <input type=text name="username" placeholder="Please write your username.">
    <br>
    <br>
    <label for="password">Password:</label>
    <input type=password name="password" placeholder="Please write your password.">
    <br>
    <br>
    <input class="login" type="submit" name="login" value="Sign-In">
    <br>
    <br>
<?php
session_start();
$_SESSION['adminsession']==FALSE;
if($_POST)
	{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    $query = $db->query("select * from admin where username = '$username' and admin_password = '$password'");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
        if ( $say = $query -> rowCount() ){
    			if( $say > 0 ){
    			   
    				session_start();
    				$_SESSION['adminsession']==TRUE;
    				$_SESSION['username']=$sessionusername;
    				
    				echo '<h5>Welcome '.$username.'</h5><a class="logout" href="logout.php">Log out</a><br>';
    				echo'<meta http-equiv="refresh" content="5 URL=http://ecepilli.com/onlinebookshopping/adminhome.php">';
    				
    			}
    			else{
    				echo "session not opened";
    				echo'<meta http-equiv="refresh" content="10">';
    exit;
    			}
    		}
        
    	else{
    			echo "<h5>Please check your account informations.</h5>";
    			echo'<meta http-equiv="refresh" content="10">';
    			
    		}
    	}
	
	else{
		echo " <h5> Please login to your account.</h5>";
		echo'<meta http-equiv="refresh" content="10">';
	}

?>
</form>
</body>
<style>
body{
    text-align:center;
    }
.box {
        text-align: center;
        margin: auto;
        margin-top: 30px;
        width: 700px;
        height: 400px;
        border-radius: 5px;
        border-style: none;
        background-color: #D8BFD8;
        margin-bottom: 100px;
    }

.login{
        background-color: #7b68ee;
        border-radius: 5px;
        border-style: none;
        height: 35px;
    }
.logout{
        color: #9400D3;
}
.signuplink{
        color: #9400D3;
}

    
</style>
