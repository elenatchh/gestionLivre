<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
ob_start();
?>

<h1> Bienvenu sur le site </h1>

<?php
$content = ob_get_clean();
$titre = 'Accueil';
require_once 'base.php';
?>