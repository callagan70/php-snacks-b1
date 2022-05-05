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

$allievi = [
    [
        'nome' => 'Stefano',
        'cognome' => 'Achino',
        [
        'latino' => 70,
        'matematica' => 45,
        'italiano' => 34
        ],
    ],

    [
        'nome' => 'Fabio',
        'cognome' => 'Dolomiti ',
        [
        'latino' => 74,
        'matematica' => 55,
        'italiano' => 44
        ],
    ],

    [
        'nome' => 'Marco',
        'cognome' => 'Virtus',
        [
        'latino' => 90,
        'matematica' => 15,
        'italiano' => 14
        ],
    ],

    [
        'nome' => 'Alessandro',
        'cognome' => 'Germani',
        [
        'latino' => 23,
        'matematica' => 35,
        'italiano' => 35
        ],
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

    do{
        $random = rand (1, 20);
    } while (in_array($random, $arrayNum) == true);

    $arrayNum[$i] = $random;

    };
    var_dump($arrayNum)
?>

<h1> Snecchino 7</h1> 
  <br>
  <h3>Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.</h3>
  <br>

  <?php
    for($i=0; $i < count($allievi); $i++){
        echo "Nome: " . $allievi[$i]['nome'] ."<br>";
        echo "Cognome: " . $allievi[$i]['cognome'] ."<br>";
        echo "-- Voto di latino: " . $allievi[$i][0]['latino'] ."<br>";
        echo "-- Voto di matematica: " . $allievi[$i][0]['matematica'] ."<br>";
        echo "-- Voto di italiano: " . $allievi[$i][0]['italiano'] ."<br>";
        $media = floor(($allievi[$i][0]['latino'] + $allievi[$i][0]['matematica'] + $allievi[$i][0]['italiano']) / count ($allievi[$i][0]));
        echo "------ Media: ". $media ."<br>"."<br>";
    };



?>

</body>
</html>