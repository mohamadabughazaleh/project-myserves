<?php
ob_start();
session_start();
include('connect.php');
include ("mainLink.php");
include ('function.php');

?>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
            if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password =sha1($_POST['pass']);
            $stmt = $con->prepare("SELECT
                                    id,name,password,type
                                    FROM 
                                    users
                                    WHERE 
                                    name = ? 
                                    AND
                                    password =? 
                                    LIMIT 1");
            $stmt->execute(array($username,$password));
            $count = $stmt->rowCount();
            $row = $stmt->fetch();
     
            if($count > 0) 
            {
                if($_SESSION['user'] == 0) {
                $_SESSION['user'] = $row['name']; // Register Session Name 
                $_SESSION['ID'] = $row['id']; // Register Session ID 
                $_SESSION['type'] = $row['type'];
                // $_SESSION['user'] = $user;
                header('location: mainpage.php');
                exit();
                }
            }
        } else {
            $formErrors = array();

            $user  = $_POST['name'];
            $pass1 = $_POST['password'];
            $pass2 = $_POST['password2'];
            $email = $_POST['email'];
            $row['type'] = 1;

            if(isset($user)){
                $filterdUuser = filter_var($user,FILTER_SANITIZE_STRING);
                if (strlen($filterdUuser) < 4) {

                $formErrors[] = 'Username Must Be Larger Than 4 Charachter';

            }
        }
            if(isset($pass1) && isset($pass2)){
    
            if(empty($pass1)){
            $formErrors[]= 'Sorry Password Cant Be EMpty';
            }

            if(sha1($pass1) !== sha1($pass2)) {

            $formErrors[] = 'Sorry Password Not Match';
            }
        }

            if(isset($email)) {
            $filterdEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
            if (filter_var($filterdEmail, FILTER_VALIDATE_EMAIL ) != true){
             $formErrors[]='This Email Is Not Valid';
            }

        }
            if(empty($formErrors)){
            // check IF User Exist In Database
            $check = checkItem("name","users", $user);

            if($check == 1){
                $formErrors[]='Sorry This User Is Exists';
            }else {

        // Insert Userinformation In The Database
            $stmt = $con->prepare("INSERT INTO 
                                users(name,password,Email,type)
                                VALUES(:zuser, :zpass, :zmail,1)");
            $stmt->execute(array(
                        'zuser' =>$user,
                        'zpass' =>sha1($pass1),
                        'zmail' =>$email

                                     ));
                    // echo succes massegae
            $successMsg = 'Pravo *_- You Are Now Registerd User';


            }
         } 
      }
    } 
     ?>
        <div class="login-containers" id="login-container">
        <div class="forms-container">
            <div class="signin-signgup">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="sign-in-form" method="POST">
                    <h2 class="title-login">تسجيل الدخول</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="اسم المستخدم">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pass" placeholder="كلمة السر">
                    </div>
                    <div class="input-field">
                     <i class="fas fa-calendar-check"></i>
                        <select>
                            <option>مستخدم عادي</option>
                            <option>مشرف</option>
                        </select>                
                    </div>
                    <input type="submit" name="login" value="تسجيل الدخول" class="btn-login-sign-in">
                    <a href="#" class="forget-passowrd-login">نسيت كلمة السر؟</a>
                </form>
                
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="sign-up-form">
                <h2 class="title-login">حساب جديد</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input
                    type="text" 
                    name="name"
                    autocomplete="off"
                    placeholder="اسم المستخدم"
                    pattern=".{4,}"
                    title="Username Must Be 4 Chars"
                    required
                    />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input 
                      name="email"    
                      type="email" 
                      autocomplete="off"
                      placeholder="البريد الالكتروني"
                      required
                      />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input
                      type="password" 
                      name="password"
                      autocomplete="new-password"
                      placeholder="كلمة السر"
                      minlength="4"
                      required
                      />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input 
                     minlength="4"
                     type="password"
                     name="password2"
                     autocomplete="new-password"
                     placeholder=" تأكيد كلمة السر "
                     required/>
                </div>
                <input type="submit" name="signup" value="انشاء حساب " class="btn-login-sign-in">
            </form>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel right-panel">
            <div class="content">
                <h3><span>خد</span>متك</h3>
                <p>اذا كان لديك حساب سجل دخولك من هنا  </p>
                <button id="sign-in-btn" onclick="removeclassnewaccount()"class="btn-login-sign-in transparent">تسجيل الدخول</button>
            </div>
           <img src="layot\img\undraw_Code_thinking_re_gka2.svg" class="image-sign-in">
        </div> 

        <div class="panel left-panel">
            <div class="content">
                <h3><span>خد</span>متك</h3>
                <p>اذا كنت جديد سجل حسابك من هنا </p>
                <button id="sign-up-btn" onclick="addclassnewaccount()"  class="btn-login-sign-in transparent">حساب جديد</button>
            </div>
           <img src="layot\img\undraw_online_ad_re_ol62.svg" class="image-sign-in">
        </div> 
    </div>
</div>
<?php 
            if (!empty($filterdUuser)){
                foreach ($formErrors as $error){
                    echo '<div class="msg error">' . $error .'</div>';
                }
            }
            if (isset($successMsg)) {
                echo '<div class="msg success">' . $successMsg . '</div>' ;
            }
        ?>
    <?php 
        ob_end_flush();
    ?>