<?php
include '../config.php';
include '../Model/User.php';

class UserU
{
    public function listUser()
    {
        $sql = "SELECT * FROM user";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE idUser = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addUser($user)
    {
        $sql = "INSERT INTO user  
        VALUES (NULL, :fn,:ln,:a,:r)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $user->getnom(),
                'ln' => $user->getprenom(),
                'a' => $user->getadress(),
                'r' => $user->getrole(),

            
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

     public function updateUser($idUser,$nom,$prenom,$adress,$role)
    {
       $pdo=config::getConnexion();
       try 
       { 
        //$query() prépare et exécute une requête SQL en un seul appel de fonction
        $query = $pdo->prepare("UPDATE user SET nom=:nom ,prenom=:prenom,adress=:adress,role=:role WHERE idUser=:idUser");
         $query->execute
         ([
           'idUser' =>$idUser,
           'nom' =>$nom,
           'prenom' =>$prenom,
           'adress' =>$adress,
           'role' =>$role

      
       ]);  
       }
       catch(PDOException $e)
       { die('erreur:' . $e->getMessage());}      
    }
    

    function showUser($id)
    {
        $sql = "SELECT * from user where idUser = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}




