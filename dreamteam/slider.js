
$( document ).ready(function() {
    var index = 0;

    var leftUIEl = $('.prev');
    var rightUIEl = $('.next');
    var elementsList = $('.carousel-list');
 
    var currentLeftValue = 0;

    var elementsCount = elementsList.find('li').length;
    var minimumOffset = - ((elementsCount - 5) * pixelsOffset);
    var maximumOffset = 0;
   
    var pixelsOffset = $('.slide').width();
var width = pixelsOffset*elementsCount;
var ww = width - pixelsOffset;
ww = -ww;
    elementsList.css('width',width);

   leftUIEl.click(function() {


        if (currentLeftValue != maximumOffset) {
            currentLeftValue = parseInt(currentLeftValue);
            currentLeftValue += pixelsOffset;

            elementsList.animate({ left : currentLeftValue + "px"}, 500);
        }  
        
    });
 
    rightUIEl.click(function() { 
     
    if(currentLeftValue!=ww){

if (currentLeftValue != minimumOffset) {
            currentLeftValue = parseInt(currentLeftValue);
            currentLeftValue -= pixelsOffset;

            elementsList.animate({ left : currentLeftValue + "px"}, 500);
        }
}else {
    currentLeftValue = parseInt(currentLeftValue);
    currentLeftValue -= ww;
    elementsList.animate({ left : currentLeftValue + "px"}, 500);
}

       


          
    });

 
});

  