//add serves 
//freelancer add
$('#freelancer-add').click(function(){
  
    $(document).ready(function(){
        $('#add_frelancer_main').change(function(){
            var main_frelancers = $(this).val();
            if(main_frelancers){
                $.get(
                    "ajax.php",
                    {main_frelancer_add: main_frelancers},
                    function(data){
                        $('#add-frelancer-sub').html(data);
                    }

                );
            }else{
                $('#add-frelancer-sub').html('<option>اختر الفرع الرئيسي اولا</option>');
            }
        })
    })
});
//servess add

$('#servess-add').click(function(){
  
    $(document).ready(function(){
        $('#add_serves_main').change(function(){
            var main_servess = $(this).val();
            if(main_servess){
                $.get(
                    "ajax.php",
                    {main_servess_add: main_servess},
                    function(data){
                        $('#add_serves_sub').html(data);
                    }

                );
            }else{
                $('#add_serves_sub').html('<option>اختر الفرع الرئيسي اولا</option>');
            }
        })
    })
});