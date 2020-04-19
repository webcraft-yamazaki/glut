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

window.onload = function() {
  var tl = new TimelineMax({});
  
  tl.staggerFrom(' .hidetext', 1.5, {y:"100%", ease:Power4.easeOut}, 0.4)
  
  tl.play
}


// var
// cursor = $(".cursor"),
// follower = $(".follower"),
// cWidth = 8, 
// fWidth = 40, 
// delay = 10, 
// mouseX = 0, 
// mouseY = 0, 
// posX = 0, 
// posY = 0; 

// //カーソルの遅延アニメーション
// //ほんの少ーーーしだけ遅延させる 0.001秒
// TweenMax.to({}, .001, {
//   repeat: -1,
//   onRepeat: function() {
//     posX += (mouseX - posX) / delay;
//     posY += (mouseY - posY) / delay;
    
//     TweenMax.set(follower, {
//         css: {    
//           left: posX - (fWidth / 2),
//           top: posY - (fWidth / 2)
//         }
//     });
    
//     TweenMax.set(cursor, {
//         css: {    
//           left: mouseX - (cWidth / 2),
//           top: mouseY - (cWidth / 2)
//         }
//     });
//   }
// });

// //マウス座標を取得
// $(document).on("mousemove", function(e) {
//     mouseX = e.pageX;
//     mouseY = e.pageY;
// });

// $("a").on({
//   "mouseenter": function() {
//     cursor.addClass("is-active");
//     follower.addClass("is-active");
//   },
//   "mouseleave": function() {
//     cursor.removeClass("is-active");
//     follower.removeClass("is-active");
//   }
// });

