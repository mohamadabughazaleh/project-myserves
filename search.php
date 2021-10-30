<?php

if(isset($_GET["query"]))
{
    include('connect.php');
    $output='';
    $search = $_GET["query"];
    $stmt = $con->prepare("SELECT title FROM post WHERE title LIKE '%".$search."%'");
    $stmt->execute();
    $row = $stmt->fetchAll();
    $count =$stmt->rowCount();
    $output= '<ul class="list-unstyled">';

    if($count > 0)
    {
        foreach($row as $rows)
        {
            $output .= '<li><a href="section.php">' . $rows["title"] . '</a></li>';
        }
    } else{

        $output .= '<li>خدمة غير موجودة</li>';
    }
    echo $output;
    $output.='</ul>';
}

?>