<?php 
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
    header("location: insex.php");
    exit;
}
include __DIR__ . '/layout/header.php';
?>

<?php
    echo "Ciao " . $_SESSION["email"] . " !";
?>
</body>
</html>