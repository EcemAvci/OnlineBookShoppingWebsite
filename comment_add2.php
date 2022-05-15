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
<?php   
session_start();
$mail=$_SESSION['mail'];
$query = $db->query("select * from book,user where mail = '$mail' and  book_id='".$_GET['book_id']."' ");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){ ?>
 <div class="col-lg-8 col-sm-12">
    <div class="container" id="info">
    <div class="row">
     <div class="col-lg-6 col-sm-6">
            <img class="book_img" src="<?php echo''.$row['book_img'].'' ?>"> 
        </div>
        <div class="col-lg-6 col-sm-6">
           <div class="row">
               <div class="col-lg-6 col-sm-6">
               <p style="font-weight: bold;">Book Name:</p>
               <p  style="font-weight: bold;">Author:</p>
               </div>
               <div class="col-lg-6 col-sm-6" >
               <p><?php echo''.$row['book_name'].'' ?></p>
                <p><?php echo''.$row['author'].'' ?></p>
               </div>
               <form method="POST" action="">
               	<label for="comment">Add your comment:</label>
                <textarea name="comment" rows="10" cols="50" placeholder="Write your comment."></textarea>
                
           </div>
           <input type="submit" class="add" value="Add">
           </form>
            <?php if(isset($_POST['comment']) and !empty ($_POST['comment'])){
            $resultquery = $db->query('insert into comment values(NULL,"' . $_POST['comment'] . '","' . $row['id'] . '","' . $row['book_id'] . '",NULL,"Sent for checking")');
            
            echo'Thanks for your comments. After checking your comment, it will be published on the page of the corresponding book.';
            }
            else{
                echo 'Please write your comment.';
            }
		?>
           

    </div>   
    </div>
    </div>
    </div>
     </div>
     <?php }
     ?>
    </div>
     <?php include 'footer.php' ?>
    </body>
<style>
body{
    background-color:#f2f3f7;
}
    .book_img{
         width:80%;
         height:100%;
    }
    #info {
        margin-top:10%;
    }
    .add{
   margin-top:5%;
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
</style>