document.addEventListener( 'DOMContentLoaded', function () {

    var main = new Splide( '#main-carousel', {
      type   : 'loop',
      rewind: true,
      pagination: false,
      arrows    : false,
      autoplay: true,
      speed: 1500,
    } );
  
    var thumbnails = new Splide( '#thumbnail-carousel', {
      fixedWidth  : 270,
      fixedHeight : 150,
      gap         : 10,
      rewind      : true,
      pagination  : false,
      isNavigation: true,
      arrows    : false,
      breakpoints : {
        600: {
          fixedWidth : 60,
          fixedHeight: 44,
        },
      },
    } );
  
    main.sync( thumbnails );
    main.mount();
    thumbnails.mount();

    options();
    elementMovementSetup("mainPriceDiv","additional-price", "priceDiv", 10, "block");
    elementMovementSetup("product-menu","additional-product-menu", "productDiv", 800, "flex");
    goTop();
    numberInputRestrictions();
  } );


  //options border change
  const options = () => {
      let choosedElement = getChoosedElement();
      const startValue = document.getElementById("mainPrice").innerHTML;
    
      document.querySelectorAll('.option-div').forEach(function (a) {
        
        a.addEventListener('mouseover', function () {
          optionChange(this.children[0], startValue);
        })

        a.addEventListener('mouseout', function () {
          optionChange(choosedElement, startValue);
        })
      })
    
  };

  function getChoosedElement(){
    let choosedElement;
    document.querySelectorAll('.option').forEach(function (a) {
      if(a.classList.contains("border-warning")){
        choosedElement = a;
      }
    });
    return choosedElement;
  }

  function optionChange(element , startValue){
    clearBorderColor()
    let value =  parseInt(startValue) + parseInt(element.textContent);
    document.getElementById("mainPrice").innerHTML = value + "zł";
    element.classList.add("border-warning");
  }

  function clearBorderColor(){
    document.querySelectorAll('.option').forEach(function (a) {
      a.classList.remove("border-warning");
    });
  }

const elementMovementSetup = (mainElement, movableElement, elementWidth, height, display) => {
  document.addEventListener('scroll', function() {
    movementInstall(mainElement, movableElement, elementWidth, height, display);
  });

  window.addEventListener('resize', function() {
    movementInstall(mainElement, movableElement, elementWidth, height, display);
  });
}

const movementInstall = (mainElement, movableElement, elementWidth, height, display) => {
  if(window.scrollY > document.getElementById(mainElement).clientHeight + height){
    document.getElementById(movableElement).style.display = display;
  }else{
    document.getElementById(movableElement).style.display = "none";
  }
  document.getElementById(movableElement).style.width = document.getElementById(elementWidth).clientWidth + "px";
}

const goTop = () => {
  document.addEventListener('scroll', function() {
    if(window.scrollY > document.getElementById("goTopDiv").clientHeight + 500){
      document.getElementById("goTopDiv").style.display = "flex";
      document.getElementById("goTopDiv").style.visibility = "visible";
    }else{
      document.getElementById("goTopDiv").style.display = "none";
    }
  });
}

//number input restrictions
const numberInputRestrictions = () => {
   document.querySelectorAll('.numberInput').forEach(function (a) {
      a.addEventListener('change', function () {

        this.value = Math.floor(this.value);

        if(this.value<1){
          this.value = 1;
        }
        if(this.value>99){
          this.value = 99;
        }
      });
    });
  }
      
