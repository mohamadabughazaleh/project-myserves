<?php 
   $titlePage = "sub-section";
   include ("include/header-admin.php");
   include ("include/navadmin.php");
?>
<!--start section-->
<div class="wrapper">
  <div class="container">
    <div class="section-sub-admin">
      
       <!--start taple-->
       <div class="row">
      <div class="col-12">
          <div class="cardsd-taple-page  overlay-scrollbar">
              <div class="cardsd-header">
                 <h3>القسم الفرعي</h3> 
                  <i class="fas fa-ellipsis-h"></i>
              </div>
              <div class="cardsd-content">
                  <table>
                      <thead>
                          <tr>
                              <th>#</th>
                              <th> اسم القسم الفرعي</th>
                              <th>اسم القسم الرئيسي</th>
                              <th>تاريخ اضافة القسم</th>
                              <th>حذف القسم</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>برمجة واجهات اماميه Front-End</td>
                              <td>برمجة وتطوير</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                          </tr>
                          <!--test-->
                          <tr>
                              <td>2</td>
                              <td>السيرفرات</td>
                              <td>برمجة وتطوير</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>برمجة java</td>
                              <td>برمجة وتطوير</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
                              </td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>برمجة php</td>
                              <td>برمجة وتطوير</td>
                              <td>1/11/2021</td>
                              <td>
                                <button type="button" class="btn btn-danger">حذف القسم</button>
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
                 <h3>اضافة قسم فرعي</h3> 
                  <i class="fas fa-ellipsis-h"></i>
              </div>
              <div class="cardsd-content">
                  <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">اسم القسم</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="اسم القسم">
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