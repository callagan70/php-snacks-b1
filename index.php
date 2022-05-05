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


<h1> Snecchino 2</h1> 
  <br>
  <h3>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.</h3>
  <br>

  <form method="GET">
        <label for="nome">Inserisci Nome</label>
            <input type="text" name="nome" placeholder="Nome"> <br>
            <?php
                $lunghezzaNom = strlen ($_GET['nome']);
                if( $lunghezzaNom < 3){
                    echo "    Il nome deve essere di almeno 3 caratteri"."<br>";
                    $nomeK = 0;
                }
                else{
                    $nomeK = 1;
                }
            ?>
        <label for="email">Inserisci Email</label>
            <input type="text" name="email" placeholder="EMail"> <br>
            <?php
                $email = $_GET['email'];
                if (strpos($email, '.') !== false && (strpos($email, '@') !== false )) {
                    $emailK = 1;
                  }
                else{
                    $emailK = 0;
                    echo "La parola non è una email"."<br>";
                };
            ?>

        <label for="age">Inserisci Anni</label>
            <input type="text" name="age" placeholder="Anni"> <br>
            <?php
                $age = $_GET['age'];
                if (is_numeric($age) == true) {
                    $ageK = 1;
                    }
                  else{
                    $ageK = 0;
                    echo 'la variabile NON è un numero'."<br>";      
                  };
            ?>

        <h3>Accesso</h3>
        <?php 
                  if($nomeK == 1 && $emailK == 1 && $ageK == 1 ){
                      echo "Consetito";
                  }
                  else{
                      echo "Non consentito";
                  }

        ?>
    <button type="submit">Invia</button>
</form>
























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