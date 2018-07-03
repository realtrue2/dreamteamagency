$(document).ready(function() {
var name ;var n;var id;
var url = window.location.href;
        


$('#add').change(function() {
    console.log("dasdsa");
    name = $(this).parent().parent().parent().parent();
    name = name.find('.photolist');
    console.log(name);
    var input = $(this)[0];
     var data = new FormData();
     var error = '';
    jQuery.each(input.files, function(i, file) {
 
            if(file.name.length < 1) {               
               error = error + ' Файл имеет неправильный размер! ';             
            } //Проверка на длину имени             
            if(file.size > 1000000) {
                error = error + ' File ' + file.name + ' is to big.';
            } //Проверка размера файла
            if(file.type != 'image/png' && file.type != 'image/jpg' && !file.type != 'image/gif' && file.type != 'image/jpeg' ) {
                error = error + 'File  ' + file.name + '  doesnt match png, jpg or gif';
            } //Проверка типа файлов
        data.append('file-'+i, file);
    });
    data.append('url',url);
    console.log(url);
    
   $.ajax({
  type: 'POST',
  url: "add.php",
  data: data,
  cache: false,
  contentType: false,
  processData: false,
  beforeSend: function(){
            },
  success: function(html){
        name.append(html); 
        
  }
});
});



});