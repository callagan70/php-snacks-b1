<?php


$matches = [
    [
        'team1' => 'Acqua S.Bernardo Cantù',
        'team2' => 'Oriora Pistoia',
        'point_team_1' => 70,
        'point_team_2' => 45
    ],
    [
        'team1' => 'Fortitudo Pompea Bologna',
        'team2' => 'Dolomiti Energia Trentino',
        'point_team_1' => 82,
        'point_team_2' => 83
    ],
    [
        'team1' => 'Pallacanestro Trieste',
        'team2' => 'Virtus Roma',
        'point_team_1' => 72,
        'point_team_2' => 33
    ],
    [
        'team1' => 'Openjobmetis Varese',
        'team2' => 'Germani Basket Brescia',
        'point_team_1' => 101,
        'point_team_2' => 99
    ],

];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snekkino 1</title>
</head>
<body>
  <h1> Snecchino 1</h1> 
  <br>
  <h3>Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.</h3>
  <br>

<?php
for($i = 0; $i < count ($matches); $i++ ){
echo $matches[$i]['team1'] . " - " . $matches[$i]['team2'] . " | " . $matches[$i]['point_team_1'] . "-" . $matches[$i]['point_team_2'] . "<br>"; }
?>

<h1> Snecchino 4</h1> 
  <br>
  <h3>Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta</h3>
  <br>

  <?php
  
    $arrayNum = [];
    $random = 0;

  for ($i = 0; $i <= 14; $i++){
    $random = rand (1, 20);
    echo "numero random: " . $random . "<br>";
    
    $arrayNum[$i] = $random;

    // for ($e=0; $e < count ($arrayNum); $e++ ){
        // // if ($random != $arrayNum[i]){
        // //     $arrayNum += $random;
        // //     }
        // // else{
        // //     $random = rand (1, 20);
        // //     $arrayNum += $random;
        // //     };
        // // }
        // return $arrayNum;
    };
    var_dump($arrayNum)
      
  ?>


</body>
</html>