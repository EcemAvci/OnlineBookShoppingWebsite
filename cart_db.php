<?php include 'connection.php' ?>

<?php 
session_start();
function addToCart($book_item){
    if(isset($_SESSION["shoppingCart"])){
         $shoppingcart=$_SESSION["shoppingCart"];
         $book=$shoppingcart["book"];
    }
    else{
        $book=array();
    }
    if(array_key_exists($book_item->book_id,$book)){
        $book[$book_item->book_id]->count++;
    }
    else{
    $book[$book_item->book_id]=$book_item;
    }
  $total_price=0;
  $total_count=0;
  
  foreach($book as $books){
      $books->total_price = $books->count * $books->price;
      $total_price= $total_price + $books->total_price;
      $total_count += $books->count;
      
  }
    
    $summary["total_price"]=$total_price;
    $summary["total_count"]=$total_count;
    
    $_SESSION["shoppingCart"]["book"]=$book;
    $_SESSION["shoppingCart"]["summary"]=$summary;
    
    return $total_count;
    print_r($book) ;
    
    
}
function removeFromCart($book_id){
    
    if(isset($_SESSION["shoppingCart"])){
         $shoppingcart=$_SESSION["shoppingCart"];
         $book=$shoppingcart["book"];
         
         if(array_key_exists($book_id,$book)){
             unset($book[$book_id]);
         }
           $total_price=0;
           $total_count=0;
  
          foreach($book as $books){
              $books->total_price = $books->count * $books->price;
              $total_price= $total_price + $books->total_price;
              $total_count += $books->count;
              
          }
            
            $summary["total_price"]=$total_price;
            $summary["total_count"]=$total_count;
            
            $_SESSION["shoppingCart"]["book"]=$book;
            $_SESSION["shoppingCart"]["summary"]=$summary;
            
            return true;
         
    }
}
function incCount($book_id){
    if(isset($_SESSION["shoppingCart"])){
         $shoppingcart=$_SESSION["shoppingCart"];
         $book=$shoppingcart["book"];
    }
 
    if(array_key_exists($book_id,$book)){
        $book[$book_id]->count++;
    }

  $total_price=0;
  $total_count=0;
  
  foreach($book as $books){
      $books->total_price = $books->count * $books->price;
      $total_price= $total_price + $books->total_price;
      $total_count += $books->count;
      
  }
    
    $summary["total_price"]=$total_price;
    $summary["total_count"]=$total_count;
    
    $_SESSION["shoppingCart"]["book"]=$book;
    $_SESSION["shoppingCart"]["summary"]=$summary;
    
    return true;
}
function decCount($book_id){
    if(isset($_SESSION["shoppingCart"])){
         $shoppingcart=$_SESSION["shoppingCart"];
         $book=$shoppingcart["book"];
    }
 
    if(array_key_exists($book_id,$book)){
        $book[$book_id]->count--;
        
    if($book[$book_id]->count <= 0){
        unset($book[$book_id]);
   }
    }
 

  $total_price=0;
  $total_count=0;
  
  foreach($book as $books){
      $books->total_price = $books->count * $books->price;
      $total_price= $total_price + $books->total_price;
      $total_count += $books->count;
      
  }
    
    $summary["total_price"]=$total_price;
    $summary["total_count"]=$total_count;
    
    $_SESSION["shoppingCart"]["book"]=$book;
    $_SESSION["shoppingCart"]["summary"]=$summary;
    
    return true; 
}
function getEmpty(){
           
           $total_price=0;
           $total_count=0;
           
           return true;
    
}
if(isset($_POST["p"])){
    $process=$_POST["p"];
    
    if($process=="addtocart"){
        $id=$_POST["book_id"];
        
        $book = $db->query("SELECT * FROM book WHERE book_id=$id ",PDO::FETCH_OBJ)->fetch();
        $book->count=1;
        
        echo addToCart($book);
        
    }
    else if($process == "removeFromCart"){
        $id=$_POST["book_id"];
       
        echo removeFromCart($id);
    }
    else if($process == "getEmpty"){

        echo getEmpty();
    }
}
if(isset($_GET["p"])){
    $process=$_GET["p"];
    
    if($process=="incCount"){
        $id=$_GET["book_id"];
        if(incCount($id)){
            header("Location:http://ecepilli.com/onlinebookshopping/cart.php");
        }

    }
    else if($process == "decCount"){
        $id=$_GET["book_id"];
            if(decCount($id)){
            header("Location:http://ecepilli.com/onlinebookshopping/cart.php");
        }

       
    }
}
?>