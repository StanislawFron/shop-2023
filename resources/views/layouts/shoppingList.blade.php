<x-head name="shopList" />
<header id="fixedNavbar" class="bg-white container-fluid np">
    <x-navbar />
</header>
<main class="pt-5">
    <section id="promotion" class="pt-5 p-md-0 pt-md-5">
        <div class="container p-0 pt-0 pb-0 pr-0 p-md-3">
            <div class="shopListTitle p-5 col-12 d-flex justify-content-center text-center align-items-center">Moje
                listy zakupowe</div>
            <table class="w-100">
                <tr class="d-none d-md-flex justify-content-between np">
                    <td class="col-4 d-flex align-items-center p-2 pr-0 pt-0 pb-0">
                        <div class="d-flex justify-content-between w-100">
                            <div>Nazwa listy</div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-sort-up" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707V12.5zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                </svg>
                            </div>
                    </td>
                    <td class="col-2 d-flex align-items-center p-2 pr-0 pt-0 pb-0">
                        <div class="d-flex justify-content-between w-100">
                            <div>Ilość produktów</div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-sort-up" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707V12.5zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                </svg>
                            </div>
                    </td>
                    <td class="col d-flex align-items-center p-2 pr-0 pt-0 pb-0">
                        <div class="d-flex justify-content-between w-100">
                            <div>Łączna cena</div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-sort-up" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707V12.5zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                </svg>
                            </div>
                    </td>
                    <td class="col d-flex align-items-center p-2 pr-0 pt-0 pb-0">
                        <div class="d-flex justify-content-between w-100">
                            <div>Data utworzenia</div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-sort-up" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707V12.5zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                </svg>
                            </div>
                    </td>
                    <td class="col-1 d-flex justify-content-center align-items-center">Usuń</td>
                </tr>
                <tr class="row d-flex justify-content-between np m-5 m-md-0" data-url="/1">
                    <td class="listItem col-12 col-md-4 np"><a href="/1"
                            class="w-100 h-100 d-flex align-items-center p-2 pr-0 pt-0 pb-0 justify-content-center justify-content-md-start">Moja
                            lista 1</a></td>
                    <td
                        class="listItem col-12 col-md-2 d-flex align-items-center p-2 pr-0 pt-0 pb-0 justify-content-center justify-content-md-start">
                        1<div class="d-flex d-md-none p-2 pr-0 pt-0 pb-0">produkt</div>
                    </td>
                    <td
                        class="listItem col-12 col-md d-flex align-items-center p-2 pr-0 pt-0 pb-0 justify-content-center justify-content-md-start">
                        6 699 zł</td>
                    <td
                        class="listItem col-12 col-md d-flex align-items-center p-2 pr-0 pt-0 pb-0 justify-content-center justify-content-md-start">
                        25-01-2023</td>
                    <td class="listItem col-12 col-md-1 d-flex justify-content-center align-items-center">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr class="row d-flex justify-content-between np m-5 m-md-0" data-url="/1">
                    <td class="listItem col-12 col-md-4 np"><a href="/1"
                            class="w-100 h-100 d-flex align-items-center p-2 pr-0 pt-0 pb-0 justify-content-center justify-content-md-start">Moja
                            lista 2</a></td>
                    <td
                        class="listItem col-12 col-md-2 d-flex align-items-center p-2 pr-0 pt-0 pb-0 justify-content-center justify-content-md-start">
                        3<div class="d-flex d-md-none p-2 pr-0 pt-0 pb-0">produkty</div>
                    </td>
                    <td
                        class="listItem col-12 col-md d-flex align-items-center p-2 pr-0 pt-0 pb-0 justify-content-center justify-content-md-start">
                        12 541 zł</td>
                    <td
                        class="listItem col-12 col-md d-flex align-items-center p-2 pr-0 pt-0 pb-0 justify-content-center justify-content-md-start">
                        23-01-2023</td>
                    <td class="listItem col-12 col-md-1 d-flex justify-content-center align-items-center">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </section>
</main>
<x-navbar-mobile />
<x-footer />
