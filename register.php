<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
    <title>Register Page</title>
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( document ).tooltip();
  } );
  </script>
</head>
<?php include 'header.php' ?>
<body>
<form method="POST" action="" class="box">
    <br>
    <br>
    <h3 >Sign-Up</h3>
    <br>
    <label for="name">Name:</label>
    <input style="margin-left:6%;" type=text name="name" placeholder="Write your name." value="<?php echo''.$_POST['name'].'' ?>">
    <br>
    <br>
    <label for="lastname">Lastname:</label>
    <input style="margin-left:3%;"type=text name="lastname" placeholder="Write your lastname." value="<?php echo''.$_POST['lastname'].'' ?>">
    <br>
    <br>
    <label for="mail">Email:</label>
    <input style="margin-left:7%;" type=text name="mail" placeholder="Write your email." value="<?php echo''.$_POST['mail'].'' ?>">
    <br>
    <br>
    <label for="phone">Phone:</label>
    <input style="margin-left:6%;" type=text name="phone" placeholder="Write your phone number." title="Your phone must be 10 digit." value="<?php echo''.$_POST['phone'].'' ?>">
    <br>
    <br>
    <label for="password">Password:</label>
    <input style="margin-left:3%;" type=password name="password" placeholder="Write your password." title="Your password must be 10 digit." value="<?php echo''.$_POST['password'].'' ?>">
    <br>
    <br>
    <input style="margin-left:6%;" type="checkbox" id="checking" name="checking" value="checking">
    <label for="vehicle1">I have read the <a style="color:#4b0082" href="#">contract</a>,I understand it and I approve it.</label>
    <br>
    <br>
    <input style="margin-left:3%;" class="create" type="submit" name="create account" value="Create Account">
    <br>
    <br>
</form>
<?php
$mail=$_POST['mail'];
$mailquery = $db->prepare("SELECT * FROM user WHERE mail='$mail'");
$mailquery->execute();
$mailresult = $mailquery->fetch(PDO::FETCH_ASSOC);
if (isset($_POST['name']) and isset($_POST['lastname']) and isset($_POST['mail']) and isset($_POST['phone']) and isset($_POST['password']) and isset($_POST['checking'])) {
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
            echo '<p style="text-align:center;color:#FF6347;">Phone s lenght must be 10.</p>';
        }
        if (empty($_POST['checking'])) {
            echo '<p style="text-align:center;color:#FF6347;">Please accept the contract.</p>';
        }
    if($mailresult != 0)
            {
            echo '<p style="text-align:center;color:#FF6347;">There is an account belonging to this e-mail.</p>';
    }
    try {
        if (!empty($_POST['name'])) {
            if (preg_match("/^[a-zA-Z-' ]*$/", $_POST['name'])) {
                if (!empty($_POST['lastname'])) {
                    if (preg_match("/^[a-zA-Z-' ]*$/", $_POST['lastname'])) {
                        if (!empty($_POST['mail'])&& $mailresult == 0) {
                            if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                                if (!empty($_POST['password'])) {
                                    if (strlen($_POST['password']) == 10) {
                                        if (!empty($_POST['phone'])) {
                                            if (strlen($_POST['phone']) == 10) {
                                                if (!empty($_POST['checking'])) {
                                                    $query = $db->prepare('insert into user values (NULL,"' . $_POST['name'] . '","' . $_POST['lastname'] . '","' . $_POST['mail'] . '","' . $_POST['phone'] . '","' . $_POST['password'] . '","' . $_POST['checking'] . '",NOW(),NULL,NULL,NULL,NULL,NULL)');
                                                    $query->execute();
                                                    echo '<p style="text-align:center; color:#32CD32;">Your account created succesfully.</p>';
                                                    echo '<form style="text-align: center;" method="POST" action="login.php">
                                                        <input class="loginbutton" type="submit" name="list" value="Login">
                                                        </form>';
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


      

    } catch (PDOException $e) {
        echo 'istisna fırlatıldı: ' . $e->getMessage();
    }
}
?>
</body>
<style>
body{
    background-color:#f2f3f7;
}
.box {
        text-align: center;
        margin: auto;
        margin-top: 30px;
        width: 700px;
        height: 500px;
        border-radius: 5px;
        border-style: none;
        background-color: #D8BFD8;
    }

.create {
   border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#f2f3f7;
   text-align:center ;
 
   }
   .create:hover{
    border-color:#f2f3f7;
    background-color:#4b0082;
    color:#f2f3f7;
   }
   
.loginbutton {
     border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#f2f3f7;
   text-align:center ;
    }
.loginbutton:hover{
    border-color:#f2f3f7;
    background-color:#4b0082;
    color:#f2f3f7;
   }
   
    
</style>
<?php include 'footer.php' ?>