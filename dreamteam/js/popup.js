$(document).ready(function() { // ��� �������� ��������


$(".tableimage").click(function(){    
var src = $(this).css('background-image');
        src = src.replace('url(','').replace(')','').replace(/\"/gi, "");


$("body").append("<div class='popup'>"+ //��������� � ���� ��������� �������� ������������ ����

"<div class='popup_bg'></div>"+ // ����, ������� ����� ������� ����� �����������

"<img src='"+src+"' class='popup_img' />"+ // ���� ����������� ����

"</div>");

$(".popup").fadeIn(800); // �������� ������� �����������

$(".popup_bg").click(function(){    // ������� ����� �� ����������� ���      

$(".popup").fadeOut(800);    // �������� ������� ����������� ����

setTimeout(function() {    // ���������� ������
$(".popup").remove(); // ������� �������� ������������ ����
}, 800);
});
});

});