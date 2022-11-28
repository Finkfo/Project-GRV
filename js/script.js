// JS VAL
const tabAC = {
  "ACII": "projets/projet1.html",
  "OW": "projets/projet2.html",
  "ACIV": "projets/projet3.html"
}
window.onload = (event) => {
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    onCycleTo: function (data) {
      for (const key in tabAC) {
        if (key == data.id) $("#btn-carou").attr("href", tabAC[key]);
      }
    }
  });
};

$("#swipe-left").on('click', function () {
  $('.carousel').carousel('prev');
})
$("#swipe-right").on('click', function () {
  $('.carousel').carousel('next');
})

// JS GUI
$(document).ready(function () {
  $('.sidenav').sidenav();
  $('.modal').modal();
  $(".dropdown-trigger").dropdown({
    coverTrigger: false
  });
  $('.materialboxed').materialbox()
  $('.parallax').parallax();
  M.updateTextFields();
});


// JS ROBIN  
$(document).ready(function(){
  $('.modal').modal();
  M.updateTextFields();
});
$('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));

$("#contact-AC-Reb").on('click',function(){
  $("#form").show();
  $('#form').removeClass('ow2toggle');
  $('#form').removeClass('ac2toggle');
  $('#form').addClass('gtatoggle');
  $("#contact-Overwatch-2").removeClass('selected-custom');
  $("#contact-AC-2").removeClass('selected-custom');
  $(this).addClass('selected-custom');
});
$("#empty").on('click',function(){
  $("#form").hide();
  $('#form').removeClass('gtatoggle');
});
$("#contact-Overwatch-2").on('click',function(){
  $("#form").show();
  $('#form').removeClass('ac2toggle');
  $('#form').removeClass('gtatoggle');
  $('#form').addClass('ow2toggle');
  $("#contact-AC-Reb").removeClass('selected-custom');
  $("#contact-AC-2").removeClass('selected-custom');
  $(this).addClass('selected-custom');
});
$("#empty").on('click',function(){
  $("#form").hide();
  $('#form').removeClass('gtatoggle');
});
$("#contact-AC-2").on('click',function(){
  $("#form").show();
  $('#form').removeClass('gtatoggle');
  $('#form').removeClass('ow2toggle');
  $('#form').addClass('ac2toggle');
  $("#contact-Overwatch-2").removeClass('selected-custom');
  $("#contact-AC-Reb").removeClass('selected-custom');
  $(this).addClass('selected-custom');
});
$("#empty").on('click',function(){
  $("#form").hide();
  $('#form').removeClass('ac2toggle');
});
var countClick = 0;
$(document).click( function() {
  countClick++;
  if (countClick>=15) {
    window.location = "https://snowball.gg";
  }
});

$("#send-button").on('click',function(){
  $('#video').addClass('play');
  $('#estegg').addClass('esteggtoggle');
  $('#carou').hide();
  $('#video').get(0).play();
  $('#video').attr('loop','loop');
  let el = document.getElementById("video");
  if (el.requestFullscreen) {
    el.requestFullscreen();
  } else if (el.webkitRequestFullscreen) { 
    el.webkitRequestFullscreen();
  } else if (el.msRequestFullscreen) {
    el.msRequestFullscreen();
  }
});