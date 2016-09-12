<?php
require_once 'dbh.php';

class userManager {
    private $db;

    function __construct(){
        $this->db = dbHandler::getInstance();
    }
    function create($username, $password, $email){
        $query = 'INSERT INTO utilisateurs (pseudo, mdp, email) VALUES (\''.$username.'\', \''.md5($password).'\', \''.$email.'\')';
        echo $query;
        // $this->db->dbh->prepare($query);
    }

    function delete($id){
        $query = 'DELETE FROM utilisateurs WHERE id=\''.$id.'\'';
        echo $query;
    }

    function update($userId, $newPass){
        $query = 'UPDATE utilisateurs SET mdp=\''.md5($newPass).'\' WHERE id=\''.$userId.'\'';
        echo $query;
    }

    function getInfo($userId){
        $query = 'SELECT * FROM utilisateurs WHERE id=\''.$userId.'\'';
        $result = $this->db->dbh->query($query);
        var_dump($result);
    }

    function getSession(){
        session_start();
        return $_SESSION;
    }

    function setSession($user){
        session_start();
        $userInfo = $this->getInfo($user);
        $_SESSION['id'] = $userInfo['id'];
        $_SESSION['username'] = $userInfo['pseudo'];
        $_SESSION['email'] = $userInfo['email'];
    }
} 