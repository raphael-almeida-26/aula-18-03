<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>
<body>
    <?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
       $username = $_POST['username'];
       $password =$_POST['password'];
    }
    if($username === "admin" && $password ==="admin123"){
    echo "<h2>loguin bem sucedido!</h2>";
  } else {
    echo "<h2>DEU RUIM MENÓ<h2>";
  }




    ?>
</body>
</html>
