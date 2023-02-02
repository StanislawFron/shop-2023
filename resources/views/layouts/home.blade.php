<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/home.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <style>
        .splide__slide_thumbnail{
            background-image: url('https://picsum.photos/400/150');
            background-position: center;
        }

        .product-image{
          background-image: url('https://picsum.photos/200/250');
          background-repeat: no-repeat;
          height: 250px;
          max-width: 200px;
        }

        .splide__slide_img{
            background-image: url('https://picsum.photos/1450/550');
        }
    </style>
</head>
<body class="bg-light">
    <header id="fixedNavbar" class="bg-white container-fluid np">
      <x-navbar/>
    </header>
      <main class="pt-5">
        <section id="promotion" class="pt-5 p-md-0 pt-md-5">
            <div class="container-fluid p-0 pt-0 pb-0 pr-0 p-md-3">
                <div class="row d-flex justify-content-around np">
                    <div id="slider__div" class="col-12 col-md-9 np">
                        <section class="splide h-100" aria-label="Splide Basic HTML Example" id="main-carousel">
                            <div class="splide__track h-100">
                                  <ul class="splide__list">
                                      <li class="splide__slide splide__slide_img">Slide 01</li>
                                      <li class="splide__slide splide__slide_img">Slide 02</li>
                                      <li class="splide__slide splide__slide_img">Slide 03</li>
                                      <li class="splide__slide splide__slide_img">Slide 03</li>
                                      <li class="splide__slide splide__slide_img">Slide 03</li>
                                      <li class="splide__slide splide__slide_img">Slide 01</li>
                                      <li class="splide__slide splide__slide_img">Slide 02</li>
                                      <li class="splide__slide splide__slide_img">Slide 03</li>
                                  </ul>
                            </div>
                          </section>
                        <section id="thumbnail-carousel" class="splide pt-2" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                            <div class="splide__track d-md-block d-none">
                                <ul class="splide__list">
                                    <li class="splide__slide splide__slide_thumbnail"></li>
                                    <li class="splide__slide splide__slide_thumbnail"></li>
                                    <li class="splide__slide splide__slide_thumbnail"></li>
                                    <li class="splide__slide splide__slide_thumbnail"></li>
                                    <li class="splide__slide splide__slide_thumbnail"></li>
                                    <li class="splide__slide splide__slide_thumbnail"></li>
                                    <li class="splide__slide splide__slide_thumbnail"></li>
                                    <li class="splide__slide splide__slide_thumbnail"></li>
                                </ul>
                            </div>
                        </section>
                    </div>
        
                    <div id="category__div" class="col-12 col-md-3 np">
                          <table class="col-12 justify-content-center d-md-flex d-none">
                                <tbody>
                                    <tr>
                                      <td class="category text-center">Podzespoły komputerowe</td>
                                    </tr>
                                    <tr>
                                      <td class="category text-center">Gaming</td>
                                    </tr>
                                </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-navbar-mobile/>
    <section class="row d-flex flex-md-row-reverse np">
      {{-- OKAZJE DNIA --}}
      <div class="col-12 col-md-3 mt-5 text-center bg-white float-right">
        <h2 class="pt-2">OKAZJE DNIA</h2>
        <div class="col-12 row p-md-0 pt-md-2 p-5 d-flex np">
          <div class="product-img col-12 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-md-0 p-5 d-flex np">
          <div class="product-img col-12 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-md-0 p-5 d-flex np">
          <div class="product-img col-12 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-md-0 p-5 d-flex np">
          <div class="product-img col-12 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
      </div>
      {{-- POLECANE --}}
      <div class="col-12 col-md-9 mt-5 text-center bg-white d-flex flex-column">
        <h2>POLECANE</h2>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <h2>NAJCZĘŚCIEJ KUPOWANE</h2>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
      </div>

      <div class="col-12 text-center bg-white float-right np">
        <h2 class="pt-2 pb-5">SPONSOROWANE</h2>
        <h3 class="pt-2 pb-2">ADIDAS</h3>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <h3 class="pt-2 pb-2">CASTORAMA</h3>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <h3 class="pt-2 pb-2">MERMAID</h3>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
          <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
            <div class="product-image col-12"></div>
          </div>
          <div class="product-description col-12 col-md-6 col-lg-9 p-2">
              <div class="old-price">941,99 zł</div>
              <div class="price">749 zł</div>
              <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)</div>
          </div>
        </div>
      </div>

      
    </section>
    <footer class="mb-5 pt-5"></footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
</body>
</html>