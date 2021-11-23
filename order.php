<?php
$titlePage = "order";
ob_start();
include ("include/session.php");
include ("include/connect.php");
include ("include/header.php");
include ("include/topnav.php");
include ("include/function.php");
include('include/loding.php');

if(isset($_SESSION["userid"]))
{
  $pageTitle = 'Orders';
  
$r =$_SESSION['userid'];



  $stmt1 = $con->prepare("SELECT *,orders.id as  order_id,orders.price as price, post.img as IMG,post.title as TITLE,post.body as BODY, users.name as namm  FROM orders
  INNER JOIN post ON post.id  = orders.post_id
  INNER JOIN users ON users.id  = orders.to_id WHERE orders.from_id = '$r' ");
  $stmt1 ->execute();
  $row1 = $stmt1->fetchAll();

 //$action = isset($_GET['action']) ? $_GET['action'] : '0';
  //$order_id = isset($_GET['order_id']) && is_numeric($_GET['order_id']) ? intval($_GET['order_id']) :0;

   if(isset($_GET['action']))

  {
   $ord= $_GET['order_id'];

   $delete = $con->prepare("DELETE FROM orders WHERE id = '$ord' ");
    $delete->execute();
    echo '<div class="alert alert-success">Record Updated</div>';
  }
 
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
    <p class="card-text"><?php echo $tst["BODY"] ?></p>
  </div>
  <ul class="list-group  list-unstyled">
    <li class="list-group-item">الأسم : <?php echo $tst['namm'] ?> </li>
    <li class="list-group-item">السعر :<?php echo $tst['price'] ?> </li>
    <li ><button  type="submit" class="btn btn-primary" name="delete"><a id="href" href="order.php?action=delete&order_id=<?php echo $tst["order_id"] ?>">kjkjkjj</a></button>
</li>
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