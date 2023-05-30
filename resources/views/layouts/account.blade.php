<x-head name="" />
<header id="fixedNavbar" class="bg-white container-fluid np">
    <x-navbar />
</header>
<main class="pt-5">
    <div class="container-fluid pt-5">
        <div class="row np pt-5 col-12">
            <div class="d-flex justify-content-center pb-3">
                <h2>TWOJE KONTO</h2>
            </div>
            <div class="row np d-flex text-center">
                <h3>NAZWA: {{ auth()->user()->name }}</h3>
                <h3><a href="/account/items">Twoja sprzedaż</a></h3>
                <h3><a href="/logout">Wyloguj</a></h3>
            </div>
        </div>
    </div>


</main>
<x-navbar-mobile />
<x-footer />
