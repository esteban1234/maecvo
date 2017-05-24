$(document).ready(function(){
  $(".menu-oculta").click(function(){
    $(".nav").show(100);
    $(".menu-oculta").hide(100);
    $(".menu-abre").show(100);
  });

  $(".menu-abre").click(function(){
    $(".nav").hide(100);
    $(".menu-oculta").show(100);
    $(".menu-abre").hide(100);
  });

  
});