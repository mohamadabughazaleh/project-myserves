<?php

$connect = mysqli_connect("localhost" , "root" , "" , "khidma");
if(isset($_POST["query"]))
{
    $output='';
    $query = "SELECT * FROM  post WHERE Keyword LIKE '%".$_POST['query']."%'";
    $result = mysqli_query($connect,$query);
    $output= '<ul class="list-unstyled">';
    if(mysqli_num_rows($result)>0)
    {
        while ($row=mysqli_fetch_array($result)) 
        {
            $output .= '<li>' .$row["title"] .'</li>';
        }
    }
    else
    {
        $output .= '<li>خدمة غير موجودة</li>';
    }
    $output.='</ul>';
    echo $output;
}
?>