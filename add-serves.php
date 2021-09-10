<?php
session_start();
if (isset($_SESSION['Username'])) {
include ("topnav.php");
include ("connect.php");
include ("function.php");

$action = isset($_GET['action']) ? $_GET['action'] : 'Add';
    if($action == 'Add') { 
        $stmt2 = $con->prepare("SELECT * FROM sub_category");
        $stmt2 ->execute();
        $sub_categories = $stmt2->fetchAll();

        $stmt1 = $con->prepare("SELECT * FROM main_categories"); 
        $stmt1 ->execute();
        $main_categories = $stmt1->fetchAll();

        ?>
        
            <h1 class="name-section">اضافة خدمة</h1>
            <div class="container">
                <div class="add-serves-container">
                <form action="add-serves.php?action=Insert&userid" method="POST">
                    <div class="form-group">
                            <label for="formGroupExampleInput">اسم الخدمة:</label>
                            <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="اسم الخدمة">
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
                            <input name="file" type="file" onchange="readUrl(this)"class="inpfile" id="inpfile">
                            <label for="inpfile"class="input-file-add-serves"><i class="fas fa-upload"></i>&nbsp;اضافة صورة</label>
                        </div>
                        <label for="formGroupExampleInput">كلمات مفتاحية للخدمة:</label>
                        <input type="text" name="search" class="form-control" id="formGroupExampleInput" placeholder="كلمات مفتاحية">
                    </div>
                    <button type="submit" class="btn btn-add-serves"><i class="fas fa-plus-circle"></i>&nbsp;اضافة الخدمة</button>
                </form>
                </div>
            </div>
   <?php } elseif($action == 'Insert') {
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo  "<h1 class='text-center'>تمت إضافة خدمة</h1>";
                echo "<div class = 'container'>";
                   
                    $name = $_POST['title'];
                    //$option = $_POST['options'];
                    // $main_c = $_POST['main-cat'];
                    $sub_c = $_POST['sub-cat'];
                    $Body = $_POST['body'];
                    // $Img = $_POST['img'];
                   

                    $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'name cant be <strong>Empty</strong>';
                    }
                    // if(empty($option)){
                    //     $formErrors[] = 'Option cant be <strong>Empty</strong>';
                    // }
            
                    // if(empty($main_c)){
                    // $formErrors[] = 'Main Category cant be <strong>Empty</strong>';
                    // }
                    if(empty($sub_c)){
                        $formErrors[] = 'Sub Category cant be <strong>Empty</strong>';
                        }
                    if(empty($Body)){
                        $formErrors[] = 'Body cant be <strong>Empty</strong>';
                    }
                    foreach($formErrors as $erros){
                        echo '<div class="alert alert-danger">' . $erros . '</div>';
            
                    }
                    
                    // Check If There's No Error Proceed The Update Operation
                    if(empty($formErrors)){
            
                            // Insert Userinformation In The Database
                                $stmt = $con->prepare("INSERT INTO 
                                            post (title , body, category_id, user_id)
                                            VALUES(:zname, :zbody, :zsub , :userid)");
                                $stmt->execute(array(
                                    'zname'     =>$name,
                                    'zbody'     =>$Body,
                                    'zsub'      =>$sub_c,
                                    'userid'    => $_SESSION['ID']
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
                } 
   ?>