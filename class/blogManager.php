<?php
require_once 'dbh.php';

class blogManager {
    private $db;

    function __construct(){
        $db = dbHandler::getInstance();
        $this->db = $db->dbh;
    }

    function getPost($id){
        $query = "SELECT * FROM articles WHERE id=".$id;
        $sth = $this->db->prepare($query);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    function getPosts($category=null, $limit=null, $order="DESC"){
        $query = "SELECT * FROM articles";
        if($category){
            $query .= " WHERE categorie=".$category;
        }
        $query .= " ORDER BY date_publication ".$order;
        if($limit){
            $query .= " LIMIT ".$limit;
        }

        $sth = $this->db->prepare($query);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    function addPost($title, $content, $date, $category, $image){
        $query = "INSERT INTO articles (titre, contenu, date_publication, categorie, image)
                    VALUES ('".$title."', '".$content."', '".$date."', '".$category."', '".$image."')";

        $sth = $this->db->prepare($query);
        $sth->execute();
    }

    function modPost($id, $title, $content, $category, $image){
        $query = "UPDATE articles
          SET titre='".$title."', contenu='".$content."', categorie='".$category."', image='".$image."'
          WHERE id=".$id;

        $sth = $this->db->prepare($query);
        $sth->execute();
    }

    function delPost($id){
        $query = "DELETE FROM articles WHERE id=".$id;
        $sth = $this->db->prepare($query);
        $sth->execute();
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

    function getCategoryName($id){
        $query = "SELECT libelle FROM categories WHERE id=".$id;
        $sth = $this->db->prepare($query);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_OBJ);

        return (isset($result->libelle)) ? $result->libelle : 'None';
    }

    function delCategory($id){
        $query = "DELETE FROM categories WHERE id=".$id;
        $sth = $this->db->prepare($query);
        $sth->execute();
    }

    function addCategory($name){
        $name = addslashes($name);
        $query = "INSERT INTO categories(libelle) VALUES ('$name')";
        $sth = $this->db->prepare($query);
        $sth->execute(array($name));
    }

    function getExcerpt($id, $link = true){
        $query = "SELECT contenu FROM articles WHERE id=".$id;
        $sth = $this->db->prepare($query);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_OBJ);
        $excerpt = substr($result->contenu, 0, 145).'...';
        if($link){
            $excerpt .= '<a href="template_article.php?id='.$id.'">Lire la suite</a>';
        }
        return $excerpt;
    }

}