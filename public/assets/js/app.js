$(function() {
    
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
  
});
$(document).ready(function(){
  $('.grid').masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    // use element for option
    columnWidth: '.grid-sizer',
    percentPosition: true
  })
  //var str = $('.caption p').text();
  $('.caption p.descripcion').each(function(){
    //alert($(this).text());
    var aux = $(this).text();
    aux = aux.substr(0,80);
    $(this).html(aux+" <a href='#'><b>Ver más</b>...</a>");
  });
});
