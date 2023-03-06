<?php
ob_start();
?>

<h1> Bienvenu sur le site </h1>

<?php
$content = ob_get_clean();
$titre = 'Accueil';
require_once 'base.php';
?>