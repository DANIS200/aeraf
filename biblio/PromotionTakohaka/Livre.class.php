<?php
class Livre{
    private $id;
    private $profil;
    private $nom;
    private $sexe;
    private $date;
    private $contact;
    private $facebook;

    public function __construct($id,$profil,$nom,$sexe,$date,$contact,$facebook){
        $this->id = $id;
        $this->profil = $profil;
        $this->nom = $nom ;
        $this->sexe = $sexe;
        $this->date = $date;
        $this->contact = $contact;
        $this->facebook = $facebook;
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

    public function getFacebook(){return $this->facebook;}
    public function setFacebook($facebook){$this->facebook = $facebook;}
}