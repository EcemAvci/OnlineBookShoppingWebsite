<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
    <title>Favorite List Page</title>
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
    
    <th>Book</th>
    <th>Book Image</th>
    <th>Add to cart </th>
    <th>Delete</th>
</tr>
<?php
session_start();
$mail=$_SESSION['mail'];
if(isset($_SESSION['session']) && $_SESSION['session'] !='FALSE') 
    {
        echo '<h2 class="text-danger"> '.$_SESSION['session'].' </h2>';
                    unset($_SESSION['session']);
    }
    	
$query = $db->query("select * from favorite_books,user,book where mail= '$mail' and favorite_books.id=user.id and favorite_books.book_id=book.book_id");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
    	echo '<tr><td>'.$row['book_name'].'</td> 
    	<td> <img class="book_image" src="'.$row['book_img'].'"width="50"> '?>
    		<td>  <button book_id="<?php echo ''.$row['book_id'].'' ?>"class="addtocartbtn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
  <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> Add to the cart</button></td>
    		<td><form method="POST" action="" onclick="return myFunction()"><input class="delete" type="submit" name="delete" value="Delete"></form></td></tr>';
<?php  }
?>
<?php
    if(isset($_POST['delete'])){
	try
	{	
	$query = $db->prepare("DELETE FROM favorite_books WHERE  favorite_id = '".$row['favorite_id']."' ");
	$delete=$query->execute();
	if($delete){
        $_SESSION['session'] = "Book deleted successfully.";
    echo'<meta http-equiv="refresh" content="0;URL=http://ecepilli.com/onlinebookshopping/fav_list.php">';
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
</div>
</div>
</div>
</body>
<?php include 'footer.php' ?>
<style>
.delete{
        border:none;
    text-decoration:none;
    color:#4b0082;
}
.delete:hover{
     background-color:#e9e9e9;
}
.addtocartbtn{
    border:none;
    text-decoration:none;
    color:#4b0082;
}
.addtocartbtn:hover{
    background-color:#e9e9e9;
}
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
  background-color:#e9e9e9;
}
body{
    background-color:#f2f3f7;
}
.addtocartbtn{
    
}

</style>
<script>
        $(document).ready(function(){
     
  
     $(".addtocartbtn").click(function(){
         
     var url="http://ecepilli.com/onlinebookshopping/cart_db.php";
     var data={
         p:"addtocart",
         book_id: $(this).attr("book_id")
     }
     
         $.post(url,data,function(response){
             $(".cart-count").text(response);
         })
     })
 } );
</script>