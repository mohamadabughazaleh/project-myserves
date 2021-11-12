<?php 
   $titlePage = "admin-serves";
   include ("include/header-admin.php");
   include ("include/navadmin.php");
?>
<!--start section-->
<div class="wrapper">
  <div class="container">
    <div class="tables-admin">
      
       <!--start taple-->
       <div class="row">
      <div class="col-12">
          <div class="cardsd-taple-page overlay-scrollbar">
              <div class="cardsd-header">
                 <h3>الخدمات في الموقع</h3> 
                  <i class="fas fa-ellipsis-h"></i>
              </div>
              <div class="cardsd-content">
                  <table>
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>اسم الخدمة</th>
                              <th>نوع القسم</th>
                              <th>القسم الرئيسي</th>
                              <th>القسم الفرعي</th>
                              <th>عدد الطلبات</th>
                              <th>تاريخ اضافة الخدمة</th>
                              <th>التعليقات</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>عبدالله للميكانيك</td>
                              <td>خدمات</td>
                              <td>صيانة مركبات</td>
                              <td>ميكانيكي عام</td>
                              <td>6 طلبوا هذه الخدمة</td>
                              <td>1/11/2021</td>
                              <td>
                                 <button type="button" class="btn btn-info">رؤية التعليقات</button>
                              </td>
                          </tr>
                          <!--test-->
                          <tr>
                              <td>2</td>
                              <td>شركة الصقر للتمديدات</td>
                              <td>خدمات</td>
                              <td>صرف صحي</td>
                              <td>تركيب مضخات مياه</td>
                              <td>12 طلبوا هذه الخدمة</td>
                              <td>1/11/2021</td>
                              <td>
                                 <button type="button" class="btn btn-info">رؤية التعليقات</button>
                              </td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>برمجة html</td>
                              <td>عمل حر</td>
                              <td>برمجة وتطوير</td>
                              <td>برمجة واجهات امامية front-end</td>
                              <td>30 طلبو هذه الخدمة</td>
                              <td>6/5/2021</td>
                              <td>
                                 <button type="button" class="btn btn-info">رؤية التعليقات</button>
                              </td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>جرد الحسابات </td>
                              <td>عمل حر</td>
                              <td>ألاعمال</td>
                              <td>خدمات مالية</td>
                              <td>23 طلبوا هذه الخدمة</td>
                              <td>2/9/2021</td>
                              <td>
                                 <button type="button" class="btn btn-info">رؤية التعليقات</button>
                              </td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>مهند لصيانة المركبات</td>
                              <td>خدمات</td>
                              <td>صيانة مركبات</td>
                              <td>ميكانيكي عام</td>
                              <td>6 طلبات</td>
                              <td>1/11/2021</td>
                              <td>
                                 <button type="button" class="btn btn-info">رؤية التعليقات</button>
                              </td>
                          </tr>
                          <tr>
                              <td>6</td>
                              <td>عبدالله للميكانيك</td>
                              <td>خدمات</td>
                              <td>صيانة مركبات</td>
                              <td>ميكانيكي عام</td>
                              <td>6 طلبات</td>
                              <td>1/11/2021</td>
                              <td>
                                 <button type="button" class="btn btn-info">رؤية التعليقات</button>
                              </td>
                          </tr>
                          <tr>
                              <td>7</td>
                              <td>عبدالله للميكانيك</td>
                              <td>خدمات</td>
                              <td>صيانة مركبات</td>
                              <td>ميكانيكي عام</td>
                              <td>6 طلبات</td>
                              <td>1/11/2021</td>
                              <td>
                                 <button type="button" class="btn btn-info">رؤية التعليقات</button>
                              </td>
                          </tr>
                          <!--test-->
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
       <!--end taple-->
    </div>
  </div>
</div> <!--end wraper-->

<!--end section-->

<?php include ("include/footer-admin.php");?>