<?php
/*
25 números [1..25] =>  1 2 3 4 5 6 7 8 9
1 2 3 5 6 8 9

excluir 5 números
Gerar jogos aleatórios
*/
$tabela = array();
for($i = 0; $i<25; $i++){
   $tabela[$i] = $i+1;
}

foreach ($tabela as $key => $value) {
  echo "<br>[". $key ."] = " . $value;
}

?>
<form action="jogar.php" method="post">
<br><label>Número 1: </label> <input type="text" name="numero1">
<br><label>Número 2: </label> <input type="text" name="numero2">
<br><label>Número 3: </label> <input type="text" name="numero3">
<br><label>Número 4: </label> <input type="text" name="numero4">
<br><label>Número 5: </label> <input type="text" name="numero5">

<input type="submit" value="JOGAR">
</form>
