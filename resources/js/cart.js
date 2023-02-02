function slideUp(el) {
    var elem = document.getElementById(el);
    elem.style.height = "175px";
  }
  
function slideDown(el) {
    var elem = document.getElementById(el);
    elem.style.height = "105px";
  }

let actuallyScroll = 0;

let offTop = document.getElementById('movablePriceDiv').offsetTop;
let offHei = document.getElementById('movablePriceDiv').offsetHeight;

document.addEventListener('scroll', function(){
    if(actuallyScroll>window.scrollY){
        slideUp('mobile-price');
    }else{
        slideDown('mobile-price');
    }
    actuallyScroll = window.scrollY;

    if(window.scrollY>(offTop+offHei-50)){
        document.getElementById('movablePriceDiv').style.position = "fixed";
        document.getElementById('movablePriceDiv').style.minHeight = "300px";
    }else{
        document.getElementById('movablePriceDiv').style.position = "inherit";
        document.getElementById('movablePriceDiv').style.minHeight = "0px";
    }
})
