<?php
require __DIR__ .'/functions.php';
/*
assert(true == checkLoginPassword('pupkin', '123'));
assert(false == checkLoginPassword('pupkin111', '123'));
assert(false == checkLoginPassword('pupkin', '123456'));

*/



if(!isUser()) {
       header('Location: form.php');
        exit; 
 }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
</body>
</html>
<h1>Привет,<?php echo getUser(); ?></h1>
<a href="logout.php">Выход</a>
