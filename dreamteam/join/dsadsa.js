$(document).ready(function(){

     // Устанавливаем обработчик потери фокуса для всех полей ввода текста
     $('input#name, input#city, input#phone, input#mail, input#vk, input#inst').unbind().blur( function(){

	// Для удобства записываем обращения к атрибуту и значению каждого поля в переменные
         var id = $(this).attr('id');
         var val = $(this).val();
	
	// После того, как поле потеряло фокус, перебираем значения id, совпадающие с id данного поля
       switch(id)
       {
	
		 // Проверка поля "Имя"
             case 'name':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/; // используем регулярное выражение

                // Eсли длина имени больше 2 символов, оно не пустое и удовлетворяет рег. выражению,
                // то добавляем этому полю класс .not_error,
                // и ниже в контейнер для ошибок выводим слово " Принято", т.е. валидация для этого поля пройдена успешно
		if(val.length > 2){
			$('ul:eq(0) li:eq(0)').removeClass('error').addClass('not_error');
			
		} else
                {
                   $('ul:eq(0) li:eq(0)').removeClass('not_error').addClass('error');
                   
                } 
		if(rv_name.test(val)){
			$('ul:eq(0) li:eq(1)').removeClass('error').addClass('not_error');
		}else
                {
                   $('ul:eq(0) li:eq(1)').removeClass('not_error').addClass('error');
                   
                } 
		if(val == ''){
			
			 $('ul:eq(0) li:eq(0)').removeClass('not_error').addClass('error');
			 $('ul:eq(0) li:eq(1)').removeClass('not_error').addClass('error');
		}
                 if(val.length <= 2 || val == '' || !rv_name.test(val)){
			
			$(this).css('border-bottom','1px solid red');
		}
		if (val.length > 2 && val != '' && rv_name.test(val)){
			$(this).css('border-bottom','1px solid green');
		}

              // Иначе, мы удаляем класс not-error и заменяем его на класс error, говоря о том что поле содержит ошибку валидации,
              // и ниже в наш контейнер выводим сообщение об ошибке и параметры для верной валидации

            break;
		 case 'city':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/; // используем регулярное выражение

                // Eсли длина имени больше 2 символов, оно не пустое и удовлетворяет рег. выражению,
                // то добавляем этому полю класс .not_error,
                // и ниже в контейнер для ошибок выводим слово " Принято", т.е. валидация для этого поля пройдена успешно
		if(val.length > 2){
			$('ul:eq(1) li:eq(0)').removeClass('error').addClass('not_error');
			
		} else
                {
                   $('ul:eq(1) li:eq(0)').removeClass('not_error').addClass('error');
                   
                } 
		if(rv_name.test(val)){
			$('ul:eq(1) li:eq(1)').removeClass('error').addClass('not_error');
		}else
                {
                   $('ul:eq(1) li:eq(1)').removeClass('not_error').addClass('error');
                   
                } 
		if(val == ''){
			
			 $('ul:eq(1) li:eq(0)').removeClass('not_error').addClass('error');
			 $('ul:eq(1) li:eq(1)').removeClass('not_error').addClass('error');
		}
                 if(val.length < 2 || val == '' || !rv_name.test(val)){
			
			$(this).css('border-bottom','1px solid red');
		}
		if (val.length > 2 && val != '' && rv_name.test(val)){
			$(this).css('border-bottom','1px solid green');
		}

              // Иначе, мы удаляем класс not-error и заменяем его на класс error, говоря о том что поле содержит ошибку валидации,
              // и ниже в наш контейнер выводим сообщение об ошибке и параметры для верной валидации

            break;
		
              case 'phone':
                 var rv_phone = /^( +)?((\+?7|8) ?)?((\(\d{3}\))|(\d{3}))?( )?(\d{3}[\- ]?\d{2}[\- ]?\d{2})( +)?$/;
               if(val != '' && rv_phone.test(val))
               {
                $('ul:eq(2) li:eq(0)').removeClass('error').addClass('not_error');
                $(this).css('border-bottom','1px solid green');
		}
               else
               {
                  $(this).css('border-bottom','1px solid red');
		  $('ul:eq(2) li:eq(0)').removeClass('not_error').addClass('error');
               }
            break;
        	case 'mail':
               var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
               if(val != '' && rv_email.test(val))
               {
                $('ul:eq(3) li:eq(0)').removeClass('error').addClass('not_error');
                $(this).css('border-bottom','1px solid green');
		}
               else
               {
                  $(this).css('border-bottom','1px solid red');
		  $('ul:eq(3) li:eq(0)').removeClass('not_error').addClass('error');
               }
           break;
		case 'vk':
               var rv_vk = /^(https?:\/\/)?(www\.)?vk\.com\/(\w|\d)/;
               if(val != '' && rv_vk.test(val))
               {
                $('ul:eq(4) li:eq(0)').removeClass('error').addClass('not_error');
                $(this).css('border-bottom','1px solid green');
		}
               else
               {
                  $(this).css('border-bottom','1px solid red');
		  $('ul:eq(4) li:eq(0)').removeClass('not_error').addClass('error');
               }
           break;
		case 'inst':
               var rv_inst = /^https?:\/\/(www\.)?instagram\.com\/([A-Za-z0-9_](?:(?:[A-Za-z0-9_]|(?:\.(?!\.))){0,28}(?:[A-Za-z0-9_]))?)/;
               if(val != '' && rv_inst.test(val))
               {
                $('ul:eq(5) li:eq(0)').removeClass('error').addClass('not_error');
                $(this).css('border-bottom','1px solid green');
		}
               else
               {
                  $(this).css('border-bottom','1px solid red');
		  $('ul:eq(5) li:eq(0)').removeClass('not_error').addClass('error');
               }
           break;
		case 'height':
		
		 var rv_number =/^(\d){1,3}$/;
		if(val != '' && rv_number.test(val))
               {
			
		}else {
			$(this).css('border-bottom','1px solid red');
			$(this).next('.input-requirements').removeClass('not_error').addClass('error');
		}
		break:
        
	}

});
});