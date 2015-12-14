<html>
 <head>
  <title>testy z VPS'em</title>
 </head>
 <body>
 <form action="index.php" method="POST">
 <input type="text" name="imie">
 <input type="submit" name="go" value="wyslij">
 </form>

 </body>
 </html>

<?php
$imie = $_POST['imie'];
if($imie == 'null'){
}elseif($imie == "dominik"){
echo "witaj moj panie xD";
}

//var_dump($imie);
?>
