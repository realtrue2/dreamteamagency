$(document).ready(function() { // Ждём загрузки страницы


$(".polaroiol").click(function(){  
var img =   $(this).find(".modelimg");
console.log(img);
var src = img.css('background-image');
src = src.replace('url(','').replace(')','').replace(/\"/gi, "");
console.log(src);
//var src = img.css('background-image');
//src = src.replace('url(','').replace(')','').replace(/\"/gi, "");
//console.log(src);

$(".view").css('display','block');
var viewimg = $(".view").find("img");
console.log(viewimg);
viewimg.attr("src",src);
$(".close").click(function(){    // Событие клика на затемненный фон      

$(".view").css('display','none');   // Медленно убираем всплывающее окно

});
});

});