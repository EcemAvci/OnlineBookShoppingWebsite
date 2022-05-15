<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Adresses Page</title>
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
<table>
<tr>
    <th>Address Title</th>
    <th>Address</th>
    <th>City</th>
    <th>Update</th>
    <th>Delete</th>
</tr>
<?php 
session_start();
if(isset($_SESSION['session']) && $_SESSION['session'] !='FALSE') 
    {
        echo '<h2 class="text-danger"> '.$_SESSION['session'].' </h2>';
    }
    
$mail=$_SESSION['mail'];
$db = new PDO("mysql:host=localhost; dbname=ece_user", 'ece_pilli', 'T(T9M.40v2Hq');	
$query = $db->query("select * from adress,user where deleted_at IS NULL and adress.id=user.id and mail= '$mail' order by deleted_at asc");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
	echo '<tr><td>'.$row['adres_name'].'</td>
	<td>'.$row['adress'].'</td>
	<td>'.$row['city'].'</td>
	<td>
	<form method="POST" action="adress_update.php?adress_id='.$row["adress_id"].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg><input class="update" type="submit" name="update" value="Update"> </form></td>
	<td><form method="POST" action="" onclick="return myFunction()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>

<input class="delete" type="submit" name="delete" value="Delete"> </form></td></tr>';
    }
    if(isset($_POST['delete'])){
	try
	{	
	$query = $db->prepare("DELETE FROM adress WHERE adress_id = '".$row['adress_id']."' ");
	$delete=$query->execute();
	if($delete){
        $_SESSION['session'] = "Address deleted successfully.";
    echo'<meta http-equiv="refresh" content="0;URL=http://ecepilli.com/onlinebookshopping/adresses.php">';
    
	}
	else{
	    echo'Not delete';
	}
}
catch(PDOException $e)
{
    echo 'istisna f覺rlat覺ld覺: ' . $e->getMessage();
}  
}
?>
</table>
<div class="add">
<a class="add_a" href="http://ecepilli.com/onlinebookshopping/adress_add.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
    </svg>Add</a>
</div>
</div>
</div>
</div>
</body>
<?php include 'footer.php' ?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:5%;
  margin-bottom:5%;
}

td, th {
  border: 1px solid #4b0082;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #e9e9e9;
}
.update{
   border:none;
   color:#4b0082;
   background-color:#e9e9e9;
}
.delete{
    border:none;
   color:#4b0082;
   background-color:#e9e9e9;
}
.update:hover{
    background-color:#4b0082;
    color:#e9e9e9;
}
.delete:hover{
    background-color:#4b0082;
    color:#e9e9e9;
}
.add_a{
    text-decoration:none;
    font-size:15pt;
    color:#4b0082;
}
.add{
   border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#e9e9e9;
   width:10%;

}
.add_a:hover{
    color:#e9e9e9;
}
.add:hover{
    border-color:#e9e9e9;
    background-color:#4b0082;
    color:#e9e9e9;
}
body{
    background-color:#f2f3f7;
}
</style>
<script>
function myFunction() {
    if(confirm("Are you sure you want to delete the address?")){}
      else{ return false; }
 
}
</script>