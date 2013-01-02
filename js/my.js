$( document ).bind( 'mobileinit', function(){
//	$.mobile.changePage('#dialog', 'pop', true, true);
//  $.mobile.changePage('#dialog', {transition: 'pop', role: 'dialog'}); 
    $("#dialog").popup('open');
});