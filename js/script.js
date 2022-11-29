// JS VAL
const tabAC = {
  "ACII": "projets/projet1.php",
  "OW": "projets/projet2.php",
  "ACIV": "projets/projet3.php"
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
  $('select').formSelect();
});
$(document).ready(function(){
  $('.modal').modal();
  M.updateTextFields();
});
$('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));

// var countClick = 0;
// $(document).click( function() {
//   countClick++;
//   if (countClick>=15) {
//     window.location = "https://snowball.gg";
//   }
// });

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