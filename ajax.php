
<?php

if(isset($_GET['main_selector']) && !empty($_GET['main_selector']))
    {

        include ('include/connect.php');
        
    $subName = $_GET['main_selector'];
    $stmt = $con->prepare("SELECT *, sub_category.id as sub_id 
                           FROM sub_category 
                           INNER JOIN main_categories 
                           ON main_categories.id = sub_category.parent_id 
                           WHERE main_categories.title_cat = ?");
    $stmt->execute(array($subName));
    $row = $stmt->fetchAll();
    $html = '';
    foreach($row as $rows) {
        $html .= '<option value="' .$rows['sub_id'].'">'.$rows['Name'];

    }
    echo $html;
    // echo json_encode($row , JSON_PREITY_PRINT);
    }else {
        echo '<h1> Error </h1>';
    }

    ?>
