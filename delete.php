<?php

    include('db.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        
        $sql="DELETE FROM student WHERE id='$id'";
        $stmt=$con->prepare($sql);
        $stmt->execute();
        
        header('location:index.php');
        die();
    }

?>