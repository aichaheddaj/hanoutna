<?php
$base="/hanoutii";
function connect(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=hanouti', 'root', '');
        return $db;
        }catch(PDOException $e){
            echo $e->getMessage();
            //exit(-1);
            die();
        }

}

$db=connect();
function getProducts(){
    global $db;
    $req=$db->prepare("SELECT * FROM produits");
    //var_dump($req);
    $req->execute();
    //$prods=$req->fetchAll();
    $prods=$req->fetchAll(PDO::FETCH_OBJ);
return $prods;
}

function getProductById($id){
    global $db;
    $req=$db->prepare("SELECT * FROM produits WHERE id=:id ");
    $req->execute(["id"=>$id]);
    //$prods=$req->fetchAll();
    $prods=$req->fetch(PDO::FETCH_OBJ);
return $prods;
}

