<?php
require_once "Model.class.php";
require_once "Livre.class.php";

class LivreManager extends Model{
    private $livres;

    public function ajoutLivre($livre){
        $this->livres[] = $livre;
    }

    public function getLivres(){
        return $this->livres;
    }

    public function chargementLivres(){
        $req = $this->getBdd()->prepare("SELECT * FROM livres");
        $req->execute();
        $mesLivres = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesLivres as $livre){
            $l = new Livre($livre['id'],$livre['profil'],$livre['nom'],$livre['sexe'],$livre['date'],$livre['contact'],$livre['promotion']);
            $this->ajoutLivre($l);
        }
    }





    
    public function getLivreById($id){
        for($i=0; $i < count($this->livres);$i++){
            if($this->livres[$i]->getId() === $id){
                return $this->livres[$i];
            }
        }
    }

    public function ajoutLivreBd($titre,$nbPages,$image){
        $req = "
        INSERT INTO livres (profil, nom, sexe, date, contact, promotion)
        values (:profil, :nom, :sexe, :date, :contact, :promotion)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":profil",$profil,PDO::PARAM_STR);
        $stmt->bindValue(":nom",$nom,PDO::PARAM_STR);
        $stmt->bindValue(":sexe",$sexe,PDO::PARAM_STR);
        $stmt->bindValue(":date",$date,PDO::PARAM_DATE);
        $stmt->bindValue(":contact",$contact,PDO::PARAM_INT);
        $stmt->bindValue(":promotion",$promotion,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $livre = new Livre($this->getBdd()->lastInsertId(),$profil,$nom,$sexe,$date,$contact,$promotion);
            $this->ajoutLivre($livre);
        }        
    }
}