<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "mysql_connection";
$username = "root";
$password = "123";
$database = "meubanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = "Thiago";
$valor_rand3 = "Trevisan";
$valor_rand4 = "12345678910";
$host_name = gethostname();


$query = "INSERT INTO Usuario (id, firstName, lastName, document, hostname) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand3', '$valor_rand4', '$host_name')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>