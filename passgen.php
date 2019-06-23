<?php 

function random_string($length){
    $charset = array_merge(range('a','z'),range('A','Z'),range(0,9));
    shuffle($charset);

    $password = array_slice($charset,0,$length);
    
    return implode('',$password);
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>  Random password :<?php echo random_string(30);?></h3>
</body>
</html>