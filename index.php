<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = 'luis@gmail.com';
    $senha = '123';
    $emailLogado = $_POST['email'];
    $senhaLogada = $_POST['senha'];
 
    
        if ($emailLogado === $email && $senhaLogada === $senha ) {
            header("Location: manage_users.php");
        }else{
            $erro = "E-mail ou senha incorretos.";
            header("Location: index.php");
            if (isset($erro)) {
                echo "<p>$erro</p>";
                unset($erro);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>


    <form action="index.php" method="post">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" name="senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
