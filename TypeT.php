<?php
include '../config.php';
include '../Model/Type.php';

class TypeT
{
    public function listType()
    {
        $sql = "SELECT * FROM type";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletetype($id)
    {
        $sql = "DELETE FROM type WHERE idType = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addType($type)
    {
        $sql = "INSERT INTO type  
        VALUES (NULL, :fn)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $type->getname(),
            
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

     public function updateType($idType,$name)
    {
       $pdo=config::getConnexion();
       try 
       { 
        //$query() prépare et exécute une requête SQL en un seul appel de fonction
        $query = $pdo->prepare("UPDATE type SET name=:name WHERE idType=:idType");
         $query->execute
         ([
           'idType' =>$idType,
           'name' =>$name
          
      
       ]);  
       }
       catch(PDOException $e)
       { die('erreur:' . $e->getMessage());}      
    }
    

    function showType($id)
    {
        $sql = "SELECT * from type where idType = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $type = $query->fetch();
            return $type;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}




