<?php
include ("include/session.php");
include ("include/connect.php");
include ("include/header.php");
include ("include/topnav.php");
include('include/loding.php');

if(isset($_SESSION["userid"]))
{
$r =$_SESSION['userid'];
$stmt = $con->prepare("SELECT * FROM orders WHERE from_id = '$r' ");
$stmt ->execute();
$row = $stmt->fetchAll();

    $stmt1 = $con->prepare("SELECT *,orders.price as price, post.img as IMG,post.title as TITLE,post.body as BODY, users.name as namm  FROM orders
     INNER JOIN post ON post.id  = orders.post_id
     INNER JOIN users ON users.id  = orders.from_id WHERE orders.to_id = '$r' ");
    $stmt1 ->execute();
    $row1 = $stmt1->fetchAll();

        ?>
<div class="p"style=" margin-top:50px;">
<div class="container">
<div class="row">
<?php foreach($row1 as $tst){ ?>
    <div class="col-lg-4"  >
<div class="card" style="width:18rem;   ">
  <img src="../project-myserves/layot/img/<?php echo $tst['IMG'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $tst["TITLE"] ?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">الأسم : <?php echo $tst['namm']; ?> </li>
    <li class="list-group-item">السعر: <?php echo $tst['price']; ?></li>
  </ul>
</div>
</div>
<?php } ?>
</div>
</div>
</div>

        <?php

    }else
    {
        header("Location: main-login.php");
    }
?>
<?php include ("include/footer.php");?>









