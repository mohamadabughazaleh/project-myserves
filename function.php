<?php 

function checkCat($type){
    global $con;

    $statment = $con->prepare("SELECT title_cat FROM main_categories where type = '$type'");
    $statment->execute(array($type));
    $main_cat = $statment->fetchAll();

    return $main_cat;
}

function redirectHome($theMsg,$url = null, $Seconds =4){
    if($url === null){
        $url = 'login.php';
        $link = 'mainpage';
    }else{
        if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== ''){
            $url = $_SERVER['HTTP_REFERER'];   
            $link = 'Previous Page'; 
        }else {
            $url = 'login.php';
            $link = 'mainpage';
        }
       
    }
    echo $theMsg;
    echo "<div class = 'alert alert-info'>You will Be Redirected to $link After $Seconds.</div>";
    header("refresh:$Seconds;url=$url");
    exit();
}