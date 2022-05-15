<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
    <title>Login Page</title>
</head>
<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<body>
<form method="POST" action="" class="box">
    <br>
    <br>
    <h3 >Sign-In</h3>
    <br>
    <label for="mail">Email:</label>
    <input style="margin-left:4%;"type=text name="mail" placeholder="Please write your email." value="<?php echo''.$_POST['mail'].'' ?>">
    <br>
    <br>
    <label for="password">Password:</label>
    <input type=password name="password" placeholder="Please write your password."value="<?php echo''.$_POST['password'].'' ?>">
    <br>
    <br>
    <input class="login" type="submit" name="login" value="Sign-In">
    <br>
    <br>
    <a class="signuplink"href="http://ecepilli.com/onlinebookshopping/register.php#">You don't have an account yet? To Sign-Up, click here.</a>
    <br>
<system.web>
<sessionState timeout=”60″></sessionState>
</system.web>
<?php
try{
$db = new PDO("mysql:host=localhost; dbname=ece_user", 'ece_pilli', 'T(T9M.40v2Hq');
    }
catch (PDOException $e) {
        echo 'istisna f覺rlat覺ld覺: ' . $e->getMessage();
    }
session_start();
$_SESSION['session']==FALSE;
if($_POST){
    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $_SESSION['mail']=$mail;
    $_SESSION['id']=$id;
    $query = $db->query("SELECT * FROM user WHERE mail='$mail' AND password = '$pass'");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    if($result){
        
    $_SESSION['session']=TRUE;
    foreach($result as $row){
    echo 'Welcome ' .$row['name'];
    echo'<br>Please wait to directed account page...';
    echo'<meta http-equiv="refresh" content="2 URL=http://ecepilli.com/onlinebookshopping/user_update.php">';
        }
    }
    else{
    $_SESSION['session']=FALSE;
    echo "User not exist please check your informations.";
    }
}


?>
 


</form>
</body>
<style>
.box {
        text-align: center;
        margin: auto;
        margin-top:5%;
        width: 700px;
        height: 400px;
        border-radius: 5px;
        border-style: none;
        background-color: #D8BFD8;
        margin-bottom:4%;
    }

.login{
   border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#f2f3f7;
   text-align:center ;
 
   }
   .login:hover{
    border-color:#f2f3f7;
    background-color:#4b0082;
    color:#f2f3f7;
   }
.logout{
        color: #4b0082;
}
.signuplink{
        color: #4b0082;
}
.signuplink:hover{
        background-color: #4b0082;
        color:#f2f3f7;
}
input{
    border-style: none;
    width: 250px;
}
   body{
    background-color:#f2f3f7;
} 
</style>
<?php include 'footer.php' ?>