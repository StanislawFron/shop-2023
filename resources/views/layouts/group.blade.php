<x-head name="group" />
<header id="fixedNavbar" class="bg-white container-fluid np">
    <x-navbar />
</header>
<main class="pt-5">
    <section id="promotion" class="pt-5 p-md-0 pt-md-5">
        <div class="container-fluid p-0 pt-0 pb-0 pr-0 p-md-3">
            Kategorie/{{ $categoryName }}/{{ $groupName }}
            <div class="group mobileContentCategoryHide">
                <div class="groupTitle p-5 col-12 d-flex justify-content-center">{{ $groupName }} do 500zł</div>
                <div class="row d-flex justify-content-center np">
                    @foreach ($itemsUnder as $item)
                    <div class="row col-12 col-md-2 d-flex justify-content-center pb-3">
                        <a class="w-100 d-flex justify-content-center" href="{{ $categoryName }}/{{ $item->id }}"><div class="itemImg w-100"></div></a>
                        <div class="col-12 d-flex justify-content-center">{{ $item->title }}</div>
                        <div class="col-12 d-flex justify-content-center">{{ $item->price }} zł</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="group mobileContentCategoryHide">
                <div class="groupTitle p-5 d-flex justify-content-center">{{ $groupName }} od 500zł</div>
                <div class="row d-flex justify-content-center np">
                    @foreach ($itemsAbove as $item)
                    <div class="row col-12 col-md-2 d-flex justify-content-center pb-3">
                        <a class="w-100 d-flex justify-content-center" href="{{ $categoryName }}/{{ $item->id }}"><div class="itemImg w-100"></div></a>
                        <div class="col-12 d-flex justify-content-center">{{ $item->title }}</div>
                        <div class="col-12 d-flex justify-content-center">{{ $item->price }} zł</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
<x-navbar-mobile />
<x-footer />
