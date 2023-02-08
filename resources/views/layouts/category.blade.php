<x-head name="category" />
<header id="fixedNavbar" class="bg-white container-fluid np">
    <x-navbar />
</header>
<main class="pt-5">
    <section id="promotion" class="pt-5 p-md-0 pt-md-5">
        <div class="container-fluid p-0 pt-0 pb-0 pr-0 p-md-3">
            Kategorie/{{$categoryName}}
            <div class="row d-flex justify-content-around np">
                <div id="slider__div" class="col-12 np">
                    <section class="splide h-100" aria-label="Splide Basic HTML Example" id="main-carousel">
                        <div class="splide__track h-100">
                            <ul class="splide__list">
                                <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100"
                                        href="/">Slide 01</a></li>
                                <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100"
                                        href="/">Slide 02</a></li>
                                <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100"
                                        href="/">Slide 03</a></li>
                                <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100"
                                        href="/">Slide 04</a></li>
                                <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100"
                                        href="/">Slide 05</a></li>
                                <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100"
                                        href="/">Slide 06</a></li>
                                <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100"
                                        href="/">Slide 07</a></li>
                                <li class="splide__slide splide__slide_img d-flex"><a class="w-100 h-100"
                                        href="/">Slide 08</a></li>
                            </ul>
                        </div>
                    </section>
                    <section id="thumbnail-carousel" class="splide pt-2"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">

                    </section>
                </div>
            </div>
        </div>
    </section>
</main>
<x-navbar-mobile />
<section class="main-category mobileContentCategoryHide">
    <div class="container-fluid p-0 pt-0 pb-0 pr-0 p-md-3">
        <div class="row np">
            @foreach ($groups as $groupName)
            <div class="col-12 col-md-3 p-2">
                <div class="category d-flex justify-content-center align-items-center"><a href="/{{$categoryName}}/{{$groupName->name}}">{{$groupName->name}}</a></div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="newspaper mobileContentCategoryHide">
    <div class="container-fluid p-0 pt-0 pb-0 pr-0 p-md-3">
        <div class="row np">
            <div class="article col-12 col-md-6 d-flex justify-content-center align-items-center">AKTUALNOŚCI</div>
            <div class="article col-12 col-md-6 d-flex justify-content-center align-items-center">ARTYKUŁY</div>
        </div>
    </div>
</section>
<x-footer />
