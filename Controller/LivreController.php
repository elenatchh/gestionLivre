<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'LivreManager.php';

class LivreController{
    public $livreManager;

    public function __construct(){
        $this->LivreManager = new LivreManager; 
    }

    public function afficherLivre(){
        $livreManager->getLivre();
    }
}
?>