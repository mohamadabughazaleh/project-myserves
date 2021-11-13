<?php 
ob_start();
include ("include/session.php");
include ("include/connect.php");
include ("include/header.php");
include ("include/topnav.php");
include ("include/function.php");
include('include/loding.php');
if (isset($_SESSION['userid']))
{
    $name = isset($_GET['user_id']) && is_numeric($_GET['user_id']) ? intval($_GET['user_id']) :0;
    $post = isset($_GET['post']) && is_numeric($_GET['post']) ? intval($_GET['post']) :0;

    $getUser = $con->prepare("SELECT * FROM users WHERE id = '$post' ");
    $getUser->execute();
    $row = $getUser->fetch();

  	if (!isset($_GET['post'])) {
  		header("Location: mainpage.php");
  		exit;  
  	}

  	# Getting User data data
  	$chatWith = getUser($row['id'], $con);

	  

  	$chats = getChats($_SESSION['userid'], $row['id'], $con);

  	opened($row['id'], $con, $chats);
?>

<div class="d-flex
             justify-content-center
             align-items-center
             vh-100">
    <div class="w-400 shadow p-4 rounded">
    	<a href="detailsservice.php"
    	   class="fs-4 link-dark">&#8592;</a>

    	   <div class="d-flex align-items-center">
    	   	  <img src="layot/img/<?=$row['imgg']?>"
    	   	       class="w-15 rounded-circle">

               <h3 class="display-4 fs-sm m-2">
               	  <?=$row['name']?> <br>
               	  <div class="d-flex
               	              align-items-center"
               	        title="online">
               	    <?php
                        if (last_seen($row['last_seen']) == "Active") {
               	    ?>
               	        <div class="online"></div>
               	        <small class="d-block p-1">Online</small>
               	  	<?php }else{ ?>
               	         <small class="d-block p-1">
               	         	Last seen:
               	         	<?=last_seen($row['last_seen'])?>
               	         </small>
               	  	<?php } ?>
               	  </div>
               </h3>
    	   </div>

    	   <div class="shadow p-4 rounded
    	               d-flex flex-column
    	               mt-2 chat-box"
    	        id="chatBox">
    	        <?php 
                     if (!empty($chats)) {
                     foreach($chats as $chat){
                     	if($chat['from_id'] == $_SESSION['userid'])
                     	{ ?>
						<p class="rtext align-self-end
						        border rounded p-2 mb-1">
						    <?=$chat['message']?> 
						    <small class="d-block">
						    	<?=$chat['created_at']?>
						    </small>      	
						</p>
                    <?php }else{ ?>
					<p class="ltext border 
					         rounded p-2 mb-1">
					    <?=$chat['message']?> 
					    <small class="d-block">
					    	<?=$chat['created_at']?>
					    </small>      	
					</p>
                    <?php } 
                     }	
    	        }else{ ?>
               <div class="alert alert-info 
    				            text-center">
				   <i class="fa fa-comments d-block fs-big"></i>
	               No messages yet, Start the conversation
			   </div>
    	   	<?php } ?>
    	   </div>
    	   <div class="input-group mb-3">
    	   	   <textarea cols="3"
    	   	             id="message"
    	   	             class="form-control"></textarea>
    	   	   <button class="btn btn-primary"
    	   	           id="sendBtn">
    	   	   	  <i class="fa fa-paper-plane"></i>
    	   	   </button>
    	   </div>

    </div>
</div>

<?php include ("include/footer.php");?>

<script>
	var scrollDown = function(){
        let chatBox = document.getElementById('chatBox');
        chatBox.scrollTop = chatBox.scrollHeight;
	}

	scrollDown();

	$(document).ready(function(){
      
      $("#sendBtn").click(function(){
		  console.log("Hello");
      	message = $("#message").val();
      	if (message == "") return;

      	$.post("insert.php",
      		   {
      		   	message: message,
      		   	to_id: <?=$chatWith['id']?>
      		   },
      		   function(data, status){
                  $("#message").val("");
                  $("#chatBox").append(data);
                  scrollDown();
      		   });
      });

      /** 
      auto update last seen 
      for logged in user
      **/
      let lastSeenUpdate = function(){
      	$.get("update_last_seen.php");
      }
      lastSeenUpdate();
      /** 
      auto update last seen 
      every 10 sec
      **/
      setInterval(lastSeenUpdate, 10000);



      // auto refresh / reload
      let fechData = function(){
      	$.post("getMessage.php", 
      		   {
      		   	id_2: <?=$chatWith['id']?>
      		   },
      		   function(data, status){
                  $("#chatBox").append(data);
                  if (data != "") scrollDown();
      		    });
      }

      fechData();
      /** 
      auto update last seen 
      every 0.5 sec
      **/
      setInterval(fechData, 500);
    
    });
</script>
<?php
  }else{
	header('Location: main-login.php');
	exit;
  }
  ob_end_flush();
 ?>
