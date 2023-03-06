
<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
  require_once './Model/Model.php';
class LivreManager extends Model{

    public $livres = [];
    public function ajouterLivre(Livre $livre){
        $this->livres[] = $livre;
    }

    public function getLivres(){
        return $this->livres;
    }
    public function chargementLivres(){
        $req = self::getBdd()->prepare("SELECT * FROM book");
        $req->execute(); 
        $books= $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($books as $livre) {
            $this->ajouterLivre(new Livre($livre['id_book'], $livre['titre'], $livre['auteur'], $livre['nbpage'], $livre['image']));
        }
    }
}
?>