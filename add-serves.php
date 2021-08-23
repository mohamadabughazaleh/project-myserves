<?php include ("topnav.php")?>


<h1 class="name-section">اضافة خدمة</h1>
<div class="container">
    <div class="add-serves-container">
    <form>
        <div class="form-group">
                <label for="formGroupExampleInput">اسم الخدمة:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="اسم الخدمة">
            <label for="formGroupExampleInput">نوع الخدمة:</label>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary btn-add-serves-select active">
                        <input type="radio" name="options" id="option1" checked> عمل حر
                    </label>
                    <label class="btn btn-secondary btn-add-serves-select">
                        <input type="radio" name="options" id="option2"> خدمات
                    </label>
            </div><br><br>
            <label for="formGroupExampleInput" style="display: inline-block;">القسم:</label>
            <select class="form-control section-add-serves">
                <option>القسم الرئيسي</option>
            </select>
            <select class="form-control section-add-serves">
                <option>القسم الفرعي</option>
            </select><br><br>
            <label for="validationTextarea">وصف الخدمة:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <label for="exampleFormControlFile1">صورة الخدمة:</label>
            <div style="width:100%;margin:auto;">
                <div class="upload-add-serves" id="upload-add-serves">
                    <img src="https://placehold.co/300x300" alt="img-upload" class="rounded imguploadserves" id="imguploadserves">
                </div>
                <input type="file" onchange="readUrl(this)"class="inpfile" id="inpfile">
                <label for="inpfile"class="input-file-add-serves"><i class="fas fa-upload"></i>&nbsp;اضافة صورة</label>
            </div>
            <label for="formGroupExampleInput">كلمات مفتاحية للخدمة:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="كلمات مفتاحية">
        </div>
    </form>
    <button type="button" class="btn btn-add-serves"><i class="fas fa-plus-circle"></i>&nbsp;اضافة الخدمة</button>
    </div>
</div>