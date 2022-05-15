<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<?php
    session_start();
    if(isset($_SESSION["shoppingCart"])){
      $shoppingCart=$_SESSION["shoppingCart"];
      $total_count=$shoppingCart["summary"]["total_count"];
      $total_price=$shoppingCart["summary"]["total_price"];
      $shopping_books=$shoppingCart["book"];
      $newbook=$shopping_books->book_id;
    }
    else{
        $total_count=0;
        $total_price=0;
    }
    include 'connection.php';
?>

<div class="nav">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <a class="navbar-brand" href="http://ecepilli.com/onlinebookshopping/">
            <img src="images\logo.png" href="http://ecepilli.com/onlinebookshopping/" alt="" width="150" height="100" style="float: left;">
            <h2 style="color: black; margin-top: 10px;">Online Book <br>Shopping </h2>
          </a>   
        </div>
        <div class="col-lg-8 col-sm-12">
          <div class="navbar">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="http://ecepilli.com/onlinebookshopping/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link dropdown-toggle" href="http://ecepilli.com/onlinebookshopping/product_listing.php" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Books
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://ecepilli.com/onlinebookshopping/contact.php">Contact</a>
                    </li>
                  </ul>
                  <form class="d-flex" id="searchform" class="search-form" action="search.php" method="POST">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                     </form>
                  

                 

                    <a class="cart" href="<?php
                      session_start();
                      $user_link="http://ecepilli.com/onlinebookshopping/cart.php";
                      $login_link="http://ecepilli.com/onlinebookshopping/login.php";
                      if($_SESSION['session']==TRUE){
                           echo $user_link;
                      }
                      else{
                         echo $login_link ;
                      }
                      ?>"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 10px;" width="26" height="26"
                      fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                      <path
                        d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z" />
                    </svg><span id="item-count" width="26" height="26" class="position-absolute top-0 badge cart-count"><?php
                    echo $total_count; ?></span></a>

                      <a href="<?php
                      session_start();
                      $user_link="user_update.php";
                      $login_link="login.php";
                      if($_SESSION['session']==FALSE){
                           echo $login_link ;
                      }
                      else{
                         echo $user_link;
                      }
                      ?>"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 10px;" width="26" height="26"
                      fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                  </svg> </a>
                  <div class="user">
    <?php 

    $mail=$_SESSION['mail'];
    $query = $db->query("select * from user where mail = '$mail'");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row){
         echo "<b style='font-size:15pt'>" .$row['name']. "</b>";
        }
      
     ?>
                  </div>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
</div>
<style>
  .navbar {
    height: 80px;
    float: left;
  }
  .nav {
    background-color:#D8BFD8;
    font-size: x-large;
  }
  .navbar a {
    color: black !important;
    margin-right: 10px;
  }

  .navbar a:hover {
    color: #4b0082!important;
  }
  .navbar a:active {
    color: #4b0082 !important;
  }
  .navbar.navbar-toggler-icon{
    color: black !important;
  }
  .user{
     font-size:12px;
  }
  #item-count{
      background-color:red;
      width:3%;
      font-size:10px;
  }
  


</style>
