<?php
/*$tabela = array();
for($i = 0; $i<25; $i++){
   $tabela[$i] = $i+1;
}*/

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];
$numero4 = $_POST["numero4"];
$numero5 = $_POST["numero5"];
//**************************************
$nJogo = array();
/*for($i = 0; $i<25; $i++){
   if(
     ($tabela[$i]==$numero1) ||
     ($tabela[$i]==$numero2) ||
     ($tabela[$i]==$numero3) ||
     ($tabela[$i]==$numero4) ||
     ($tabela[$i]==$numero5)
   ){
     echo "<br>Número retirado = $tabela[$i]";
   }else{
     $nJogo[$i] = $tabela[$i];
   }
}
echo "<hr>Lista de números válidos.";
foreach ($nJogo as $key => $value) {
  echo "<br>[". $key ."] = " . $value;
}

for($i=1; $i<=15; $i++){
  $numeroAleatorio = rand(1,10);
  echo "[$i] = $numeroAleatorio";
}*/
//**************************************
/*
for($i=1; $i<=5; $i++){//jogos
  for($j=1; $j<=15; $j++){//jogos
    $numeroAleatorio = rand(1,25);
    if(
      ($numeroAleatorio==$numero1) ||
      ($numeroAleatorio==$numero2) ||
      ($numeroAleatorio==$numero3) ||
      ($numeroAleatorio==$numero4) ||
      ($numeroAleatorio==$numero5)
    ){
    //  echo "<br>Número retirado = $numeroAleatorio";
    }else{
      /*for($k = 1; count($nJogo); k++){
          if($nJogo[$k] == $numeroAleatorio)

      }
      //$nJogo[$j] = $numeroAleatorio;
    }
  }
}*/
for($i=1; $i<=5; $i++){//jogos
  for($j=1; $j<=15; $j++){//jogos
    $numeroAleatorio = rand(1,25);
    $nJogo[$j] = $numeroAleatorio;
    }
  }
}
for($i=1; $i<=5; $i++){//jogos
  for($j=$i + 1; $j<=15; $j++){//jogos
    if($nJogo[$i] == $nJogo[$j])
  }else{
    $nJogo1 = $nJogo[$i];
  }
  }
}

//retirar os númeos iguais
//retirar os números escolhidos







echo "<hr>";
for($i=1; $i<=5; $i++){//jogos
  echo "Jogo = $i <br>";
  for($j=1; $j<=15; $j++){//jogos
    echo "$nJogo[$j]";
    echo "-";
  }
  echo "<hr>";
}


?>
