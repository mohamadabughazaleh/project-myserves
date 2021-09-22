//add serves 
$(document).ready(function(){
  
    $('#add_main_select').change(function(){
        var main_select = $(this).val();
        if(main_select){
            $.get(
                "ajax.php",
                {main_selector : main_select},
                function(data){
                    $('#add_sub_select').html(data);
                }

            );
        }else{
            $('#add_sub_select').html('<option>اختر الفرع الرئيسي اولا</option>');
        }
    })
});