<?php include ("mainLink.php")?>
<!--start-edit-infromation-->
<div class="information-edit text-center">
    <form>
    <div class="information-img">
        <img class="information-imge-" src="../project-myserves/layot/img/people-icons-3800-free-files-in-png-eps-svg-format-blank-person-png-2454_1534.jpg"  id="uplodeimgedit" alt="">
        <input type="file" id="uplode-img-edit" onchange="readUrledit(this)" hidden>
        <abbr title="تغير الصوره الشخصية"> <div class="img-info" id="clickimgedite" onclick="uptateimge()"></abbr>
        <i class="fas fa-camera"></i>
    </div>
</div>
<div class="form-informayion text-center">
    <div class="container">
        <div class="form-edit">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6">
                        <div class="mr-form">
                            <label class="text-form " for="exampleInputEmail1">الأسم الاول</label>
                            <input type="text" class="form-control" placeholder=" ">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="mr-form">
                            
                            <label class="text-form" for="exampleInputEmail1">الأسم الأخير</label>
                            <input type="text" class="form-control" placeholder=" ">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="mr-form">
                            <label class="text-form " for="inputState">الجنس</label>
                            <select id="inputState" class="form-control">
                                <option>ذكر</option>
                                <option selected>أنثى</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="mr-form">
                            <label class="text-form"  for="inputState">تاريخ الميلاد</label>
                            <input type="date" class="form-control"  name="trip-start" value="2018-07-22"> 
                        </div>
                    </div>  
                    <div class="col-lg-4 col-md-6">
                        <div class="mr-form">
                            <label class="text-form" for="inputState">الدولة</label>
                            <select id="inputState" class="form-control">
                                <option selected>الاردن</option>
                                <option>سوريا</option>
                            </select>
                        </div>
                    </div>
                    <div class=" col-lg-4  col-md-6">
                        <div class="mr-form">
                            <label class="text-form" for="phone">رقم الهاتف</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="079-11-67887" pattern="[0-9]{3}-[0-9]{2}-[0-9]{5}">
                        </div>
                    </div>
                    <div class=" col-lg-4  col-md-6">
                        <div class="mr-form">
                            
                            <label class="text-form" for="inlineFormInput">اسم المستخدم</label>
                            <input type="text" class="form-control " id="inlineFormInput" placeholder="">
                        </div>
                    </div>
                    <div class=" col-lg-4  col-md-6">
                        <div class="mr-form">
                            
                            <label  class="text-form" for="inputPassword6">كلمة المرور الحاليه</label>
                            <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class=" col-lg-4  col-md-6">
                        <div class="mr-form">
                            
                            <label  class="text-form" for="inputPassword6">كلمة المرور الجديده</label>
                            <input  type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                </div>
                <input class="btn" type="submit" value="حفظ التغيرات">
            </form>   
        </div>
    </div>
</div>
<!--end-edit-infromation-->
<?php include('loding.php');?>

<?php include ("footer.php");?>








