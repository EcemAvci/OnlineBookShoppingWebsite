<?php include 'connection.php' ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <title><?php echo''.$_GET['book_name'].'' ?> Detail</title>
</head>
<body>
<?php include 'header.php' ?>
<div class="container">
    <div class="row">
<?php  
$query = $db->query('select * from book where book_id="'.$_GET['book_id'].'"
');
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
        <div class="col-lg-6 col-sm-6">
            <img class="book_image" src="<?php echo''.$row['book_img'].'' ?>"> 
        </div>
        <div class="col-lg-6 col-sm-6">
           <div class="row">
               <div class="col-lg-3 col-sm-6">
               <p class="first" style="font-weight: bold;">Book Name:</p>
               </div>
               <div class="col-lg-3 col-sm-6" >
               <p style="float:left" class="first"><?php echo''.$row['book_name'].'' ?></p>
               </div>
               <div class="col-lg-3 col-sm-6">
               <p class="first" style="font-weight: bold;">Genre:</p>
               </div>
               <div class="col-lg-3 col-sm-6" >
               <p class="first"><?php echo''.$row['book_category'].'' ?></p>
               </div>
           </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6" >
               <p style="font-weight: bold;">Author:</p>
               </div>
               <div class="col-lg-3 col-sm-6" >
               <p><?php echo''.$row['author'].'' ?></p>
               </div>
            <div class="col-lg-3 col-sm-6" >
               <p style="font-weight: bold;">Publisher:</p>
               </div>
               <div class="col-lg-3 col-sm-6" >
               <p><?php echo''.$row['publisher'].'' ?></p>
               </div>
           </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6" >
               <p style="font-weight: bold;">Edition:</p>
               </div>
               <div class="col-lg-3 col-sm-6" >
               <p><?php echo''.$row['edition'].'' ?></p>
               </div>
                <div class="col-lg-3 col-sm-6" >
               <p style="font-weight: bold;">Language:</p>
               </div>
               <div class="col-lg-3 col-sm-6" >
               <p><?php echo''.$row['language'].'' ?></p>
               </div>
           </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6" >
               <p style="font-weight: bold;">Page-count:</p>
               </div>
               <div class="col-lg-3 col-sm-6" >
               <p><?php echo''.$row['page_count'].'' ?></p>
               </div>
           </div>
           <div class="row">
            <div class="col-lg-3 col-sm-6" >
           <h1 style="color:red;"><?php echo''.$row['price'].'' ?> £</h1>
           </div>
            <div class="col-lg-3 col-sm-6" >
                <div class='addtocart'>
                    <button book_id="<?php echo ''.$row['book_id'].'' ?>"class="addtocartbtn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
  <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"/>
</svg> Add to the cart</button>
                </div>
                <?php

                ?>
                
           </div>

<?php } ?>
            <div class="col-lg-6 col-sm-6" >
                <div class='scoreboard'> 
                <div class="row">
                    <div class="col-lg-6 col-sm-12" >
                        <?php 
                        $avgscore = $db->query('SELECT AVG(score) AS average
                FROM score WHERE book_id= "'.$_GET['book_id'].'"');
                    $avgscoreresult = $avgscore->fetchAll(PDO::FETCH_ASSOC);
                    
                        foreach($avgscoreresult as $avgscorerow){
                           
                            $average = $avgscorerow['average'];
                            

                            
                ?>
                <h4>Average Score of the Book:</h4>
                         <?php 
                        if($average != 0){
                        echo"<h4> $average</h4> " ; } 
                        else{ 
                        echo'This book has not been yet score.'; }
                        }?> 
                        
                        </div>
                        
                </div>
                   <form action="" method="POST" >
                       <input type="submit" id="one" name="one" value=""     style="background-image :url(http://ecepilli.com/onlinebookshopping/images/score.png)">
                       <input type="submit" id="two" name="two"  value=""style="background-image :url(http://ecepilli.com/onlinebookshopping/images/score.png)" >
                       <input type="submit" id="three" name="three"  value=""style="background-image :url(http://ecepilli.com/onlinebookshopping/images/score.png)">
                       <input type="submit" id="four" name="four"  value=""style="background-image :url(http://ecepilli.com/onlinebookshopping/images/score.png)">
                       <input type="submit" id="five" name="five"  value=""style="background-image :url(http://ecepilli.com/onlinebookshopping/images/score.png)">
                   </form>
                </div>
                <?php
                 $checkscore = $db->prepare("SELECT * FROM score,user WHERE book_id = '".$_GET['book_id']."'and score.id=user.id and mail='$mail'");
                 $checkscore->execute();
                $checkingscore = $checkscore->fetch(PDO::FETCH_ASSOC);
                if($checkingscore > 0)
                 {
                 echo "You already gave score to this book !";
                 }
                else{
                
                $score = $db->query("select * from book_order,user where mail='$mail' and book_order.id=user.id and book_order.book_id='".$_GET['book_id']."' ");
                $scoreresult = $score->fetchAll(PDO::FETCH_ASSOC);
                    if($scoreresult <= 0)
                    {
                     echo 'To give your product a score, you must purchase it.';
                }
                      else{
                 foreach($scoreresult as $scorerow){
              
                if(isset($_POST['one'])){
                    $scoreonequery = $db->prepare('INSERT INTO `score`(`score_id`, `score`, `id`, `book_id`) VALUES (NULL,1,"'.$scorerow['id'].'","'.$_GET['book_id'].'")');
                    $insertscoreone=$scoreonequery->execute();
                

                }
                
                
            	if(isset($_POST['two'])){
            	 $scoretwoquery = $db->prepare('INSERT INTO `score`(`score_id`, `score`, `id`, `book_id`) VALUES (NULL,2,"'.$scorerow['id'].'","'.$_GET['book_id'].'")');
                    $inserttwoscore=$scoretwoquery->execute();
                 

                }
                if(isset($_POST['three'])){
            	 $scorethreequery = $db->prepare('INSERT INTO `score`(`score_id`, `score`, `id`, `book_id`) VALUES (NULL,3,"'.$scorerow['id'].'","'.$_GET['book_id'].'")');
                    $insertthreescore=$scorethreequery->execute();

                }
                if(isset($_POST['four'])){
            	 $scorefourquery = $db->prepare('INSERT INTO `score`(`score_id`, `score`, `id`, `book_id`) VALUES (NULL,4,"'.$scorerow['id'].'","'.$_GET['book_id'].'")');
                    $insertfourscore=$scorefourquery->execute();
                  

                }
                if(isset($_POST['five'])){
            	 $scorefivequery = $db->prepare('INSERT INTO `score`(`score_id`, `score`, `id`, `book_id`) VALUES (NULL,5,"'.$scorerow['id'].'","'.$_GET['book_id'].'")');
                    $insertfivescore=$scorefivequery->execute();
                  
                        }
                    }
 
                }

                }
                ?>
                </div>

        </div>
      <form method="POST" action="">
 
        <input type="submit" class="add" name="add"  value="Add favorite list" >
      </form>
       <?php 
        $checkbook = $db->prepare("SELECT * FROM favorite_books,user WHERE book_id = '".$_GET['book_id']."' and favorite_books.id=user.id and mail='$mail' ");
        $checkbook->execute();
        $checking = $checkbook->fetch(PDO::FETCH_ASSOC);
        if($checking > 0)
        {
            echo "You already added this book to your favorite list !";
        }
        else{
       $mail=$_SESSION['mail'];
       $addquery = $db->query("select * from user where mail='$mail' ");
       $addresult = $addquery->fetchAll(PDO::FETCH_ASSOC);
            foreach($addresult as $addrow){
        if(isset($_POST['add'])){
            $resultquery = $db->prepare('INSERT INTO `favorite_books`(`favorite_id`, `id`, `book_id`) VALUES (NULL,"'.$addrow['id'].'","'.$_GET['book_id'].'")');
            $add=$resultquery->execute();
            
    }
}
}
    	?>
        <div class="comments">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
            <h3>Comments</h3>
            </div>
        </div>
        
        <?php    
          $query = $db->query('select * from comment,user where book_id="'.$_GET['book_id'].'" and comment.id=user.id and deleted_at IS NULL and situation="Published at corresponding book page"');
         $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row){ ?>
        <table>
        <tr>
         <th>Customer name</th>
        <th>Comment</th>
        </tr>
        <tr>
            <td><?php echo''.$row['name'].' '.$row['lastname'].'' ?></td>
            <td><?php echo''.$row['comment_information'].'' ?></td>
        </tr>
        </table>
         <?php 
        } 
         $say = $query -> rowCount();
            if( $say == 0 ){
                 echo 'There are no comment,to make a comment, you need to purchase the book.';
             }
         ?>

  
</div>
    </div>
</div>
</div>
</body>
<?php include 'footer.php' ?>
<style>
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
    .book_image {
        margin-top:15%;
        width:50%;
        height:70%;
    }
    .first {
        margin-top:50%;
    }
    p {
        font-size:10pt;
    }
    .addtocart{
        margin-top:10%;
    }
    .addtocartbtn{
        text-decoration:none;
        color:#4b0082;
        background-color:#D8BFD8;
        border-style:none;
    }
    .addtocartbtn:hover{
        color:#D8BFD8;
        background-color:#4b0082;
    }
    #one{
    width:15%;
    height:22%;
    border-style:none;
    background-color:white;
    }
    #one:hover{
    background-color:#4b0082;
    }
    #two{
    width:15%;
    height:22%;
    border-style:none;
    background-color:white;
    }
    #two:hover{
    background-color:#4b0082;
    }
    #three{
    width:15%;
    height:22%;
    border-style:none;
    background-color:white;
    }
    #three:hover{
    background-color:#4b0082;
    }
    #four{
    width:15%;
    height:22%;
    border-style:none;
    background-color:white;
    }
    #four:hover{
    background-color:#4b0082;
    }
    #five{
    width:15%;
    height:22%;
    border-style:none;
    background-color:white;
    }   
    #five:hover{
    background-color:#4b0082;
    }
.add_favlist{
    text-decoration:none;
    font-size:15pt;
    color:#4b0082;
}
.add{
   border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#e9e9e9;
   width:30%;
   margin-top:10%;

}
.add_favlist:hover{
    color:#e9e9e9;
}
.add:hover{
    border-color:#e9e9e9;
    background-color:#4b0082;
    color:#e9e9e9;
}
body{
    background-color:#f2f3f7;
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


