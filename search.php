<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<body>

<?php
                        $search = $_POST["search"];
                        if(empty($search)){
                        echo'<meta http-equiv="refresh" content="0 URL=http://ecepilli.com/onlinebookshopping/home.php">';
                        }
                        if(isset($search) ){
                            if(!empty($search)){
                        $query = $db->query("select * from book where book_name like '%$search%'",PDO::FETCH_ASSOC);
                        if($query->rowCount()){
                     echo '<div class="results">
                    <div class="row">
                    <h3 class="title">Results for '.$search.' :</h3>
                     </div>';
                        foreach($query as $row){
                       echo '
                        <div class="post excerpt">
                        <header>
    
                        <div class="post-info">
                        <time> <b>Author :</b> '.$row['author'].'</time>
                        </div>
                       
                        <div class="featured-thumbnail"><img src="'.$row['book_img'].'" class="oval" height="150px" width="150px"></div> </a>
                        <p>'.$row['book_name'].'</p>
                        <button class="more"><a href="book_detail.php?book_id='.$row['book_id'].'">Detail ></a>
                        </button>
                        </div>
                        ';
                        }
                        }
                        else{
                            echo'<div class="nomatching">No book matching the word you are looking for has been found.</div>';
                        }
                        }
                        }
                        
?>
</div>
</body>

<style>
body{
    background-color:#f2f3f7;
}
.results{
    margin-top:2%;
    text-align:center;
}
.more{
    border:1px solid #4b0082;
   border-radius:5px;
   color:#4b0082;
   background-color:#e9e9e9;
    width:10%;
    margin-bottom: 2%;
}
.more a{
   text-align:center ;
   text-decoration:none;
   color:#4b0082;
}
.more :hover{
    border-color:#e9e9e9;
    background-color:#4b0082;
    color:#e9e9e9;
}
.nomatching{
    margin-top:2%;
    text-align:center;
}


</style>
<?php include 'footer.php' ?>