<?php

    include('db.php');

    

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $marks=$_POST['marks'];
        $city=$_POST['city'];
        $id=$_POST['id'];
        
        if($id>0){
           $sql="UPDATE student SET name='$name',marks='$marks',city='$city' WHERE id='$id'";  
        }else{
           $sql="INSERT INTO student(name,marks,city) VALUES('$name','$marks','$city')"; 
        }
        
        $stmt=$con->prepare($sql);
        $stmt->execute();
        
        header('location:index.php');
        die();
    }

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT name,marks,city FROM student WHERE id='$id'";
        $stmt=$con->prepare($sql);
        $stmt->execute();
        $studentArr=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $name=$studentArr['0']['name'];
        $marks=$studentArr['0']['marks'];
        $city=$studentArr['0']['city'];
    }else{
        $name='';
        $marks='';
        $city='';
        $id='';
    }
    
?>


<form method="post">
    <table >
        <tr>
            <td>Name: </td>
            <td><input type="textbox" name="name" placeholder="Enter Name" value="<?php echo $name?>" style="width:300px"></td>
        </tr>
        <tr>
            <td>Marks: </td>
            <td><input type="textbox" name="marks" placeholder="Enter Marks" value="<?php echo $marks?>" style="width:300px"></td>
        </tr>
        <tr>
            <td>City: </td>
            <td><input type="textbox" name="city" placeholder="Enter City" value="<?php echo $city?>" style="width:300px"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Enter" style="cursor:pointer;width:100px"></td>
        </tr>
    </table>
    <input type="hidden" name="id" value="<?php echo $id?>">
</form>