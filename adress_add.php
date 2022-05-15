<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	
    <title>Addresses Page</title>
</head>
<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<body>
<div class="container">
<div class="row">
<div class="col-lg-4 col-sm-12">
<?php include 'user_update_nav.php' ?>
</div>
<div class="col-lg-8 col-sm-12" style="text-align:center; margin-top:5%">
<form method="POST" action="">
	<br>
	<label for="name">Address Title:</label>
	<input type=text name="adress_name" placeholder="Write your address title.">
	<br>
	<br>
	<label for="adress">Address:</label>
    <textarea name="adress" rows="10" cols="50" placeholder="Write your address."></textarea>
	<br>
	<br>
	<label for="country">City:</label>
	<select name="city">
        <option value="0">------</option>
        <option value="Adana">Adana</option>
        <option value="Ankara">Ankara</option>
        <option value="Antalya">Antalya</option>
        <option value="Aydın">Aydın</option>
        <option value="Bursa">Bursa</option>
        <option value="Denizli">Denizli</option>
        <option value="Istanbul">İstanbul</option>
        <option value="Izmir">İzmir</option>
    </select>
	<br>
	<br>
	<input type="submit" name="add" value="Add" class="add">
	<br>
	<br>
</form>
<?php	
if(isset($_POST['adress_name'] )and isset($_POST['adress']) and isset($_POST['city']))
    {
		if(!empty ($_POST['adress_name'])and(!empty($_POST['adress'])) and (!empty($_POST['city']))){
		    session_start();
		    $mail=$_SESSION['mail'];
            $query = $db->prepare("select * from user where mail = '$mail'");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
            $newquery = $db->query('insert into adress values(NULL,"' . $_POST['adress_name'] . '","' . $_POST['city'] . '","' . $_POST['adress'] . '","' . $row['id'] . '",NULL) ');
            echo'Added successfully.';
            }
		}
    }
?>
</div>
</div>
</div>
</body>
<?php include 'footer.php' ?>
<style>
     .add{
   border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#f2f3f7;
   text-align:center ;
 
   }
   .add:hover{
    border-color:#f2f3f7;
    background-color:#4b0082;
    color:#f2f3f7;
   }
</style>