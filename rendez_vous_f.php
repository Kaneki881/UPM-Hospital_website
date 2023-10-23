<?php
 class rendez_vous{

    // déclaration des attributs
    private $prenom; 
    private $nom;
	private $cne;
    private $genre; 
    private $email;
	private $tele;
	private $datee;
	private $heure;
	private $docteur;
	
	
	public function __construct($prenom,$nom,$cne,$genre,$email,$tele,$datee,$heure,$docteur){
        $this->prenom=$prenom;
        $this->nom = $nom;
        $this->cne = $cne;
        $this->genre = $genre;
        $this->email = $email;
		$this->tele = $tele;
		$this->datee = $datee;
		$this->heure = $heure;
		$this->docteur = $docteur;
    }
	
	public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }
	
	public function getCne()
    {
        return $this->cne;
    }

    public function getGenre()
    {
        return $this->genre;
    }
	
	public function getEmail()
    {
        return $this->email;
    }
	public function getTele()
    {
        return $this->tele;
    }
	
	public function getDatee()
    {
        return $this->datee;
    }
	public function getHeure()
    {
        return $this->heure;
    }
	public function getDocteur()
    {
        return $this->docteur;
    }	
}

 class Medecin {
    private $cne;
    private $specialiteId;
    private $nom;
    private $prenom;
    private $adresse;
    private $numTelephone;

    public function __construct($cne, $specialiteId, $nom, $prenom, $adresse, $numTelephone) {
        $this->cne = $cne;
        $this->specialiteId = $specialiteId;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->numTelephone = $numTelephone;
    }

    public function getCne() {
        return $this->cne;
    }

    public function getSpecialiteId() {
        return $this->specialiteId;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getNumTelephone() {
        return $this->numTelephone;
    }

    public function setCne($cne) {
        $this->cne = $cne;
    }

    public function setSpecialiteId($specialiteId) {
        $this->specialiteId = $specialiteId;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setNumTelephone($numTelephone) {
        $this->numTelephone = $numTelephone;
    }
}

 class Patient {
    
    private $nom;
    private $prenom;
    private $numTelephone;

    public function __construct( $nom, $prenom,$numTelephone) {
        $this->nom = $nom;
        $this->prenom = $prenom;     
        $this->numTelephone = $numTelephone;
    }

   

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNumTelephone() {
        return $this->numTelephone;
    }

   
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setNumTelephone($numTelephone) {
        $this->numTelephone = $numTelephone;
    }
}

 class Specialite {
    private $specialiteId;
    private $nom;

    public function __construct($specialiteId, $nom) {
        $this->specialiteId = $specialiteId;
        $this->nom = $nom;
    }

    public function getSpecialiteId() {
        return $this->specialiteId;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setSpecialiteId($specialiteId) {
        $this->specialiteId = $specialiteId;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }
}

?>