<?php


require_once __DIR__ . '/models/Movie.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

<h1>index</h1>
<?php
$film = new Movie( "The Last of US",2023,62,"fantasy","USA" );
$film2 = new Movie( "The Last of US",2023,62,"fantasy","USA" );
$film3 = new Movie( "The Last of US",2023,62,"fantasy",["USA", "ITA"] );
?>

<pre>
<?php
echo $film->getName();
?>
</pre>

</body>

</html>