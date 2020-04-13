$(document).ready(function() {

  var btn = document.querySelector('.but1-button');
var buttonWrapper = document.querySelectorAll('.but1-button-wrapper');

btn.addEventListener('click', function(){

  if(btn.classList.contains('but1-animation')) {
    btn.classList.remove('but1-animation');
  } else {
    btn.classList.add('but1-animation');
  }

  for (i = 0; i < buttonWrapper.length; i++ ) {
    if(buttonWrapper[i].classList.contains('but1-animation')){
      buttonWrapper[i].classList.remove('but1-animation');
    } else {
      buttonWrapper[i].classList.add('but1-animation');
    }
  }

});

var btn2 = document.querySelector('.but2-button');
var buttonWrapper2 = document.querySelectorAll('.but2-button-wrapper');

btn2.addEventListener('click', function(){

if(btn2.classList.contains('but2-animation')) {
  btn2.classList.remove('but2-animation');
} else {
  btn2.classList.add('but2-animation');
}

for (i = 0; i < buttonWrapper2.length; i++ ) {
  if(buttonWrapper2[i].classList.contains('but2-animation')){
    buttonWrapper2[i].classList.remove('but2-animation');
  } else {
    buttonWrapper2[i].classList.add('but2-animation');
  }
}

});

$('#select_box').change(function () {
var select=$(this).find(':selected').val();
 $(".hide").hide();
 $('#' + select).show();

	    }).change();

});
