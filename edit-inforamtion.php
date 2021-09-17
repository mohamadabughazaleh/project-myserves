<?php include ("mainLink.php")?>
<!--start-edit-infromation-->
<div class="information-edit text-center">
    <div class="information-img">
        <img class="information-imge-" src="../project-myserves/layot/imge/team2.png" alt="">
        <abbr title="تغير الصوره الشخصية"> <div class="img-info"></abbr>
            <i class="fas fa-camera"></i>
        </div>
    </div>
<div class="form-informayion text-center">
    <div class="container">
        <div class="form-edit">
            <form>
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
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="079-11-67887" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
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







