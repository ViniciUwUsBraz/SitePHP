<?php
session_start();

$users = $_SESSION['users'] ?? [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Usuários</title>
</head>
<body>
    <h1>Gerenciamento de Usuários</h1>
    
    <?php
    if (count($users) > 0) {
        echo "<ul>";
        foreach ($users as $user) {
            echo "<li>{$user['name']} - {$user['email']} <a href='delete_user.php?email={$user['email']}'>Excluir</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum usuário cadastrado.</p>";
    }
    ?>
    
    <a href="logout.php">Sair</a><br>
    <a href="register.php">Voltar</a>
</body>
</html>
