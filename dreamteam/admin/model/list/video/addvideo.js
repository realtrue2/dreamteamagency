/* Article FructCode.com */
$( document ).ready(function() {
var name;
    $("#btn").click(
		function(){
            name = $(".videolist");
           
			sendAjaxForm('result_form', 'add_form', 'add_video.php');
			return false; 
		}
	);
    function sendAjaxForm(result_form, add_form, url) {
    ur = $("#logh").text();
    console.log(ur);
    urll = url + "?name=" + ur;
     console.log(urll);
    $.ajax({
        url:     urll, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+add_form).serialize(),  // Сеарилизуем объект
        success: function(html){
           
        name.append(html); 
        
  }
    });
}
});
 
