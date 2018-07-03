function deleteFunction(elem,name,id){
   $(elem).parent().parent().parent().remove(); 
   $.ajax({
  type: 'POST',
  url: "deletevideo.php",

  data: ({ 'name' : name,'id': id }),
  success:function(data){
                         }

});
}