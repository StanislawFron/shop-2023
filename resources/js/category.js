document.addEventListener( 'DOMContentLoaded', function () {

    var main = new Splide( '#main-carousel', {
        type   : 'loop',
        rewind: true,
      pagination: false,
      arrows    : false,
      autoplay: true,
      speed: 1500,
    } );
  
    main.mount();

    document.querySelector('#slider__div').style.height = window.innerHeight - 280 + 'px';
    window.addEventListener( 'resize', function () {
      document.querySelector('#slider__div').style.height = window.innerHeight - 280 + 'px';
    });
  } );
  
