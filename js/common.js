/*
ドロワーメニュー
----------------
*/
$('#slideMenuButton').on('click',function(){
  if(!$(this).hasClass('open')){
    $('#slideMenuIn').addClass('open');
    $('#slideMenuOut').addClass('open');
    $('#slideMenuButton').addClass('open');
    $('#slideMenuOverlay').addClass('open');
    $('.l-header').addClass('open');
  } else {
    $('#slideMenuIn').removeClass('open');
    $('#slideMenuOut').removeClass('open');
    $('#slideMenuButton').removeClass('open');
    $('#slideMenuOverlay').removeClass('open');
    $('.l-header').removeClass('open');
  }
})

$('#slideMenuOverlay').on('click',function(){
  if($('#slideMenuButton').hasClass('open')){
    $('#slideMenuIn').removeClass('open');
    $('#slideMenuOut').removeClass('open');
    $('#slideMenuButton').removeClass('open');
    $('#slideMenuOverlay').removeClass('open');
    $('.l-header').removeClass('open');
  }
})
/*
----------------
*/

/*
ページ推移
----------------
*/
$('a:not([href^="#"]):not([target])').on('click', function(){
  $('body').addClass('fo');
});

$(window).on('load', function(){
  $('body').removeClass('fo2');
});

$(function() {
  $('a:not([href^="#"]):not([target])').on('click', function(e){
      e.preventDefault();
      url = $(this).attr('href');
      if (url !== '') {
          $('body').addClass('fadeout');
          setTimeout(function(){
              window.location = url;
          }, 800);
      }
      return false;
  });
});
/*
----------------
*/
