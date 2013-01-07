$( document ).bind( 'mobileinit', function(){ alert("12");
//	$.mobile.changePage('#dialog', 'pop', true, true);
//  $.mobile.changePage('#dialog', {transition: 'pop', role: 'dialog'}); 
//    $("#dialog").popup('open');
});

$( document ).on( "pageinit", function() {    
    $.post("includes/ajax_requests.php", function(data){
        if(data == "false")
          $.mobile.changePage('index.php');
    });
    
});