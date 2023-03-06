<?php
class LivreManager{
    public function ajouterLivre(Livre $livre){
        $livres[]= $livre;
    }

    public function getLivres(){
        return $livres; 
    }
}
?>