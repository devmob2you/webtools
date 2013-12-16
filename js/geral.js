$(document).ready(function(){
  
     //PLACAHOLDER
    $('.j_place').each(function() {
        var place = $(this).attr('title');
        var input = $(this);

        input
                .val(place)
                .css('color', '#ccc')
                .focusIn(function() {
            input.css('color', '#000');
            if (input.val() == place) {
                input.val('');
            }
        }).focusOut(function() {
            if (input.val() == '') {
                input.css('color', '#ccc');
                input.val(place);
            }
        });
    });
    //END: PLACAHOLDER
  
  
  
  });
