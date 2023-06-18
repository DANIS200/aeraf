<?php
class Livre{
    private $id;
    private $profil;
    private $nom;
    private $sexe;
    private $date;
    private $contact;
    private $promotion;

    public function __construct($id,$profil,$nom,$sexe,$date,$contact,$promotion){
        $this->id = $id;
        $this->profil = $profil;
        $this->nom = $nom ;
        $this->sexe = $sexe;
        $this->date = $date;
        $this->contact = $contact;
        $this->promotion = $promotion;
    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}

    public function getProfil(){return $this->profil;}
    public function setProfil($profil){$this->profil = $profil;}

    public function getNom_et_Prenoms(){return $this->nom;}
    public function setNom_et_Prenoms($nom){$this->nom = $nom;}

    public function getSexe(){return $this->sexe;}
    public function setSexe($sexe){$this->sexe = $sexe;}

    public function getDate_Adhesion(){return $this->date;}
    public function setDate_Adhesion($date){$this->date = $date;}

    public function getContact(){return $this->contact;}
    public function setContact($contact){$this->contact = $contact;}

    public function getPromotion(){return $this->promotion;}
    public function setPromotion($Promotion){$this->promotion = $promotion;}
}