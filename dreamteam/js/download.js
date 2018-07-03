function Download(name){
 
  $.ajax({
    type: 'POST',
  url: 'download.php',
  




  data: {nn : name},
 success: function(response){
       window.location = response;
     }

});

}