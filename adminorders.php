<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Order Page</title>
  </head>
  <body>
      <nav class="navbar navbar-light bg-light">
     <div class="container">
    <a class="navbar-brand" href="http://ecepilli.com/onlinebookshopping/">
     <img src="images\logo.png" href="http://ecepilli.com/onlinebookshopping/" alt="" width="150" height="100" style="float: left;"><h4 style="margin-top:10%">Online Book Shopping</h4>
    </a>
  </div>
</nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="http://ecepilli.com/onlinebookshopping/adminhome.php" style="font-size:20px; font-weight:bold; color:#7b68ee">Comments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://ecepilli.com/onlinebookshopping/adminorders.php" style="font-size:20px; font-weight:bold; color:#7b68ee">Orders</a>
          </li>
        </ul>
      </div>
        <button class="btn btn-outline-danger me-2" type="button" style="float:right;"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                      fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg><a href="logout.php" style="text-decoration:none; ">Logout </a>  </button>
      </div>
    </nav>
<?php include 'connection.php' ?>
<?php 
    session_start();
    ob_start();
    $username=$_SESSION['username'];

        if(isset($_SESSION['adminsession']) && $_SESSION['adminsession'] !=FALSE) 
    {
        echo '<h2 class="text-success" style="margin-left:2%"> '.$_SESSION['adminsession'].' </h2>';
                    unset($_SESSION['adminsession']);
    }
?>

<div class="container">
<h2 style="margin-top:5%;">Orders</h2>

    <table>
      <tr>
        <th>Customer Mail</th>
        <th>Order Date</th>
        <th>Situation</th>
        <th>Adress</th>
    	<th>Detail</th>
      </tr>
</div>
<?php
$newquery = $db->query("select * from book_order,user,adress,book where book_order.id=user.id and book_order.adress_id=adress.adress_id and book_order.book_id=book.book_id group by order_date asc");
$newresult = $newquery->fetchAll(PDO::FETCH_ASSOC);
foreach($newresult as $newrow){
			echo '<tr>';
				echo '<td>'.$newrow['mail'].'</td>';
				echo '<td>'.$newrow['order_date'].'</td>';
				echo '<td>'.$newrow['order_situation'].'</td>';
				echo '<td>'.$newrow['adress'].'</td>';
					echo '<td><form method="POST" action="adminorder_detail.php?order_date='.$newrow['order_date'].'& id='.$newrow['id'].'"><input class="detail" type="submit" name="detail" value="Detail"> </form></td>';
				echo '</tr>';
}  

     

?>
</table>

  </body>
</html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:2%;
  margin-bottom:5%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
