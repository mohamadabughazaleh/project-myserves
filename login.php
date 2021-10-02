<?php 
include ("mainLink.php");
include ("connect.php");
session_start();
$pageTitle = 'Login';
if(isset($_SESSION['Username'])){
    header('Location: mainpage.php');  
}
// Chexk IF User Coming From HTTP Post Request
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass = sha1($password);
    //Check If The User Exist In Database
    $stmt = $con->prepare("SELECT
                            id,name,password 
                        FROM 
                             users
                         WHERE 
                            name = ? 
                        AND
                            password =? 
                        AND 
                            Group_ID = 1
                            LIMIT 2");
    $stmt->execute(array($username,$hashedPass));
    $row = $stmt->fetch();
    $count = $stmt->rowCount();
    //echo $count;
    //-------------------------User Login--------------------------------------------//
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $ShaPass = sha1($pass);
    //Check If The User Exist In Database
    $stmt = $con->prepare("SELECT
                            id,name,password 
                        FROM 
                             users
                         WHERE 
                            name = ? 
                        AND
                            password =?");
    $stmt->execute(array($user,$ShaPass));
    $row = $stmt->fetch();
    $count = $stmt->rowCount();

    // IF Count > 0 This Mean The Database Contain Record About This Username
        if ($count > 0){
            $_SESSION['Username'] = $username; // Register Session Name 
            $_SESSION['ID'] = $row['id']; // Register Session ID 
            $_SESSION['user'] = $user;
            $_SESSION['uid'] = $row['id'];
            header('Location: mainpage.php'); // Redirect To Dashboard Page
            exit();
        }

    }   
 ?>
    <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <h4 class="text-center">Admin Login</h4>
        <input class="form-control input-lg" type="text" name="user" placeholder="Username" autocomplete="off" required>
        <input class="form-control input-lg" type="password" name="pass" placeholder="password" autocomplete="new-password" required>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="login">
    </form>
    
    