<x-head name="home" />
<header id="fixedNavbar" class="bg-white container-fluid np">
    <x-navbar />
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
                    <section id="thumbnail-carousel" class="splide pt-2"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
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
 
                <div id="category__divHome" class="col-12 col-md-3 np d-flex justify-content-center">
                    <table class="w-75 justify-content-center d-md-flex d-none border border-warning" id="categoryTable">
                        <tbody class="col-12 p-3">
                            <tr class="d-flex justify-content-center">
                                <td class="pb-2 pt-2 fw-bold">KATEGORIE</td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Laptopy">Laptopy</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Komputery">Komputery</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Podzespoły komputerowe</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Smartfony</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Smartwatche</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Telewizory</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Głośniki</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Aparaty</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Kamery</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Gaming</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">AGD</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Dom i ogród</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Biuro i firma</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Sport i turystyka</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Zabawki i dziecko</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Uroda i zdrowie</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Kultura i rozrywka</a></td>
                            </tr>
                            <tr>
                                <td class="menuCategory"><a href="/Podzespoły komputerowe">Supermarket</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
<x-navbar-mobile />
<section class="row d-flex flex-md-row-reverse np mobileContentCategoryHide">
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
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)
                </div>
            </div>
        </div>
        <div class="col-12 row p-md-0 p-5 d-flex np">
            <div class="product-img col-12 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)
                </div>
            </div>
        </div>
        <div class="col-12 row p-md-0 p-5 d-flex np">
            <div class="product-img col-12 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)
                </div>
            </div>
        </div>
        <div class="col-12 row p-md-0 p-5 d-flex np">
            <div class="product-img col-12 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)
                </div>
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
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)
                </div>
            </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
            <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 col-md-6 col-lg-9 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)
                </div>
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
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)
                </div>
            </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
            <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 col-md-6 col-lg-9 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6 (90-GA3KZZ-00UANF)
                </div>
            </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
            <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 col-md-6 col-lg-9 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6
                    (90-GA3KZZ-00UANF)</div>
            </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
            <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 col-md-6 col-lg-9 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6
                    (90-GA3KZZ-00UANF)</div>
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
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6
                    (90-GA3KZZ-00UANF)</div>
            </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
            <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 col-md-6 col-lg-9 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6
                    (90-GA3KZZ-00UANF)</div>
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
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6
                    (90-GA3KZZ-00UANF)</div>
            </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
            <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 col-md-6 col-lg-9 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6
                    (90-GA3KZZ-00UANF)</div>
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
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6
                    (90-GA3KZZ-00UANF)</div>
            </div>
        </div>
        <div class="col-12 row p-5 p-md-1 d-flex m-0">
            <div class="product-img col-12 col-md-6 col-lg-3 p-2 d-flex justify-content-center">
                <div class="product-image col-12"></div>
            </div>
            <div class="product-description col-12 col-md-6 col-lg-9 p-2">
                <div class="old-price">941,99 zł</div>
                <div class="price">749 zł</div>
                <div class="title">Karta graficzna ASRock Intel Arc A380 Challenger ITX OC 6GB GDDR6
                    (90-GA3KZZ-00UANF)</div>
            </div>
        </div>
    </div>


</section>
<x-footer />
