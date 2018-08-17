/**
 * 
*/

$(document).ready(function(){
  menu = $('#popout');
  toggle = $('#toggle');
  menu.hide();
  retour = false;

  
    toggle.click(function(){
      menu.show(200);
    });
  
  $(document).mouseup(function (e) {
    if (!menu.is(e.target) && menu.has(e.target).length === 0) 
    {
      menu.hide(500);
    }
  });
});