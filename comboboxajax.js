	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_wilayah.php",
          	cache: false, 
          	success: function(msg){
              $("#wilayah").html(msg);
            }
        });
     });