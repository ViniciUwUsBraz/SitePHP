<?php
session_start();

// Destruir a sessão e redirecionar para a página de login
session_destroy();
header("Location: index.php");
exit();
?>
