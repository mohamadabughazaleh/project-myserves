<?php

if(isset($_GET['main_selector']) && !empty($_GET['main_selector']))
    {
        include ('connect.php');
        
    $subName = $_GET['main_selector'];
    $stmt = $con->prepare("SELECT * FROM sub_category WHERE parent_id = '$subName'");
    $stmt->execute(array($subName));
    $row = $stmt->fetchAll();
    var_dump($row);die();
    foreach($row as $rows) {
        echo '<option value="' .$rows['parent_id'].'">'.$rows['Name'];
    }
    // echo json_encode($row , JSON_PREITY_PRINT);
    }else {
        echo '<h1> Error </h1>';
    }

    ?>