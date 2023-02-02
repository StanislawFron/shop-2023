<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/category.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</head>
<body class="bg-light">
    <header id="fixedNavbar" class="bg-white container-fluid np">
        <x-navbar/>
    </header>
    <main class="pt-5">
        <section id="promotion" class="pt-5 p-md-0 pt-md-5">
            <div class="container-fluid p-0 pt-0 pb-0 pr-0 p-md-3">
                Kategorie/Podzespoły komputerowe
                <div class="row d-flex justify-content-around np">
                    <div id="slider__div" class="col-12 np">
                        <section class="splide h-100" aria-label="Splide Basic HTML Example" id="main-carousel">
                            <div class="splide__track h-100">
                                  <ul class="splide__list">
                                      <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100" href="xd">Slide 01</a></li>
                                      <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100" href="xd">Slide 02</a></li>
                                      <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100" href="xd">Slide 03</a></li>
                                      <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100" href="xd">Slide 04</a></li>
                                      <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100" href="xd">Slide 05</a></li>
                                      <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100" href="xd">Slide 06</a></li>
                                      <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100" href="xd">Slide 07</a></li>
                                      <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100" href="xd">Slide 08</a></li>
                                  </ul>
                            </div>
                          </section>
                        <section id="thumbnail-carousel" class="splide pt-2" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                            
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-navbar-mobile/>
    <section class="main-category">
        <div class="container-fluid p-0 pt-0 pb-0 pr-0 p-md-3">
            <div class="row np">
                <div class="col-12 col-md-3 p-2"><div class="category d-flex justify-content-center align-items-center">DODATKI</div></div>
                <div class="col-12 col-md-3 p-2"><div class="category d-flex justify-content-center align-items-center">DODATKI</div></div>
                <div class="col-12 col-md-3 p-2"><div class="category d-flex justify-content-center align-items-center">DODATKI</div></div>
                <div class="col-12 col-md-3 p-2"><div class="category d-flex justify-content-center align-items-center">DODATKI</div></div>
                <div class="col-12 col-md-3 p-2"><div class="category d-flex justify-content-center align-items-center">DODATKI</div></div>
                <div class="col-12 col-md-3 p-2"><div class="category d-flex justify-content-center align-items-center">DODATKI</div></div>
                <div class="col-12 col-md-3 p-2"><div class="category d-flex justify-content-center align-items-center">DODATKI</div></div>
                <div class="col-12 col-md-3 p-2"><div class="category d-flex justify-content-center align-items-center">DODATKI</div></div>
            </div>
        </div>
    </section>
    <section class="newspaper">
        <div class="container-fluid p-0 pt-0 pb-0 pr-0 p-md-3">
            <div class="row np">
                <div class="article col-12 col-md-6 d-flex justify-content-center align-items-center">AKTUALNOŚCI</div>
                <div class="article col-12 col-md-6 d-flex justify-content-center align-items-center">ARTYKUŁY</div>
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