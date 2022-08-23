<?php

class Client {
    public $name;
    public $sub_name;
};

$client_1 = new Client();
$client_1->name = "Ana";
$client_1->sub_name = "Maria";

$client_2 = new Client();
$client_2->name = "Pedro";
$client_2->sub_name = "Gustavo";

$client_3 = new Client();
$client_3->name = "João";
$client_3->sub_name = "Amorim";

$client_4 = new Client();
$client_4->name = "Lucas ";
$client_4->sub_name = "Henrique"; 

$client_5 = new Client();
$client_5->name = " Luis ";
$client_5->sub_name = "Silva"; 

$client_6 = new Client();
$client_6->name = "Junior";
$client_6->sub_name = "Perreira"; 

$client_7 = new Client();
$client_7->name = "Fabiana";
$client_7->sub_name = "De Jesus"; 

$client_8 = new Client();
$client_8->name = "José";
$client_8->sub_name = "Silva"; 

$client_9 = new Client();
$client_9->name = "Elisa";
$client_9->sub_name = "Santos"; 

$client_10 = new Client();
$client_10->name = "Juliana";
$client_10->sub_name = "Santos"; 

$clients_list = [
    $client_1,
    $client_2,
    $client_3,
    $client_4,
    $client_5,
    $client_6,
    $client_7,
    $client_8,
    $client_9,
    $client_10,
  
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<table>
          <thead>
              <th>NOME</th>
              <th>SOBRENOME</th>
            </thead>
    <?php for( $i = 0; $i <= count($clients_list) - 1; $i++) { ?>
            <tr>
                <td><?=$clients_list[$i]->name?></td>
                <td><?=$clients_list[$i]->sub_name?></td>
            </tr>    
    <?php } ?>
    </table>    
</body>
</html>