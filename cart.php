<head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Cart</title>
</head>
<?php include 'header.php' ;?>
<?php include 'connection.php' ?>
<body>

<div class="container">
       
    <?php 
    if($total_count>0){?>
        
        <h2 class="text-center">Your cart has <strong class="text-danger"><?php echo $total_count; ?></strong> item.</h2>
        <hr>

        <div class="row">
        <table>
            <thead>
            <td>
                Product Image
            </td>
            <td>
                Product Name
            </td>
            <td>
                Price
            </td>
            <td>
                Count
            </td>
            <td>
                Total Price
            </td>
            <td>
                Remove 
            </td>
            </thead>
            <tbody>
               
                    <?php 
                    foreach($shopping_books as $books){
                     
                    ?>
                    
                        <tr>
                        <td class="text-center" width="120">
                            <img src="<?php echo $books->book_img; ?>" width="50">
                        </td>
                        <td class="text-center"><?php echo $books->book_name; ?></td>
                        <td class="text-center"><strong><?php echo $books->price; ?></strong></td>
                        <td class="text-center">
                            <a href="cart_db.php?p=incCount&book_id=<?php echo $books->book_id;  ?>" >
                                <svg class="increase" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
                            </a>
                            <input type="text" class="item-count-input" value=<?php echo $books->count; ?>>
                            <a href="cart_db.php?p=decCount&book_id=<?php echo $books->book_id;  ?>" >
                                <svg class="decrease"xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-dash-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg>
                            </a>
                         </td>
                         <td class="text-center"><?php echo $books->total_price; ?></td>
                         
                         <td class="text-center" width="120">
                             <button book_id="<?php echo $books->book_id;  ?>" class="btn btn-danger btn-sm removeFromCartBtn">
                                 <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
  <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
</svg></span> Remove from Cart
                             </button>
                             
                             <?php 
             
             if(isset($_POST['order']) && isset($_POST['adresses']))
                {
                $selectAdress = $_POST['adresses'];
                $insertquery = $db->prepare("select * from user where mail = '$mail'");
                 $insertquery->execute();
                 $insertresult = $insertquery->fetchAll(PDO::FETCH_ASSOC);
                 foreach($insertresult as $newrow){
                    $newbook=$books->book_id;
                    $countbook=$books->count;
                    $newquery = $db->query("INSERT INTO `book_order`(`order_id`,`order_date`, `order_situation`, `id`, `cart_id`, `adress_id`, `book_id`,`book_count`,`total_price`,`total_count`) VALUES (NULL,CURRENT_TIMESTAMP,'Progressing','".$newrow['id']."',NULL,'$selectAdress','$newbook','$countbook','$total_price','$total_count')");
                    
                }    
                
                echo'<meta http-equiv="refresh" content="0;url=http://ecepilli.com/onlinebookshopping/order_success.php" />';
                    unset($_SESSION["shoppingCart"]);
                }
                else{
                    echo"";
                }
                             }
                             
                            
                              ?>
                         </td>
                        </tr>
            </tbody>

            <tfoot>
                <th colspan="2" class="text-right">
                    Total product count: <span class="text-danger"><?php echo $total_count ; ?></span>
                </th>
                 <th colspan="4" class="text-right">
                    Total price: <span class="text-danger"><?php echo $total_price ; ?></span>
                </th>
            </tfoot>
        </table>
      
          <form method="POST" action="">
          <label for="adresses">Please select your address:</label>
          <br>
          <br>
             <?php 
             $mail=$_SESSION['mail'];
            $db = new PDO("mysql:host=localhost; dbname=ece_user", 'ece_pilli', 'T(T9M.40v2Hq');	
?>
            <select name="adresses" class="adresses" size="1">
            <?php 
            $query2 = $db->query("select * from adress,user where adress.id=user.id and mail= '$mail'and deleted_at IS NULL order by adres_name asc");
            $result = $query2->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
                $adress_id = $row["adress_id"];
                $adres_name = $row["adres_name"];
            ?>
            <option value="<?php echo $adress_id; ?>"><?php echo $adres_name; ?></option>
            <?php } ?>
            </select>
            
              <input type="submit" name="order" class="order" value="Complete my order">
            
            </form>
            <p>If you have not added an address,<a href="http://ecepilli.com/onlinebookshopping/adresses.php" style="color:#4b0082">click here.</a></p>
        </div>
    <?php } else{ ?>

    <div class="alert" style="margin-top:5%; background-color:#D8BFD8;"><strong style="color:#4b0082;">Your shopping cart is empty.Click here to  <a href="product_listing.php">add</a></strong></div>
 <?php } ?>
   <div class="alert" style="margin-top:5%; background-color:#D8BFD8; "><a style="text-decoration:none; color:#4b0082;" href="purchaserecomend.php">Recommend me a book based on my previous purchases</a></div>

</div>
</body>

<?php include 'footer.php' ?>

<style>


body{
    background-color:#f2f3f7;
}
table {
  border-collapse: collapse;
  width: 100%;
  margin-top:50%;
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
.increase{
    background-color:green;
    border-style:none;
    color:white;
}
.decrease{
    background-color:red;
    border-style:none;
    color:white;
}
.item-count-input{
    width:10%;
}
.order{
    float:right
}
.adresses{
    width:30%;
}
.order{
   border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#f2f3f7;
   text-align:center ;
}
.order:hover{
    border-color:#f2f3f7;
    background-color:#4b0082;
    color:#f2f3f7;
}

</style>
<script>
$(document).ready(function(){
     
    $(".removeFromCartBtn").click(function(){
         
     var url="http://ecepilli.com/onlinebookshopping/cart_db.php";
     var data={
         p:"removeFromCart",
         book_id: $(this).attr("book_id")
     }
     
         $.post(url,data,function(response){
             console.log();
            window.location.reload();
         })
     })
       

 } );
 
</script>
