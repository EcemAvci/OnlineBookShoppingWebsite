<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
    <title>Orders Page</title>
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
    <th>Order Date</th>
    <th>Adress</th>
    <th>Receiver</th>
    <th>Total Price</th>
    <th>Total Count</th>
    <th>Detail</th>
</tr>
<?php 
session_start();
$mail=$_SESSION['mail'];
$db = new PDO("mysql:host=localhost; dbname=ece_user", 'ece_pilli', 'T(T9M.40v2Hq');	
$query = $db->query("select *
from book_order,user,adress,book where book_order.id=user.id and book_order.adress_id=adress.adress_id and book.book_id=book_order.book_id and mail= '$mail'  GROUP BY order_date " );
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
	echo '<tr>
	<td>'.$row['order_date'].'</td>
	<td>'.$row['adres_name'].'</td>
	<td>'.$row['name']. "&nbsp". $row['lastname'].'</td>
	<td>'.$row['total_price'].'</td>
	<td>'.$row['total_count'].'</td>
	<td>  <form method="POST" action="order_detail.php?order_date='.$row["order_date"].'& id='.$row["id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>
    </td>
	</tr>';
    }
?>
</table>
</div>
</div>
</div>
</body>
<?php include 'footer.php' ?>
<style>
body{
    background-color:#f2f3f7;
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
  background-color: #e9e9e9;
}
  .detail{
   border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#f2f3f7;
   text-align:center ;
 
   }
   .detail:hover{
    border-color:#f2f3f7;
    background-color:#4b0082;
    color:#f2f3f7;
   }
</style>