<head>
    <?php $db = new PDO("mysql:host=localhost; dbname=ece_user", 'ece_pilli', 'T(T9M.40v2Hq');	 ?>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Order Success</title>
</head>
<?php include 'header.php' ;?>
<body>

<div class="container">
    <img class="img" src="images\indir.png" width="400" height="300" >
    <h5 style="text-align:center; margin-top:2%;">Your order has been successfully completed.</h5>
    <h6 style="text-align:center;margin-top:2%;">To view your order, go to the<a href="http://ecepilli.com/onlinebookshopping/orders.php" style="color:#4b0082"> orders page </a> .</h6>
</div>
</body>

<?php include 'footer.php' ?>

<style>
.img{
    
    display: block; 
    margin: auto;
    margin-top:5% ;
}
body{
    background-color:#f2f3f7;
}
</style>