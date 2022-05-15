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
$query = $db->query("select * from comment,user,book where mail = '$mail' and  comment_id='".$_GET['comment_id']."' and comment.book_id=book.book_id ");
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
               	<label for="updatecomment">Update your comment:</label>
                <textarea name="updatecomment" rows="10" cols="50" placeholder="Write your comment."></textarea>
        
           </div>
           <input type="submit" class="update" value="Update">
           </form>
                <?php }
                if(isset($_POST['updatecomment'])){
                    if(!empty ($_POST['updatecomment'])){
		    	$newquery=$db->query('update comment set comment_information="' . $_POST['updatecomment'] . '"');
		    	$situationquery=$db->query('update comment set situation="Sent for checking" ');
			echo 'Your comment updated successfully.After checking your comment, it will be published on the page of the corresponding book.';
	        } 
	         else{
                echo 'Please write your comment.';
            }
        }
           
		?>
           

    </div>   
    </div>
    </div>
    </div>
     </div>

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
    .update{
        margin-top:5%;
    }
</style>