<?php

    include('db.php');
    
    $sql="SELECT * FROM student";

    $search_txt='';
    

    /* Implement Pagination */
        $per_page=5;

        $start=0;

        if(isset($_GET['start'])){
            $start=$_GET['start'];
            $start=($start-1)*$per_page;
        }

        $stmt1=$con->prepare($sql);
        $stmt1->execute();
        $studentArr1=$stmt1->fetchAll(PDO::FETCH_ASSOC);

        $total_record=count($studentArr1);

        $num=floor($total_record/$per_page);
        $remainder=floor($total_record%$per_page);
        if($remainder>0){
            $num++;
        }
    /************************/


    if(isset($_POST['search_txt']) && $_POST['search_txt']!=''){
        $search_txt=$_POST['search_txt'];
        $sql.=" WHERE name LIKE '%$search_txt%' OR city LIKE '%$search_txt%' OR marks LIKE '%$search_txt%'";
    }

    $sql.=" ORDER BY id DESC LIMIT $start,$per_page";
    $stmt=$con->prepare($sql);
    $stmt->execute();
    $studentArr=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<form method="post">
    <input type="textbox" name='search_txt' placeholder="Search" value="<?php echo $search_txt?>">
    <input type="submit" name='search' value="Search">
    <span style="background-color:green;padding:3px;margin-left: 355px;"><a href="add_user.php" style="text-decoration:none;color:#fff;">Add User</a></span>
</form>

<table border="1" cellspacing="4" cellpadding="4" width="100%">
    <tr>
        <th style="text-align:center">Sl. No</th>
        <th style="text-align:center">Name</th>
        <th style="text-align:center">Marks</th>
        <th style="text-align:center">City</th>
        <th style="text-align:center"></th>
    </tr>
    <?php 
        $i=0;
        foreach($studentArr as $list){
            $i++;
    ?>
        <tr>
            <td style="text-align:center"><?php echo $i?></td>
            <td style="text-align:center"><?php echo $list['name']?></td>
            <td style="text-align:center"><?php echo $list['marks']?></td>
            <td style="text-align:center"><?php echo $list['city']?></td>
            <td style="text-align:center"><a href="delete.php?id=<?php echo $list['id']?>" style="text-decoration:none; color:#fff;background-color:red;padding:3px;cursor:pointer">Delete</a> &nbsp;&nbsp; <a href="add_user.php?id=<?php echo $list['id']?>" style="text-decoration:none; color:#fff;background-color:blue;padding:3px;cursor:pointer">Edit</a></td>
        </tr>
    <?php } ?>
</table>

<!-- Set Up Pagination -->
<?php

    for($i=1; $i<=$num; $i++){
        echo '<a href="index.php?start='.$i.'" style="text-decoration:none;;cursor:pointer">Page '.$i.'</a> &nbsp;';
    }

?>


