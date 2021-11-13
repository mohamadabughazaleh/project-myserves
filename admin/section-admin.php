<?php 
   $titlePage = "admin-section";
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
                 <h3>الاقسام</h3> 
                  <i class="fas fa-ellipsis-h"></i>
              </div>
              <div class="cardsd-content">
                  <table>
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>اسم القسم</th>
                              <th>نوع القسم</th>
                              <th>تاريخ اضافة القسم</th>
                              <th>حذف القسم</th>
                              <th>الاقسام الفرعية</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>برمجة وتطوير</td>
                              <td>عمل حر</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-primary">الاقسام الفرعي</button>
                              </td>
                          </tr>
                          <!--test-->
                          <tr>
                              <td>2</td>
                              <td>كهرباء</td>
                              <td>خدمات</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-primary">الاقسام الفرعي</button>
                              </td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>اعمال</td>
                              <td>عمل حر</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-primary">الاقسام الفرعي</button>
                              </td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>صيانة مركبات</td>
                              <td>خدمات</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-primary">الاقسام الفرعي</button>
                              </td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>تصميم</td>
                              <td>عمل حر</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-primary">الاقسام الفرعي</button>
                              </td>
                          </tr>
                          <tr>
                              <td>6</td>
                              <td>اثاث</td>
                              <td>خدمات</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-primary">الاقسام الفرعي</button>
                              </td>
                          </tr>
                          <tr>
                              <td>7</td>
                              <td>دورات عن بعد</td>
                              <td>عمل حر</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-primary">الاقسام الفرعي</button>
                              </td>
                          </tr>
                          <tr>
                              <td>8</td>
                              <td>صرف صحي</td>
                              <td>عمل حر</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-primary">الاقسام الفرعي</button>
                              </td>
                          </tr>
                          <!--test-->
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
       <!--end taple-->
       <!--start add section-->
       <div class="row">
      <div class="col-12">
          <div class="cardsd-taple-page add-section-admin">
              <div class="cardsd-header">
                 <h3>اضافة قسم</h3> 
                  <i class="fas fa-ellipsis-h"></i>
              </div>
              <div class="cardsd-content">
                  <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">اسم القسم</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="اسم القسم">
                        <label>نوع القسم</label>
                        <select class="form-control">
                           <option>خدمات</option>
                           <option>عمل حر</option>
                        </select>
                    </div>
                      <button type="submit" class="btn btn-success mb-2">اضافة القسم</button>
                  </form>
              </div>
          </div>
      </div>
          
       <!--end add section-->
    </div>
  </div>
</div> <!--end wraper-->

<!--end section-->

<?php include ("include/footer-admin.php");?>