$(document).ready(function() {
var name ;var n;var id;
 $('.tableimage').on('click', function() {
        
	  name = $(this);
n = $(this).siblings('input');
n.trigger('click');

$(this).siblings('input').change(function() {
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
   $.ajax({
    xhr: function()
    {
        var xhr = new window.XMLHttpRequest();
        //Upload progress
        xhr.upload.addEventListener("progress", function(evt){
        if (evt.lengthComputable) {
            var percentComplete = (evt.loaded / evt.total)*100;
            name.find(".progress_bar").width(percentComplete + '%');
            console.log(percentComplete);
        }
        }, false);
        //Download progress
    xhr.addEventListener("progress", function(evt){
      if (evt.lengthComputable) {
        var percentComplete = (evt.loaded / evt.total)*100;
        name.find(".progress_bar").width(percentComplete + '%');
        console.log(percentComplete);
      }
    }, false);
    return xhr;
  },
  type: 'POST',
  url: "upload.php",
  data: data,
  cache: false,
  contentType: false,
  processData: false,
  beforeSend: function() {
                name.find(".progress_div").css('display','block');
                name.find(".progress_bar").width('0%');
            },
  success: function(html){
        name.html(html); 
        name.find(".progress_div").css('display','none');
  }
});
});
    });


});