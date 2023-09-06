<?php
include '../config.php';
include '../Model/Formation.php';

class FormationF
{
    public function listFormation()
    {
        $sql = "SELECT * FROM formation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteFormation($id)
    {
        $sql = "DELETE FROM formation WHERE idFormation = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addFormation($formation)
    {
        $sql = "INSERT INTO formation  
        VALUES (NULL, :fn,:ln)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $formation->getnom(),
                'ln' => $formation->getdescription(),
            
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

     public function updateFormation($idFormation,$nom,$description)
    {
       $pdo=config::getConnexion();
       try 
       { 
        //$query() prépare et exécute une requête SQL en un seul appel de fonction
        $query = $pdo->prepare("UPDATE formation SET nom=:nom ,description=:description WHERE idFormation=:idFormation");
         $query->execute
         ([
           'idFormation' =>$idFormation,
           'nom' =>$nom,
           'description' =>$description
      
       ]);  
       }
       catch(PDOException $e)
       { die('erreur:' . $e->getMessage());}      
    }
    

    function showFormationt($id)
    {
        $sql = "SELECT * from formation where idFormation = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $formation = $query->fetch();
            return $formation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}




