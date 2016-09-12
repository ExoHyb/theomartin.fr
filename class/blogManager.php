<?php
require_once 'dbh.php';

class blogManager {
    private $db;

    function __construct(){
        $db = dbHandler::getInstance();
        $this->db = $db->dbh;
    }

    function getPosts(){
        $query = "SELECT * FROM articles";
        $sth = $this->db->prepare($query);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);

        var_dump($result);
    }

    function addPost($title, $content, $date, $categorie, $image="null"){
        $query = "INSERT INTO articles (titre, contenu, date_publication, categorie, image)
                    VALUES ('".$title."', '".$content."', '".$date."', '".$categorie."', '".$image."')";

        echo $query;
    }

    function getCategory($name=null){
        $tab = [];
        $query = "SELECT * FROM categories";
        if($name){
            $query .= " WHERE libelle= '".$name."'";
        }
        $sth = $this->db->prepare($query);
        $sth->execute();
        while($result = $sth->fetch(PDO::FETCH_OBJ)){
            $tab[] = $result;
        }

        return $tab;
    }

    function delCategory($id){
        $query = "DELETE FROM categories WHERE id=".$id;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    function addCategory($name){
        $query = "INSERT INTO categories (libelle) VALUES ('".$name."')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

}