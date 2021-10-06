<?php include ("mainLink.php");?>


<div class="login-containers" id="login-container">
    <div class="forms-container">
        <div class="signin-signgup">
            <form action="" class="sign-in-form">
                <h2 class="title-login">تسجيل الدخول</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="اسم المستخدم">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="كلمة السر">
                </div>
                <div class="input-field">
                <i class="fas fa-calendar-check"></i>
                        <select>
                            <option>مستخدم عادي</option>
                            <option>مشرف</option>
                        </select>                
                    </div>
                <input type="submit" value="تسجيل الدخول" class="btn-login-sign-in">
                <a href="#" class="forget-passowrd-login">نسيت كلمة السر؟</a>
            </form>

            <form action="" class="sign-up-form">
                <h2 class="title-login">حساب جديد</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="اسم المستخدم">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="البريد الالكتروني">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="كلمة السر">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder=" تأكيد كلمة السر ">
                </div>
                <input type="submit" value="انشاء حساب " class="btn-login-sign-in">
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
