<?php 
ob_start();
session_start();
include ("topnav.php");
include ("connect.php");
include ("function.php");
include ("mainLink.php");

if (isset($_SESSION['Username'])) {
    $getUser = $con->prepare('SELECT * FROM users WHERE name = ?');
    $getUser->execute(array($_SESSION['Username']));
    $info = $getUser->fetch();

?>
<!--startinframtionpr-->
<div class="inframtion-pr text-center d-none d-xl-block">
    <div class="img-pr">
        <img class="imge-pr " src="../project-myserves/layot/img/<?php echo $info['img'] ?>" alt="">
    </div>
</div>
<div class="inframtion-p2 text-center  d-xl-none">
    <div class="img-p2">
        <img class="imge-p2 rounded " src="../project-myserves/layot/img/1564a5b8c6b0f3cd049a4c632d4fb4d9.gif" alt="">
    </div>
</div>
<div class="name text-center ">
    <h1><?php echo $info['first_name'] ."  ". $info['last_name']; ?></h1>
    <ul class=" ul-styly  d-none  d-lg-block  d-xl-none  d-none d-xl-block">
        <li><i class="far fa-star i-color"></i></li>
        <li><i class="fas fa-star i-color"></i></li>
        <li><i class="fas fa-star i-color"></i></li>
        <li><i class="fas fa-star i-color"></i></li>
        <li><i class="fas fa-star i-color"></i></li>
    </ul>
    <h3 class="infroamtion-you">معلوماتك</h3>
    <hr class="hr-pr">
</div>
<div class="section-profile text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-6 ">
                <div class="icon-profile">
                    <i class="fas fa-map-marker-alt icon-pr"></i>
                    <p class="namecountry"><?php echo $info['Location'] ?></p>
                </div>  
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="icon-profile">
                <i class="far fa-user icon-pr"></i>
                <p class="namecountry"><?php echo $info['name'] ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="icon-profile">
                    <i class="fas fas fa-mobile icon-pr"></i>
                    <p class="namecountry"><?php echo $info['Num_Phone'] ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="icon-profile">
                <i class="fas fa-mail-bulk icon-pr"></i>
                <p class="namecountry"><?php echo $info['Email'] ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="icon-profile-paet2">
                <i class="fas fa-briefcase icon-pa"></i>
                <p class="num-bu">نوع العمل</p>
                <p class="namecountry">اعمال حره</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="icon-profile-paet2">
                <i class="fas fa-users icon-pa"></i>
                <p class="num-bu">عدد العملاء</p>
                <p class="namecountry">200+</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="icon-profile-paet2">
                <i class="fas fa-reply icon-pa"></i>
                <p class="num-bu">خلال <?php echo $info['Response_speed'] ?></p>
                <p class="namecountry">سرعة الرد</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="icon-profile-paet2">
                <i class="fas fa-clipboard icon-pa"></i>
                <p class="num-bu">لا يوجد</p>
                <p class="namecountry">تغذيه راجعه</p>
                </div>
            </div>
        </div>
    </div>  
</div>
<?php 
        } else {
            header('Location: login.php');
            exit();
        }
?>
<!--endinframtionpr-->
    
