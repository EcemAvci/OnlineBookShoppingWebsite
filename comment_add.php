<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	
    <title>Comment Add Page</title>
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
	<br>
	<?php 
			session_start();
		    $mail=$_SESSION['mail'];
	        $newquery = $db->prepare("select * from book_order,book,user where book_order.book_id=book.book_id and book_order.id=user.id and mail = '$mail' and not exists(select * from comment where comment.id=user.id and book.book_id=comment.book_id and deleted_at IS NULL)");
            $newquery->execute();
            $newresult = $newquery->fetchAll(PDO::FETCH_ASSOC);
            foreach($newresult as $list){ ?>
            <div class="row"> 
            <div class="col-lg-6 col-sm-6"> 
                <img class="book_img" src="<?php echo''.$list['book_img'].''?>" >
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="row">
            <div class="col-lg-6 col-sm-6">
                <p>Book name:</p>
                <p>Author:</p>
            </div>
            <div class="col-lg-6 col-sm-6">
                <p><?php echo''.$list['book_name'].''?></p>

                <p><?php echo''.$list['author'].''?></p>
            </div>
             
            
            <?php echo ' <form method="POST" action="comment_add2.php?book_id='.$list["book_id"].'"><input class="add" type="submit" name="add" value="Add"> </form>' ?>
            </div>
            </div>
            <hr>
            </div>
 <?php } 
 $say = $newquery -> rowCount();
if( $say == 0 ){
    echo 'There are no books you can comment.';
 }
 ?>

</div>
</div>
</div>
</body>
<?php include 'footer.php' ?>
<style>
body{
    background-color:#f2f3f7;
}
    .book_img{
         width:50%;
         height:80%;
    }
    .add{
   border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#e9e9e9;
   width:10%;
   margin-left:80%;
   margin-top:2%;

    }
    .add:hover{
        border-color:#e9e9e9;
        background-color:#4b0082;
        color:#e9e9e9;
    }
</style>