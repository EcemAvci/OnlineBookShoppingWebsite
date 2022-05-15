<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <title>Order Detail</title>
</head>
<body>
<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<div class="container">
    <div class="row">
        <h3 style="margin-top:3%">Order Detail:</h3>
   <?php  
$userquery = $db->query('select * from book_order,user,adress where order_date="'.$_GET['order_date'].'" and user.id="'.$_GET['id'].'" and book_order.adress_id=adress.adress_id and book_order.id=user.id group by name
');
$userresult = $userquery->fetchAll(PDO::FETCH_ASSOC);
foreach($userresult as $userrow){
    echo'<p style="margin-top:2%"><b>Receiver: </b>'.$userrow['name']. "&nbsp" .$userrow['lastname'].' </p>
        <p><b>Address: </b>'.$userrow['adress'].' </p>
        <p><b>Total Price: </b>'.$userrow['total_price'].' </p>';
}

  ?>       
        
<?php  
$query = $db->query('select * from book_order,user,book where order_date="'.$_GET['order_date'].'" and user.id="'.$_GET['id'].'" and book_order.book_id=book.book_id
');
$result = $query->fetchAll(PDO::FETCH_ASSOC);

  ?>  
  
 <div >
<table>
<tr>
    <th>Book Image</th>
    <th>Book Name</th>
    <th>Price</th>
    <th>Count</th>
    <th>Situation</th>
</tr>
<?php
foreach($result as $row){
     echo'
     <tr>
     <td class="text-center"><img src="'.$row['book_img'].'"width="50"></td>
     <td>'.$row['book_name'].'</td>
     <td>'.$row['price'].'</td>
     <td>'.$row['book_count'].'</td>
     <td>'.$row['order_situation'].'</td>
     </tr>
     ';
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
  margin-top:2%;
  margin-bottom:1%;
}

td, th {
  border: 1px solid #4b0082;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #e9e9e9;
}

</style>
  