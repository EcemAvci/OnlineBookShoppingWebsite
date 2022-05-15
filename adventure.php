<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Adventure Books Listing Page</title>
</head>
<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<body>
<div id="bookListing" class="container" >
<div class="Title"><h3>Showing Adventure Books</h3></div>
<div class="row">
<?php    
$query = $db->query("select * from book where book_category='Adventure' ");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
<div class="col-lg-3 col-sm-12">
    <div class="card" style="width: 70%; height: 100%;">
    <img class="image" src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="..."> 
    <div class="card-body">
    <h7 class="card-title"><?php echo''.$row['book_name'].'' ?></h7>
    <p class="card-text"><?php echo''.$row['book_category'].'' ?></p>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text" id="price"><?php echo''.$row['price'].' £' ?></p>
    <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
     <button book_id="<?php echo ''.$row['book_id'].'' ?>"class="addtocartbtn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
  <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"/>
</svg>Add to the cart</button>
    </div>
    </div>
</div>
<?php } ?>
</div>
</div>
</body>
<?php include 'footer.php' ?>
<style>
body{
    background-color:#f2f3f7;
}
    .title{
        margin-top: 5%;
        margin-bottom: 3%;
        text-align:center;
        
    }
    .card{
        margin-top: 5%;
        margin-bottom: 10%;
        border: 1px solid #FFFFFF;
        padding: 5px;
        max-height:600px;
        
    }

   .image{
      
      max-height: 300px;
       
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
   .addtocartbtn{
    border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#f2f3f7;
   text-align:center ;
   }
   .addtocartbtn:hover{
    border-color:#f2f3f7;
    background-color:#4b0082;
    color:#f2f3f7;
   }
   #price{
    color:red;
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