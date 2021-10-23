<?php 
// include ("mainLink.php");
// include ("connect.php");
// session_start();
// $pageTitle = 'Login';
// if(isset($_SESSION['Username'])){
//     header('Location: mainpage.php');  
// }
// // Chexk IF User Coming From HTTP Post Request
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $username = $_POST['user'];
//     $password = $_POST['pass'];
//     $hashedPass = sha1($password);
//     //Check If The User Exist In Database
//     $stmt = $con->prepare("SELECT
//                             id,name,password 
//                         FROM 
//                              users
//                          WHERE 
//                             name = ? 
//                         AND
//                             password =? 
//                         AND 
//                             Group_ID = 1
//                             LIMIT 2");
//     $stmt->execute(array($username,$hashedPass));
//     $row = $stmt->fetch();
//     $count = $stmt->rowCount();
//     //echo $count;
//     //-------------------------User Login--------------------------------------------//
//     $user = $_POST['user'];
//     $pass = $_POST['pass'];
//     $ShaPass = sha1($pass);
//     //Check If The User Exist In Database
//     $stmt = $con->prepare("SELECT
//                             id,name,password 
//                         FROM 
//                              users
//                          WHERE 
//                             name = ? 
//                         AND
//                             password =?");
//     $stmt->execute(array($user,$ShaPass));
//     $count = $stmt->rowCount();
//     $row = $stmt->fetch();

//     // IF Count > 0 This Mean The Database Contain Record About This Username
//         if ($count > 0){
//             $_SESSION['Username'] = $username; // Register Session Name 
//             $_SESSION['ID'] = $row['id']; // Register Session ID 
//             $_SESSION['user'] = $user;
//             $_SESSION['uid'] = $row['id'];
//             header('Location: mainpage.php'); // Redirect To Dashboard Page
//             exit();
//         }

//     }   
?>

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
    
    