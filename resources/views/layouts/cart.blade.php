<x-head name="cart" />
<header id="fixedNavbar" class="bg-white container-fluid np">
    <x-navbar />
</header>
<main class="pt-5">
    <div class="container-fluid pt-5">
        <div class="row np pt-5 col-12">
            <div class="d-flex justify-content-center">
                <h2>TWÓJ KOSZYK</h2>
            </div>
            <div class="row np d-flex">
                <div class="products-container col-12 col-md-9 pt-0 pt-md-3">
                    <div class="product col-12 row mt-5 h-100 np">
                        <div class="product-img col-4 h-100"></div>
                        <div class="row col-8 np">
                            <div class="product-description d-flex col-8 col-md-10">Piec gazowy Ariston ALTEAS ONE+ NET
                                24 22 kW (3301771)</div>
                            <div class="product-delete col-4 col-md-2 d-flex justify-content-end pt-1"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="30%" height="30%" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </div>
                            <div class="product-quantity col-3 align-items-center d-flex"><input type="number"
                                    value="1" /></div>
                            <div class="product-price col-9 align-items-center d-flex justify-content-center">
                                <h3>6 699 zł</h3>
                            </div>
                        </div>
                    </div>
                    <div class="product col-12 row mt-5 h-100 np">
                        <div class="product-img col-4 h-100"></div>
                        <div class="row col-8 np">
                            <div class="product-description d-flex col-8 col-md-10">Piec gazowy Ariston ALTEAS ONE+ NET
                                24 22 kW (3301771)</div>
                            <div class="product-delete col-4 col-md-2 d-flex justify-content-end pt-1"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="30%" height="30%" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </div>
                            <div class="product-quantity col-3 align-items-center d-flex"><input type="number"
                                    value="1" /></div>
                            <div class="product-price col-9 align-items-center d-flex justify-content-center">
                                <h3>6 699 zł</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="movablePriceDiv" class="col-3 d-none d-md-flex justify-content-center bg-white">
                    <div class="np row" id="movablePrice">
                        <div class="col-12 p-2 pt-4 d-flex justify-content-center">
                            <h4>13 398 zł</h4>
                        </div>
                        <div class="d-flex align-items-end pb-3"><button
                                class="btn btn-warning col-12 orderText p-2">Wybierz dostawę i płatność</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="mobile-price" class="container-fluid d-md-none position-fixed bg-white">
        <div class="row np">
            <div class="col-6 p-2">
                <h4>Do zapłaty</h4>
            </div>
            <div class="col-6 d-flex justify-content-end p-2">
                <h4>13 398 zł</h4>
            </div>
            <button class="btn btn-warning col-12 orderText">Wybierz dostawę i płatność</button>
        </div>
    </section>


</main>
<x-navbar-mobile />
<x-footer />
