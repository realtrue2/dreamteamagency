$(document).ready(function(){
	$("#modelform").trigger('reset');
    
     $('input#name, input#city, input#phone, input#mail, input#vk, input#inst, input#height, input#age, input#shoe, input#hair, input#eyes, input#waist, input#chest, input#hips').unbind().blur( function(){

	
         var id = $(this).attr('id');
         var val = $(this).val();
	
	
       switch(id)
       {
	
		
             case 'name':
                var rv_name =  /^[a-zA-Zа-яА-Я]+$/; 
               
		if(val.length > 2){
			$('ul:eq(0) li:eq(0)').css('color','green');
			
		} else
                {
                   $('ul:eq(0) li:eq(0)').css('color','red');
                   
                } 
		if(rv_name.test(val)){
			$('ul:eq(0) li:eq(1)').css('color','green');
		}else
                {
                   $('ul:eq(0) li:eq(1)').css('color','red');
                   
                } 
		if(val == ''){
			
			 $('ul:eq(0) li:eq(0)').css('color','red');
			 $('ul:eq(0) li:eq(1)').css('color','red');
		}
                 if(val.length <= 2 || val == '' || !rv_name.test(val)){
			
			$(this).css('border-bottom','1px solid red');
		}
		if (val.length > 2 && val != '' && rv_name.test(val)){
			$(this).css('border-bottom','1px solid green');
		}

              

            break;
		 case 'city':
                var rv_name =  /^[a-zA-Zа-яА-Я]+$/;
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
               var rv_vk = /^(https?:\/\/)?(www\.)?(vk\.com\/|Vk\.com\/)(\w|\d)/;
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
               var rv_inst = /^(https?:\/\/)?(www\.)?(instagram\.com\/|Instagram\.com\/)([A-Za-z0-9_](?:(?:[A-Za-z0-9_]|(?:\.(?!\.))){0,28}(?:[A-Za-z0-9_]))?)/;
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
	 	case 'age':
		case 'height':
		case 'shoe':
		case 'waist':
		case 'chest':
		case 'hips':
		var rv_number = /^(\d){1,3}$/;
               if(val != '' && rv_number.test(val))
               {
                $(this).next('.input-requirements').removeClass('error').addClass('not_error');
                $(this).css('border-bottom','1px solid green');
		}
               else
               {
                  $(this).css('border-bottom','1px solid red');
		  $(this).next('.input-requirements').removeClass('not_error').addClass('error');
               }
		break;
		case 'hair':
		case 'eyes':
		var rv_lett = /^[a-zA-Zа-яА-Я]{1,13}$/;
               if(val != '' && rv_lett.test(val))
               {
                $(this).next('.input-requirements').removeClass('error').addClass('not_error');
                $(this).css('border-bottom','1px solid green');
		}
               else
               {
                  $(this).css('border-bottom','1px solid red');
		  $(this).next('.input-requirements').removeClass('not_error').addClass('error');
               }
		break;
        
	}

});
	

    	
  	


});
	function validForm(f) {
        	var flag = true;
console.log(f);
	var images = $('input[type=file]');
	images.each(function() {

      		if (this.value == "") {
			console.log(this.value);
        		flag = false;
			$('.text ').removeClass('not_error').addClass('error');
			$('.text .input-requirements').removeClass('not_error').addClass('error');
      		}else{
            this.type = 'text';
            console.log(this);  
            var df  = $(this).next('.tableimage');
            var df = df.find('.photol').data('id');
            this.value = df;
            console.log(this.value);  
		if(flag = true){
			$('.text ').removeClass('error');
			$('.text .input-requirements').removeClass('error').addClass('not_error');
			
		}	
		console.log(this.value);	
		}
    		});
		console.log(flag);
  	 if($('.not_error').length > 3 && flag == true){
		console.log('ss');
		f.submit(); // Отправляем на сервер
	}else {
	 $('html, body').animate({
    		scrollTop: 0
  	}, 1);
	flag = true;

		}
 }