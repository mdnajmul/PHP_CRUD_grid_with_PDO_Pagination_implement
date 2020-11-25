<?php

    try{
        $con=new PDO('mysql:host=localhost;dbname=crud_grid','root','');
    }catch(PDOException $e){
        echo $e->getMessage();
    }

?>