<?php 
   $titlePage = "order-admin";
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
                 <h3>الطلبات</h3> 
                  <i class="fas fa-ellipsis-h"></i>
              </div>
              <div class="cardsd-content">
                  <table>
                      <thead>
                          <tr>
                              <th>#</th>
                              <th> اسم الخدمة</th>
                              <th>نوع القسم</th>
                              <th>القسم الرئيسي</th>
                              <th>القسم الفرعي</th>
                              <th>التاريخ</th>
                              <th>وصف الخدمة</th>
                              <th>القبول</th>
                              <th>الرفض</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>رائد للتمديدات</td>
                              <td>شركة الصقر للتمديدات</td>
                              <td>صرف صحي</td>
                              <td>مضخات مياه</td>
                              <td>11/11/2021</td>
                              <td>
                                  <!-- وصف الخدمة -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fas fa-eye" style="margin-left:5px;"></i> وصف الطلب
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">وصف الخدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-right:310px">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمةهذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   <!-- وصف الخدمة -->
                              </td>
                              <td>
                                <button type="button" class="btn btn-success">قبول الخدمة</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-danger">رفض الخدمة</button>
                              </td>
                          </tr>
                          <!--test-->
                          <tr>
                              <td>2</td>
                              <td>رائد للتمديدات</td>
                              <td>شركة الصقر للتمديدات</td>
                              <td>صرف صحي</td>
                              <td>مضخات مياه</td>
                              <td>11/11/2021</td>
                              <td>
                                  <!-- وصف الخدمة -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fas fa-eye" style="margin-left:5px;"></i> وصف الطلب
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">وصف الخدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-right:310px">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمةهذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   <!-- وصف الخدمة -->
                              </td>
                              <td>
                                <button type="button" class="btn btn-success">قبول الخدمة</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-danger">رفض الخدمة</button>
                              </td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>رائد للتمديدات</td>
                              <td>شركة الصقر للتمديدات</td>
                              <td>صرف صحي</td>
                              <td>مضخات مياه</td>
                              <td>11/11/2021</td>
                              <td>
                                  <!-- وصف الخدمة -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fas fa-eye" style="margin-left:5px;"></i> وصف الطلب
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">وصف الخدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-right:310px">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمةهذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   <!-- وصف الخدمة -->
                              </td>
                              <td>
                                <button type="button" class="btn btn-success">قبول الخدمة</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-danger">رفض الخدمة</button>
                              </td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>رائد للتمديدات</td>
                              <td>شركة الصقر للتمديدات</td>
                              <td>صرف صحي</td>
                              <td>مضخات مياه</td>
                              <td>11/11/2021</td>
                              <td>
                                  <!-- وصف الخدمة -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fas fa-eye" style="margin-left:5px;"></i> وصف الطلب
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">وصف الخدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-right:310px">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمةهذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   <!-- وصف الخدمة -->
                              </td>
                              <td>
                                <button type="button" class="btn btn-success">قبول الخدمة</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-danger">رفض الخدمة</button>
                              </td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>رائد للتمديدات</td>
                              <td>شركة الصقر للتمديدات</td>
                              <td>صرف صحي</td>
                              <td>مضخات مياه</td>
                              <td>11/11/2021</td>
                              <td>
                                  <!-- وصف الخدمة -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fas fa-eye" style="margin-left:5px;"></i> وصف الطلب
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">وصف الخدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-right:310px">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمةهذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   <!-- وصف الخدمة -->
                              </td>
                              <td>
                                <button type="button" class="btn btn-success">قبول الخدمة</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-danger">رفض الخدمة</button>
                              </td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>رائد للتمديدات</td>
                              <td>شركة الصقر للتمديدات</td>
                              <td>صرف صحي</td>
                              <td>مضخات مياه</td>
                              <td>11/11/2021</td>
                              <td>
                                  <!-- وصف الخدمة -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fas fa-eye" style="margin-left:5px;"></i> وصف الطلب
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">وصف الخدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-right:310px">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمةهذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   <!-- وصف الخدمة -->
                              </td>
                              <td>
                                <button type="button" class="btn btn-success">قبول الخدمة</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-danger">رفض الخدمة</button>
                              </td>
                          </tr>
                          <tr>
                              <td>6</td>
                              <td>رائد للتمديدات</td>
                              <td>شركة الصقر للتمديدات</td>
                              <td>صرف صحي</td>
                              <td>مضخات مياه</td>
                              <td>11/11/2021</td>
                              <td>
                                  <!-- وصف الخدمة -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fas fa-eye" style="margin-left:5px;"></i> وصف الطلب
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">وصف الخدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-right:310px">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمةهذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   <!-- وصف الخدمة -->
                              </td>
                              <td>
                                <button type="button" class="btn btn-success">قبول الخدمة</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-danger">رفض الخدمة</button>
                              </td>
                          </tr>
                          <tr>
                              <td>7</td>
                              <td>رائد للتمديدات</td>
                              <td>شركة الصقر للتمديدات</td>
                              <td>صرف صحي</td>
                              <td>مضخات مياه</td>
                              <td>11/11/2021</td>
                              <td>
                                  <!-- وصف الخدمة -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fas fa-eye" style="margin-left:5px;"></i> وصف الطلب
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">وصف الخدمة</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-right:310px">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمةهذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        هذه الخدمة مميزة وانصح الجميع بطلب هذه الخدمة
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                   <!-- وصف الخدمة -->
                              </td>
                              <td>
                                <button type="button" class="btn btn-success">قبول الخدمة</button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-danger">رفض الخدمة</button>
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
