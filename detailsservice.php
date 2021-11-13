<?php 
include ("topnav.php");
include ("connect.php");
include ("function.php");
include('loding.php');


if (isset($_SESSION['userid'])) {

  $ID = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) :0;

  $getUser = $con->prepare("SELECT *, users.first_name , users.last_name , users.Response_speed FROM post INNER JOIN users ON users.id  = post.user_id WHERE post.id = '$ID' ");
  $getUser->execute();
  $row = $getUser->fetch();
?>
<!--start-detalis-->
<div class="main-backgrond">
  <div class="radous">
    <div class="bacground-details text-center">
      <div class="row">
        <div class="col-xl-4  col-lg col-md-12">
          <div class="imge-details d-xl-none">
            <img  src="../project-myserves/layot/img/<?php echo $row['img'] ?>" alt="">
          </div>
        </div>
        <div class="col-xl-4  col-lg col-md-12">
          <div class="text-detais">
            <h3><?php echo $row['first_name'] ."  ". $row['last_name']; ?></h3>
            <i class="fas fa-briefcase"></i><span><?php echo $row['title'] ?> </span>
          </div>
        </div>
        <div class="col-xl-4  col-lg col-md col-xs">
          <div class="mar-btn-detals">
            <a href="home.php?id=<?php echo $_SESSION['userid'];?>"><button type="button" class="btn  btn-details">تواصل مع البائع</button></a><span><a href="#"><button type="button" class="btn btn-secondary btn-details-tow"><i class="fas fa-shopping-cart icon-cart"></i><span>طلب الخدمة</span></button></a></span>
          </div>
          <div class="padding d-none d-xl-block">
          </div>
        </div>
      </div>
    </div>
    <div class="back-ground-par">
      <div class="imge-details-tow d-none d-xl-block">
        <img  src="../project-myserves/layot/img/pexels-pixabay-147413.jpg" alt="">
      </div>
      <div class="row">
        <div class="container">
          <div class="col-lg-12">
            <div class="mr-details text-center">
              <h1 class="h1-detals">تفاصيل الخدمه:</h1>
              <p class="prg-dtails">
                  <?php echo $row['body'] ?>
              </p>
            </div>
          </div>
          <hr class="hr-details">
          <div class="col-lg-12">
            <div class="back-ground-comment-part-tow">
              <form method="POST">
                <div class="form-group">

                  <label class="lable-details" for="exampleFormControlTextarea1"><span><i style="color:#e59560" class="fas fa-comment-alt "></i>&nbsp;</span>آراء المشترين</label>
                  <textarea class="form-control comment-texrarea" id="exampleFormControlTextarea1" rows="2"></textarea><span><button type="submit" class="btn btn-textarea btn-comment"> <span style="margin-left:5px"><i class="fas fa-comments"></i></span>تعليق</button>
                </div>
              </form>
            </div>
          </div>
              <div class="col-lg-12 comment_line" >

              </div>
          </div>      
      </div>
    </div>
  </div>

</div>
<?php 
        } else {

            header('Location: main-login.php');
            exit();
        }
?>
<!--end-details-->
<script src="layot/js/jquery-3.5.1.min.js"></script>
        <script src="layot/js/popper.min.js"></script>
        <script src="layot/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202110050101/show_ads_impl_fy2019.js" id="google_shimpl"></script><script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="layot/js/ajax.js"></script>
        <script src="layot/js/main.js"></script>
        <script src="layot/js/wow.min.js"></script>
        <script>
          AOS.init();
        </script>
        <script>new WOW().init();</script>
</body>
</html>