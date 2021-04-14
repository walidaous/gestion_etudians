<?php
chdir('../');

include_once RACINE . '/classes/Filiere.php';
include_once RACINE . '/connexion/Connexion.php';
include_once RACINE . '/dao/IDao.php';

class FiliereService implements IDao {
    
    private $connexion;
    function __construct() {
        $this->connexion = new Connexion();
    }
    public function create($o) {
        $query = "INSERT INTO Filiere (`id`, `code`, `libelle`) "
                . "VALUES (NULL,  '" . $o->getCode() . "', 
'" . $o->getLibelle() . "');";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }
    public function delete($o) {
        $query = "delete from Filiere where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds1 = array();
        $query = "select * from Filiere";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e1 = $req->fetch(PDO::FETCH_OBJ)) {
            $etds1[] = new Filiere($e1->id, $e1->code, $e1->libelle);
        }
        return $etds1;
    }

    public function findById($id) {
        $query = "select * from Filiere where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new Filiere($e->id, $e->code, $e->libelle);
        }
        return $etd;
    }

    public function update($o) {
        $query = "UPDATE `Filiere` SET `code` = '" . $o->getCode() . "', `libelle` = '" .
                $o->getLibelle() . "' WHERE `etudiant`.`id` = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }
	    public function fillierbyclass() {
        $query = "	SELECT count(*) ,filiere.libelle  FROM `classe` INNER JOIN filiere on classe.id_filiere=filiere.code GROUP by filiere.libelle;";
        $req = $this->connexion->getConnexion()->prepare($query);
         return $req->fetchAll(PDO::FETCH_ASSOC)
    }

    public function getAll() {
        $query = "select * from Filiere";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
