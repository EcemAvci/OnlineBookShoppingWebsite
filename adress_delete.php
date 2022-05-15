<?php include 'connection.php' ?>
<?php 
session_start();
$mail=$_SESSION['mail'];
	try
	{	
	$query = $db->query("update adress set deleted_at= CURTIME() where adress_id ='".$_GET['adress_id']."' ");
    echo 'Deleting succesfully.<br/>';
    echo '<br>';
    echo '<form method="POST" action="adresses.php">
			<input type="submit" name="back" value="back">
			</form>';
}
catch(PDOException $e)
{
    echo 'istisna fırlatıldı: ' . $e->getMessage();
}  
                 
?>
