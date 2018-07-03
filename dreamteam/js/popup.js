$(document).ready(function() { // Ждём загрузки страницы


$(".tableimage").click(function(){    
var src = $(this).css('background-image');
        src = src.replace('url(','').replace(')','').replace(/\"/gi, "");


$("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна

"<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным

"<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото

"</div>");

$(".popup").fadeIn(800); // Медленно выводим изображение

$(".popup_bg").click(function(){    // Событие клика на затемненный фон      

$(".popup").fadeOut(800);    // Медленно убираем всплывающее окно

setTimeout(function() {    // Выставляем таймер
$(".popup").remove(); // Удаляем разметку всплывающего окна
}, 800);
});
});

});