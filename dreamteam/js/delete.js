
function deleteFunction(elem,name,dir){
   $(elem).parent().parent().parent().remove(); 
   $.ajax({
  type: 'POST',
  url: "delete.php",

  data: ({ 'name' : name,'dir': dir }),
  success:function(data){
                         }

});
}
