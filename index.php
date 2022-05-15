<!doctype html>
<html lang="en">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

  <title>Online book shopping</title>

</head>
<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<?php session_start();?>
  <div class="row">
    <div class="container-fluid">
          <div class="banner">
            <a href="http://ecepilli.com/onlinebookshopping/product_listing.php"><img src="images\banner.jpg" class=" w-100"></a>
          </div>
    </div>
  </div>
  <div class="categories">
      
                    <div class="category-item" >
                        <a href="http://ecepilli.com/onlinebookshopping/classics.php" class="WidgetMainBanners" title="Classics">
                            <img class=" lazyloaded" alt="Classics" src="https://ib.dr.com.tr/image/77/82/78/greatheart-k6QF8.jpg">
                            <span> Classics</span>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="http://ecepilli.com/onlinebookshopping/fantasy.php" class="WidgetMainBanners" title="Fantasy">
                            <img class=" lazyloaded" alt="Fantasy" src="https://ib.dr.com.tr/image/94/13/18/prince-of-the-dark-fae-iZ2PU.jpg">
                            <span>Fantasy</span>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="http://ecepilli.com/onlinebookshopping/horror.php" class="WidgetMainBanners" title="Horror">
                            <img class=" lazyloaded" src="https://ib.dr.com.tr/image/68/90/52/teamwork-1mU32.jpg">
                            <span> Horror</span>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="http://ecepilli.com/onlinebookshopping/biography.php" class="WidgetMainBanners" title="Biography">
                            <img class=" lazyloaded" alt="Çocuk Kitapları" src="https://ib.dr.com.tr/image/59/79/77/following-dreams-pRNT0.jpg">
                            <span>Biography</span>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="http://ecepilli.com/onlinebookshopping/sci-fi.php" class="WidgetMainBanners" title="Sci Fi">
                            <img class=" lazyloaded" alt="Kişisel Gelişim" src="https://ib.dr.com.tr/image/38/79/66/faceless-pPTIE.jpg">
                            <span> Sci Fi</span>
                        </a>
                    </div>
                    <div class="category-item" >
                        <a href="http://ecepilli.com/onlinebookshopping/humour.php" class="WidgetMainBanners" title="Humour" >
                            <img class=" lazyloaded" src="https://ib.dr.com.tr/image/26/76/89/women-what-cosmo-didnt-tell-you-zCRTM.jpg">
                            <span>Humour</span>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="http://ecepilli.com/onlinebookshopping/literature.php" class="WidgetMainBanners" title="Literature" >
                            <img class=" lazyloaded" src="https://ib.dr.com.tr/image/36/36/06/once-a-bride-Xixs1.jpg">
                            <span>Literature</span>
                        </a>
                    </div>

         <div class="category-item">
                        <a href="http://ecepilli.com/onlinebookshopping/mystery.php" class="WidgetMainBanners" title="Mystery&Crime">
                            <img class=" lazyloaded" alt="Mystery&Crime" src="https://ib.dr.com.tr/image/04/17/80/artists-of-death-0FzKd.jpg">
                            <span> Mystery&Crime</span>
                        </a>
                    </div>
                    <div class="category-item" >
                        <a href="http://ecepilli.com/onlinebookshopping/poems.php" class="WidgetMainBanners" title="Poems" >
                            <img class=" lazyloaded" src="https://ib.dr.com.tr/image/97/46/37/anatomical-venus-AHjoH.jpg">
                            <span>Poems</span>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="http://ecepilli.com/onlinebookshopping/adventure.php" class="WidgetMainBanners" title="Adventure" >
                            <img class=" lazyloaded" src="https://ib.dr.com.tr/image/80/32/10/simple-serendipity-abenZ.jpg">
                            <span>Adventure</span>
                        </a>
                    </div>
       </div>
        <div class="container-fluid" >
    <div class="row justify-content-center py-5 my-4" style="background-color:#D8BFD8;">
      <div class="col-sm-10 col-md-9 col-lg-4 text-center mb-5 mb-lg-0">
        <i ><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
          <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
        </svg></i>
        <h2 class="text-color-dark font-weight-bold text-4 line-height-1 mt-4 mb-0">CUSTOMER SUPPORT</h2>
        <span class="d-block text-color-dark mb-2">Need Assistance?</span>
        <p class="font-weight-light px-lg-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
      </div>
      <div class="col-sm-10 col-md-9 col-lg-4 text-center mb-5 mb-lg-0">
        <i><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
          <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
        </svg></i>
        <h2 class="text-color-dark font-weight-bold text-4 line-height-1 mt-4 mb-0">SECURED PAYMENT</h2>
        <span class="d-block text-color-dark mb-2">Safe & Fast</span>
        <p class="font-weight-light px-lg-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="col-sm-10 col-md-9 col-lg-4 text-center">
        <i><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
          <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
        </svg></i>
        <h2 class="text-color-dark font-weight-bold text-4 line-height-1 mt-4 mb-0">RETURNS</h2>
        <span class="d-block text-color-dark mb-2">Easy & Free</span>
        <p class="font-weight-light px-lg-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
      </div>
    </div>
  </div>
<h4 style="text-align: center; margin-bottom:5%;">The main books by categories: </h4>
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
  <?php    
$query = $db->query("select * from book where book_category='Classics' limit 1");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>

        <div class="swiper-slide">
            <div class="card" style="width: 10rem; height: 12rem;">
  <img src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo''.$row['book_name'].'' ?></h5>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text"><?php echo''.$row['price'].'' ?>£</p>
        <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
  </div>
</div>
</div>
<?php } ?>
  <?php    
$query = $db->query("select * from book where book_category='Fantasy' limit 1");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
        <div class="swiper-slide"> <div class="card" style="width: 10rem; height: 12rem;">
  <img src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo''.$row['book_name'].'' ?></h5>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text"><?php echo''.$row['price'].'' ?>£</p>
        <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
  </div>
</div></div>
<?php } ?>
         <?php    
$query = $db->query("select * from book where book_category='Horror' limit 1");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
        <div class="swiper-slide"> <div class="card" style="width: 10rem; height: 12rem;">
  <img src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo''.$row['book_name'].'' ?></h5>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text"><?php echo''.$row['price'].'' ?>£</p>
        <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
  </div>
</div></div>
<?php } ?>
         <?php    
$query = $db->query("select * from book where book_category='Biography' limit 1");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
        <div class="swiper-slide"> <div class="card" style="width: 10rem; height: 12rem;">
  <img src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo''.$row['book_name'].'' ?></h5>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text"><?php echo''.$row['price'].'' ?>£</p>
        <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
  </div>
</div></div>
<?php } ?>
               <?php    
$query = $db->query("select * from book where book_category='Literature' limit 1");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
        <div class="swiper-slide"> <div class="card" style="width: 10rem; height: 12rem;">
  <img src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo''.$row['book_name'].'' ?></h5>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text"><?php echo''.$row['price'].'' ?>£</p>
        <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
  </div>
</div></div>
<?php } ?>
         <?php    
$query = $db->query("select * from book where book_category='Humour' limit 1");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
        <div class="swiper-slide"> <div class="card" style="width: 10rem; height: 12rem;">
  <img src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo''.$row['book_name'].'' ?></h5>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text"><?php echo''.$row['price'].'' ?>£</p>
        <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
  </div>
</div></div>
<?php } ?>
         <?php    
$query = $db->query("select * from book where book_category='Mystery&Crime' limit 1");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
        <div class="swiper-slide"> <div class="card" style="width: 10rem; height: 12rem;">
  <img src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo''.$row['book_name'].'' ?></h5>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text"><?php echo''.$row['price'].'' ?>£</p>
        <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
  </div>
</div></div>
<?php } ?>
                 <?php    
$query = $db->query("select * from book where book_category='Poems' limit 1");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
        <div class="swiper-slide"> <div class="card" style="width: 10rem; height: 12rem;">
  <img src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo''.$row['book_name'].'' ?></h5>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text"><?php echo''.$row['price'].'' ?>£</p>
        <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
  </div>
</div></div>
<?php } ?>
                         <?php    
$query = $db->query("select * from book where book_category='Adventure' limit 1");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
    
foreach($result as $row){
?>
        <div class="swiper-slide"> <div class="card" style="width: 10rem; height: 12rem;">
  <img src="<?php echo''.$row['book_img'].'' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo''.$row['book_name'].'' ?></h5>
    <p class="card-text"><?php echo''.$row['author'].'' ?></p>
    <p class="card-text"><?php echo''.$row['price'].'' ?>£</p>
        <?php echo ' <form method="POST" action="book_detail.php?book_id='.$row["book_id"].'"><input class="detail" type="submit" name="detail" value="Detail >"> </form>'
    ?>
  </div>
</div></div>
<?php } ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>

	
 <?php  include 'footer.php' ?>



</body>

</html>
<style>
.categories{
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    margin-top:2%;
    display: flex;
    flex: 0 0 auto;
}
.category-item{
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    box-sizing: border-box;
    width: 40%;
    margin: 0 10px;
    margin-bottom: 30px;
    text-align: center;
    transition: box-shadow .3s;
}
.category-item :hover{
    box-shadow: 0 0 50px rgba(33,33,33,.2);
}
.category-item a{ 
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    text-align: center;
    box-sizing: border-box;
    cursor: pointer;
    outline: none;
    background-color: transparent;
    color: inherit;
    text-decoration: none;
}
.category-item a img{ 
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    font-family: SFProDisplay,arial,sans-serif;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    text-align: center;
    cursor: pointer;
    color: inherit;
    box-sizing: border-box;
    border-style: none;
    vertical-align: middle;
    max-width: 135px;
    max-height:135px;
    transition: box-shadow .1s;
}
.category-item a img :hover{
    box-shadow: 0 0 50px rgba(33,33,33,.2);
}
.category-item a span{ 
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    font-family: SFProDisplay,arial,sans-serif;
    font-size: .875rem;
    line-height: 1.5;
    text-align: center;
    cursor: pointer;
    color: inherit;
    box-sizing: border-box;
    font-weight: 700;
    margin-top: 10px;
    display: block;
}

  .banner img {
    height:500px;
    background-size:cover;
    background-position:center center;
  }
  body{
    background-color:#f2f3f7;
}
    .swiper {
        width: 100%;
        height: 100%;
        
      }

      .swiper-slide {
        text-align: center;
        font-size: 15px;
        background: #fff;
        height: 450px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
      
      }

      .swiper-slide img {
        width: 100%;
        height: 100%;
      }
      .card{
          border-style:none;
      }
      .card-img-top{
          margin-top:5%;
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


</style>