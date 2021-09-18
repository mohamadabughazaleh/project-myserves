<?php
ob_start();
session_start();
include ("topnav.php");
include ("connect.php");
include ("function.php");


    $action = isset($_GET['action']) ? $_GET['action'] : 'Add';
    if($action == 'Add') { 
        $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) :0;
        $stmt2 = $con->prepare("SELECT * FROM sub_category");
        $stmt2 ->execute(array($userid));
        $sub_categories = $stmt2->fetchAll();

        $stmt1 = $con->prepare("SELECT * FROM main_categories"); 
        $stmt1 ->execute();
        $main_categories = $stmt1->fetchAll();

        ?>
        
            <h1 class="name-section">اضافة خدمة</h1>
            <div class="container">
                <div class="add-serves-container">
                <form action="add-serves.php?action=Insert&userid" method="POST" enctype = "multipart/form-data">
                    <div class="form-group">
                            <label for="formGroupExampleInput">اسم الخدمة:</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="اسم الخدمة">
                        <label for="formGroupExampleInput">نوع الخدمة:</label>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary btn-add-serves-select active">
                                    <input type="radio"  name="options" id="option1" checked> عمل حر
                                    <?php (checkCat("F")); ?>
                                </label>
                                <label class="btn btn-secondary btn-add-serves-select">
                                    <input type="radio" name="options" id="option2"> خدمات
                                    <?php (checkCat("S")); ?>
                                </label>
                        </div><br><br>
                        <label for="formGroupExampleInput" style="display: inline-block;">القسم:</label>
                        <select name="main-cat" class="form-control section-add-serves">
                            <option>القسم الرئيسي</option>
                            <?php foreach($main_categories as $main): ?>
                                <option value="<?= $main['id'] ?>"> <?= $main['title_cat'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select name="sub-cat" class="form-control section-add-serves">
                            <option>القسم الفرعي</option>
                            <?php foreach($sub_categories as $sub): ?>
                                <option value="<?= $sub['id'] ?>"> <?= $sub['Name'] ?></option>
                            <?php endforeach; ?>
                        </select><br><br>
                        <label for="validationTextarea">وصف الخدمة:</label>
                        <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <label for="exampleFormControlFile1">صورة الخدمة:</label>
                        <div style="width:100%;margin:auto;">
                            <div class="upload-add-serves" id="upload-add-serves">
                                <img src="https://placehold.co/300x300" alt="img-upload" name="img" class="rounded imguploadserves" id="imguploadserves">
                            </div>
                            <input name="upload" type="file" onchange="readUrl(this)"class="inpfile" id="inpfile">
                            <label for="inpfile"class="input-file-add-serves"><i class="fas fa-upload"></i>&nbsp;اضافة صورة</label>
                        </div>
                        <label for="formGroupExampleInput">كلمات مفتاحية للخدمة:</label>
                        <input type="text" name="search" class="form-control" id="formGroupExampleInput" placeholder="كلمات مفتاحية">
                    </div>
                    <button type="submit" class="btn btn-add-serves"><i class="fas fa-plus-circle"></i>&nbsp;اضافة الخدمة</button>
                </form>
                </div>
            </div>
   <?php } 
   
            elseif($action == 'Insert') {
                // $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) :0;
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo  "<h1 class='text-center'>تمت إضافة خدمة</h1>";
                echo "<div class = 'container'>";
                   
                    $name       = $_POST['name'];
                    //$option   = $_POST['options'];
                    // $main_c  = $_POST['main-cat'];
                    $sub_c       = $_POST['sub-cat'];
                    $Body        = $_POST['body'];
                    
                    $imageName   = $_FILES['upload']['name'];
                    $imageSize   = $_FILES['upload']['size'];
                    $imageTemp   = $_FILES['upload']['tmp_name'];
                    $imageType   = $_FILES['upload']['type'];
                    // $temp       = $_POST['upload']['tmp_name'];
                    // $folder     = "Img/" . $filename;
                    // move_uploaded_file($temp ,$folder);
                    $imageAllowedExtentions = array("jpeg" , "jpg", "png" , "gif");
                    $imageExtension = strtolower(end(explode('.' , $imageName)));



                    $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'name cant be <strong>Empty</strong>';
                    }
                    if(empty($sub_c)){
                        $formErrors[] = 'Sub Category cant be <strong>Empty</strong>';
                        }
                    if(empty($Body)){
                        $formErrors[] = 'Body cant be <strong>Empty</strong>';
                    }
                    if(!empty($imageName) && ! in_array($imageExtension,$imageAllowedExtentions)){
                        $formErrors[] = 'This Extension is Not<strong>Allowed</strong>';

                    }
                    if(empty($imageName)) {
                        $formErrors[] = 'Image IS <strong>Required</strong>';

                    }
                    if($imageSize < 90000) {
                        $formErrors[] = 'Image IS <strong>Larger</strong>';

                    }
                    
                    
                    foreach($formErrors as $erros){
                        echo '<div class="alert alert-danger">' . $erros . '</div>';
            
                    }
                    
                    // Check If There's No Error Proceed The Update Operation
                    if(empty($formErrors)){
                                $image = rand(0 , 100000) . '_' . $imageName;
                                move_uploaded_file($imageTemp,'upload/image//' .$image);

                            // Insert Userinformation In The Database
                                $stmt = $con->prepare("INSERT INTO 
                                            post (title , body, category_id, user_id, img)
                                            VALUES(:zname, :zbody, :zsub , :userid , :zimg)");
                                $stmt->execute(array(
                                    'zname'     =>$name,
                                    'zbody'     =>$Body,
                                    'zsub'      =>$sub_c,
                                    'userid'    => $_SESSION['ID'],
                                    'zimg'      => $image
                            ));
                            //  echo "succes massegae";
                            //     echo "<div class='container'>";
                            //     $theMsg = "<div class='alert alert-success'>" . $stmt->rowcount() . ' Record Inserted </div>';
                            //     redirectHome($theMsg,'back',4);
                            //         echo "</div>";
                                }else {
                                   echo "No Record";
                                }
                            
            
                        }       
                        echo "</div>";                 

                    }else {
                        echo "No session";
                    }  
    ob_end_flush();
   ?>