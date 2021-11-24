<?php
ob_start();
include ("include/session.php");
include ("include/connect.php");
include ("include/header.php");
include ("include/topnav.php");
include ("include/function.php");
include('include/loding.php');

?>
<div class="edit-profile">
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name">Yuki Hayashi</h5>
				<h6 class="user-email">yuki@Maxwell.com</h6>
			</div>
			<div class="about">
				<h5>About</h5>
				<p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2">معلومات الشخصية:</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">الأسم الاول</label>
					<input type="text" class="form-control" id="fullName" placeholder="الأسم الاول">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">الأسم الأخير</label>
					<input type="text" class="form-control" id="eMail" placeholder="الأسم الاخير">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">الجنس</label>
                    <select id="inputState" class="form-control" name="gender">
                        <option selected>ذكر</option>
                        <option>أنثى</option>
                    </select>				
                </div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">تاريخ الميلاد</label>
                    <input type="date" class="form-control"  name="date_birth" value='<?php echo $row['date_birth'] ?>'> 
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
                <label for="ciTy">الدولة</label>
                    <select id="inputState" class="form-control" name="الدولة">
                                                <option selected>الاردن</option>
                                                <option>سوريا</option>
                                                <option>السعودية</option>
                                                <option>الأمارات</option>
                                                <option>العراق</option>
                                                <option>قطر</option>
                                                <option>البحرين</option>
                                            </select>
				
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="name">أسم المستخدم</label>
                    <input type="text" class="form-control " id="inlineFormInput" name='name'  value="" placeholder="الدولة">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="sTate">كلمة المرور الحاليه</label>
                    <input type="password" id="inputPassword6" class="form-control" name="oldpassword"  value="" aria-describedby="passwordHelpInline">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="zIp">كلمة المرور الجديده</label>
                    <input  type="password" id="inputPassword6" class="form-control" name="newpassword" aria-describedby="passwordHelpInline">

				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-left">
					<button type="button" id="submit" name="submit" class="btn btn edit-one ">الغاء</button>
					<button type="button" id="submit" name="submit" class="btn btn edit-tow ">تحديث</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
           
                <?php include ("include/footer.php");?>
        