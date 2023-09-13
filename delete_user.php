<?php
session_start();


if (isset($_GET['email'])) {
    $emailDeletado = $_GET['email'];

    $users = &$_SESSION['users'];
    foreach ($users as $key => $user) {
        if ($user['email'] === $emailDeletado) {
            unset($users[$key]);
            break;
        }
    }

    header("Location: manage_users.php");
    exit();
} else {
    header("Location: manage_users.php");
    exit();
}
?>
