<?php include ("mainLink.php");

?>

 <!--start navbar-->
 <nav class="navbar navbar-edit navbar-expand-lg navbar-light sticky ">
                    <a class="navbar-brand logo" href="mainpage.php"><span>خد</span>متك</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link main-text-nav" href="add-serves.php?action=Add&userid=<?php echo $_SESSION['ID']?>"><i class="fas fa-plus"></i>اضف خدمة</a>
                        </li>
                        <li class="nav-item">                                              
                        <a class="nav-link  main-text-nav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-align-justify"></i>الاقسام</a>     
                        </a>
                            <div class="dropdown-menu section-navbar" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="freelansiter-section.php"><i class="fas fa-laptop-house"></i>قسم العمل الحر</a>
                                <a class="dropdown-item" href="serves-section.php"><i class="far fa-building"></i>قسم الخدمات</a>
                            </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link main-text-nav" href="#"><i class="fas fa-briefcase"></i>الخدمات المطلوبة</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link main-text-nav" href="#"><i class="fas fa-ambulance"></i>الطلبات الواردة</a>
                        </li>
                        <!--start serch-->
                        <li class="nav-item icon-nav-space">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search icon-nav"></i>
                            </a>
                            <div class="dropdown-menu serch-dropdown" aria-labelledby="navbarDropdownMenuLink">
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" style="width:100%;margin-right: 0px !important;border-radius: 0;" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                            </div>
                        </li>
                         <!--end serch-->
                         <!--start notification-->
                        <li class="nav-item ">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-bell icon-nav"></i>
                            </a> 
                            <div class="dropdown-menu continar-notification" aria-labelledby="navbarDropdownMenuLink">
                                <ul class="list-group ">
                                    <li class="list-group-item">
                                       <img class="img-profile" src="layot/img/pexels-cottonbro-4778611.jpg">
                                       <span class="text-notification">
                                           لأسف، تم رفض الخدمة التي أرسلتها: تصميم وانشاء صفحات ومواقع ويب (Web-developer). سبب الرفض:
                                           المرجو تحديد حجم العمل الذي ستقدمه مقابل 5$ بدقة في الوصف. المرجو تحديد حجم العمل الذي ستقدمه في تطويراتك بدقة.
                                           طلب التعامل أو التواصل خارج موقع خدمتك أو إضافة وسائل تواصل مثل البريد الإلكتروني  
                                       </span>
                                       <span class="time-notification"><i class="far fa-clock"></i> منذ 4 أشهر و7 أيام</span>
                                    </li>
                                    <li class="list-group-item">
                                       <img class="img-profile" src="layot/img/pexels-cottonbro-4778611.jpg">
                                       <span class="text-notification">
                                           لأسف، تم رفض الخدمة التي أرسلتها: تصميم وانشاء صفحات ومواقع ويب (Web-developer). سبب الرفض:
                                           المرجو تحديد حجم العمل الذي ستقدمه مقابل 5$ بدقة في الوصف. المرجو تحديد حجم العمل الذي ستقدمه في تطويراتك بدقة.
                                           طلب التعامل أو التواصل خارج موقع خدمتك أو إضافة وسائل تواصل مثل البريد الإلكتروني  
                                       </span>
                                       <span class="time-notification"><i class="far fa-clock"></i> منذ 4 أشهر و7 أيام</span>
                                    </li>
                                    <li class="list-group-item">
                                       <img class="img-profile" src="layot/img/pexels-cottonbro-4778611.jpg">
                                       <span class="text-notification">
                                           لأسف، تم رفض الخدمة التي أرسلتها: تصميم وانشاء صفحات ومواقع ويب (Web-developer). سبب الرفض:
                                           المرجو تحديد حجم العمل الذي ستقدمه مقابل 5$ بدقة في الوصف. المرجو تحديد حجم العمل الذي ستقدمه في تطويراتك بدقة.
                                           طلب التعامل أو التواصل خارج موقع خدمتك أو إضافة وسائل تواصل مثل البريد الإلكتروني  
                                       </span>
                                       <span class="time-notification"><i class="far fa-clock"></i> منذ 4 أشهر و7 أيام</span>
                                    </li>
                                    <li class="list-group-item">
                                       <img class="img-profile" src="layot/img/pexels-cottonbro-4778611.jpg">
                                       <span class="text-notification">خدمتك بانتظار المراجعة حالياً، سيصلك إشعار حين إتمام مراجعتها من قبل فريقنا.</span>
                                       <span class="time-notification"><i class="far fa-clock"></i> منذ 4 أشهر و7 أيام</span>
                                    </li>
                                </ul>
                                    <div class="card-header footer-notification">
                                         <i class="far fa-bell"></i><a href="#">عرض جميع الاشعارات</a>
                                    </div>
                            </div>   
                        </li>
                         <!--end notification-->
                         <!--start maseges-->
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="far fa-envelope icon-nav"></i>
                            </a> 
                            <div class="dropdown-menu continar-notification continar-maseges" aria-labelledby="navbarDropdownMenuLink">
                                <ul class="list-group ">
                                    <li class="list-group-item">
                                        <a href="#">
                                            <img class="img-profile" src="layot/img/pexels-cottonbro-4778611.jpg">
                                            <span class="text-notification text-maseges">
                                               مرحبا بك في موقع خدمتك سيستطيع طالب الخدمة من التواصل معك من خلال رسائل الموقع   
                                            </span>
                                            <span class="time-notification"><i class="far fa-clock"></i> منذ 4 أشهر و7 أيام</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <img class="img-profile" src="layot/img/pexels-cottonbro-4778611.jpg">
                                            <span class="text-notification  text-maseges">
                                            مرحبا بك في موقع خدمتك سيستطيع طالب الخدمة من التواصل معك من خلال رسائل الموقع   
                                            </span>
                                            <span class="time-notification"><i class="far fa-clock"></i> منذ 4 أشهر و7 أيام</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <img class="img-profile" src="layot/img/pexels-cottonbro-4778611.jpg">
                                            <span class="text-notification  text-maseges">
                                            مرحبا بك في موقع خدمتك سيستطيع طالب الخدمة من التواصل معك من خلال رسائل الموقع   
                                            </span>
                                            <span class="time-notification"><i class="far fa-clock"></i> منذ 4 أشهر و7 أيام</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <img class="img-profile" src="layot/img/pexels-cottonbro-4778611.jpg">
                                            <span class="text-notification  text-maseges">
                                                سوف يتم تلقي الرسائل في حال طلب منك تنفيد الخدمة
                                            </span>
                                            <span class="time-notification"><i class="far fa-clock"></i> منذ 4 أشهر و7 أيام</span>
                                        </a>
                                    </li>
                                </ul>
                                    <div class="card-header footer-notification">
                                         <i class="far fa-envelope"></i><a href="#">عرض جميع الرسائل</a>
                                    </div>
                            </div>   
                        </li>
                         <!--end maseges-->
                         <!--start profile-->
                         <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="main-img-profile" src="layot/img/pexels-cottonbro-4778611.jpg">
                            </a>
                            <div class="dropdown-menu drop-nav-profile" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fas fa-user"></i>حسين ابوقطام</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-wallet"></i>الرصيد</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-user-edit"></i>تعديل الحساب</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-door-open"></i> خروج</a>

                            </div>
                        </li>
                         <!--end profile-->
                    </ul>
                </div>
            </nav>