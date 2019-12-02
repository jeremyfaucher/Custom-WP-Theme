/**
* matchHeight
*/
$(document).ready(function(){
  // apply your matchHeight on DOM ready (they will be automatically re-applied on load or resize)
  // get test settings
  var byRow = $('body').hasClass('home');
  // apply matchHeight to each item container's items
  $('main .feature-grid').each(function() {
    $(this).children('.entry-summary').matchHeight({
      byRow: byRow
    });
  });
});