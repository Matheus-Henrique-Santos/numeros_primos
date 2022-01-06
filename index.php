<!DOCTYPE html>
<html>

 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
    Número inicial: <input type="number" name="numeroInicial" /><br />
    Número final: <input type="number" name="numeroFinal" /><br />
  <input type="submit" name="submit" value="testar" />
 </form> 
 <?php
  $inicial = $_GET['numeroInicial'];
  $final = $_GET['numeroFinal'];
  $divisores = 0;

  for($count=$inicial; $count<$final; $count++)

   if($count % 2 == 0){
    echo "Multiplo de $count<br />";
    $divisores++;
   }
  
  if($divisores)  echo "Não é primo, tem $divisores divisores além de 1 e ele mesmo";
  else    echo "É primo!";
  
 ?>
 </body>

</html>