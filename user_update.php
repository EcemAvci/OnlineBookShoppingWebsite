<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
    <title>Account Informations Page</title>
</head>
<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<body>
<div class="container">
<div class="row">
<div class="col-4">
<?php include 'user_update_nav.php' ?>

</div>
    <div class="col-8" style="text-align:center; margin-top:5%">
    <h4 style="color:#4b0082">Account Information</h4>
    
    <form method="POST" action="">
	<br>
	<label for="name">Name: </label>
	<input type=text name="name" style="margin-left:25px" value="<?php 
        $query = $db->query("select * from user where mail = '$mail'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
			echo $result["name"];
	?>">
	<br>
	<br>
	<label for="lastname">Lastname: </label>
    <input type=text name="lastname" value="<?php 
        $query = $db->query("select * from user where mail = '$mail'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
			echo $result["lastname"];
	?>">
	<br>
	<br>
	<label for="mail">Email: </label>
	<input type=text name="mail" style="margin-left:25px"  value="<?php 
        $query = $db->query("select * from user where mail = '$mail'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
			echo $result["mail"];
	?>">
	<br>
	<br>
	<label for="phone">Phone: </label>
	<input type=text name="phone" style="margin-left:20px"  value="<?php 
        $query = $db->query("select * from user where mail = '$mail'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
			echo $result["phone"];
	?>">
	<br>
	<br>
	<label for="password">Password: </label>
	<input type=password name="password" style="margin-left:5px"  id="password" value="<?php 
        $query = $db->query("select * from user where mail = '$mail'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
			echo $result["password"];
	?>">
	<br>
	<br>
	<input class="update" type="submit" name="update account" value="Update">
	<br>
	<br>
</form>
<?php 
session_start();
if (isset($_POST['name']) and isset($_POST['lastname']) and isset($_POST['mail']) and isset($_POST['phone']) and isset($_POST['password']) ) {
            if (empty($_POST['name'])) {
            echo 'Please fill the name. <br>';
        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['name'])) {
            echo '<p style="text-align:center;color:#FF6347;">Only letters and white space.</p>';
        }
        if (empty($_POST['lastname'])) {
            echo 'Please fill the lastname. <br>';
        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['lastname'])) {
            echo '<p style="text-align:center;color:#FF6347;">Only letters and white space.</p>';
        }
        if (empty($_POST['mail'])) {
            echo '<p style="text-align:center;">Please fill the mail.</h4><br>';
        } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            echo '<p style="text-align:center;color:#FF6347;">Please fill the mail corrrectly.</p>';
        }
        if (empty($_POST['password'])) {
            echo 'Please fill the password. <br>';
        } elseif (strlen($_POST['password']) != 10) {
            echo '<p style="text-align:center;color:#FF6347;">Password s lenght must be 10.</p>';
        }
        if (empty($_POST['phone'])) {
            echo 'Please fill the phone. <br>';
        } elseif (strlen($_POST['phone']) != 10) {
            echo '<p style="text-align:center;color:#FF6347;">Phone s lenght must be 10.</p>';;
        }
        $mailquery = $db->prepare('SELECT * FROM user WHERE mail="'.$_POST['mail'].'"');
            $mailquery->execute();
            $mailresult = $mailquery->fetch(PDO::FETCH_ASSOC);
            if( $mailresult != 0){
                 echo '<p style="text-align:center;color:#FF6347;">The email already exists.</p>';
            }
    try {
        
        if (!empty($_POST['name'])) {
            if (preg_match("/^[a-zA-Z-' ]*$/", $_POST['name'])) {
                if (!empty($_POST['lastname'])) {
                    if (preg_match("/^[a-zA-Z-' ]*$/", $_POST['lastname'])) {
                        if (!empty($_POST['mail'])&& $mailresult == 0 ) {
                            if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                                if (!empty($_POST['password'])) {
                                    if (strlen($_POST['password']) == 10) {
                                        if (!empty($_POST['phone'])) {
                                            if (strlen($_POST['phone']) == 10) {
                                                
		    $mail=$_SESSION['mail'];

			$newquery=$db->prepare('update user set name="'.$_POST['name'].'",before_namelastname="'.$result["lastname"].'""'.$result["name"].'",lastname="'.$_POST['lastname'].'",before_mail="'.$result["mail"].'",mail="'.$_POST['mail'].'",before_phone="'.$result["phone"].'",phone="'.$_POST['phone'].'",before_password="'.$result["password"].'",password="'.$_POST['password'].'",update_date=NOW() where mail="'.$_SESSION['mail'].'" ');
			$newquery->execute();
	
			echo 'Your account updated successfully.';
			echo'<meta http-equiv="refresh" content="2 URL=http://ecepilli.com/onlinebookshopping/logout.php">';
            
                                        }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

}
catch (PDOException $e) {
        echo 'istisna f覺rlat覺ld覺: ' . $e->getMessage();
    }
}
?>
</div>
</div>
</div>
</body>
<?php include 'footer.php' ?>
<style>
body{
    background-color:#f2f3f7;
}
    .update{
        background-color: #D8BFD8;
        border-radius: 5px;
        border-style: none;
        height: 35px;
        margin-bottom:5.5%;
    }
    .update:hover{
        color:white;
        background-color:#4b0082;
    }
    label{
        color:#4b0082;
    }
    input{
        border-color:#4b0082;
        border-radius:1px;
        border-width: 1px;
    }
</style>
