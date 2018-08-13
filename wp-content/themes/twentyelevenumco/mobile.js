/**
 * 
*/

 $(document).ready(function(){
    menu = $('#popout');
    menu.hide();

    $('#toggle').click(function(){
        
        menu.toggle(200);
    });
 });