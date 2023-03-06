
<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
class LivreManager extends Model{

    public $livres = [];
    public function ajouterLivre(Livre $livre){
        $this->livres[] = $livre;
    }

    public function getLivres(){
        return $this->livres;
    }
}
?>