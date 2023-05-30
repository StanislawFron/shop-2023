<x-head name="sale" />
<header id="fixedNavbar" class="bg-white container-fluid np">
    <x-navbar />
</header>
<main class="pt-5">
    <section id="promotion" class="pt-5 p-md-0 pt-md-5">
        <div class="container-fluid p-0 pt-0 pb-0 pr-0 p-md-3">
            <div class="group">
                <div class="groupTitle p-5 col-12 d-flex justify-content-center">Promocje do 99%</div>
                <div class="row d-flex justify-content-center np">
                    @foreach ($items as $item)
                        @if ($item->sale_percentage > 50 && $item->sale_percentage <= 99)
                        <div class="row col-12 col-md-2 d-flex justify-content-center pb-3">
                            <a class="w-100 d-flex justify-content-center" href="sale/{{ $item->id }}"><div class="itemImg w-100"></div></a>
                            <div class="col-12 d-flex justify-content-center text-center">{{  $item->title  }}</div>
                            <div class="col-6 d-flex justify-content-end text-decoration-line-through np">{{ $item->price }} zł </div><div class="col-6 d-flex justify-content-start pl-1"> - {{ $item->sale_percentage }}%</div>
                            <div class="col-12 d-flex justify-content-center">{{ $item->price/100*(100-($item->sale_percentage)) }}zł</div>
                        </div>
                        @endif
                        @endforeach
                </div>
            </div>
            <div class="group">
                <div class="groupTitle p-5 d-flex justify-content-center">Promocje do 50%</div>
                <div class="row d-flex justify-content-center np">
                    @foreach ($items as $item)
                        @if ($item->sale_percentage > 20 && $item->sale_percentage <= 50)
                        <div class="row col-12 col-md-2 d-flex justify-content-center pb-3">
                            <a class="w-100 d-flex justify-content-center" href="sale/{{  $item->id }}"><div class="itemImg w-100"></div></a>
                            <div class="col-12 d-flex justify-content-center text-center">{{  $item->title  }}</div>
                            <div class="col-6 d-flex justify-content-end text-decoration-line-through np">{{ $item->price }} zł </div><div class="col-6 d-flex justify-content-start pl-1"> - {{ $item->sale_percentage }}%</div>
                            <div class="col-12 d-flex justify-content-center">{{ $item->price/100*(100-($item->sale_percentage)) }}zł</div>
                        </div>
                    @endif
                    @endforeach
                </div>
                <div class="group">
                    <div class="groupTitle p-5 d-flex justify-content-center">Promocje do 20%</div>
                    <div class="row d-flex justify-content-center np">
                        @foreach ($items as $item)
                        @if ($item->sale_percentage > 0 && $item->sale_percentage <= 20)
                        <div class="row col-12 col-md-2 d-flex justify-content-center pb-3">
                            <a class="w-100 d-flex justify-content-center" href="sale/{{  $item->id }}"><div class="itemImg w-100"></div></a>
                            <div class="col-12 d-flex justify-content-center text-center">{{  $item->title  }}</div>
                            <div class="col-6 d-flex justify-content-end text-decoration-line-through np">{{ $item->price }} zł </div><div class="col-6 d-flex justify-content-start pl-1"> - {{ $item->sale_percentage }}%</div>
                            <div class="col-12 d-flex justify-content-center">{{ $item->price/100*(100-($item->sale_percentage)) }}zł</div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
</main>
<x-navbar-mobile />
<x-footer />
