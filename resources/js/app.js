require('./bootstrap');

let actuallyScroll = 0;

document.addEventListener( 'DOMContentLoaded', function () {
    hideNavbarOnScrollDown();
});

function slideUp(el) {
    var elem = document.getElementById(el);
    elem.style.height = "70px";
  }
  
function slideDown(el) {
    var elem = document.getElementById(el);
    elem.style.height = "0px";
  }

function hideNavbarOnScrollDown() {
    document.addEventListener('scroll', () => {
        if(actuallyScroll>window.scrollY){
            slideUp('mobile-menu');
        }else{
            slideDown('mobile-menu');
        }
        actuallyScroll = window.scrollY;
    });
  }
