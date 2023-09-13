<?php
session_start();

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Endereço de e-mail inválido.";
        header("Location: register.php");
        exit();
    }

    // Validar senha
    if (strlen($password) < 8) {
        $_SESSION['error'] = "A senha deve ter pelo menos 8 caracteres.";
        header("Location: register.php");
        exit();
    }

    // Criar um novo usuário (armazenar em uma matriz de usuários)
    $user = [
        'name' => $name,
        'email' => $email,
        'password' =>$password
    ];

    $_SESSION['users'][] = $user;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    
    <?php
    if (isset($_SESSION['error'])) {
        echo "<p>{$_SESSION['error']}</p>";
        unset($_SESSION['error']);
    }
    ?>

    <form action="register.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    <p>Ja possui cadastro</p>
    <a href="manage_users.php">Manager</a>
</body>
</html>
