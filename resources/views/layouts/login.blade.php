<x-head name="login"/>
    <main class="p-md-0 pt-5">
        <section class="p-md-0 pt-md-5">
            <div class="container col-12 col-lg-6 d-flex justify-content-center">
                <div class="row np col-12 col-lg-6 d-flex justify-content-center">
                    <div class="pt-2 pb-2 pb-md-5 pt-md-5 d-flex np">
                        <div class="col-6 d-flex justify-content-end">
                            <div id="login-brand--img" class="col-12"></div>
                        </div>
                        <div class="d-flex justify-content-start text-center align-items-center">
                            <h1 class="col-6">Brand</h1>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center np">
                        <div id="typeLogin" class="col-6 text-center p-2">Logowanie</div>
                        <div id="typeCreate" class="col-6 text-center p-2">Nowe konto</div>
                    </div>
                    <form class="np pt-4 col-12">
                        <div class="col-12 d-flex pt-3">
                            <input class="p-2 border border-secondary rounded w-100" type="text" name="login"
                                placeholder="login" />
                        </div>
                        <div class="col-12 d-flex pt-3">
                            <input class="p-2 border border-secondary rounded w-100" type="password" name="password"
                                placeholder="hasło" />
                        </div>
                        <div id="form-rememberForgot" class="col-12 d-flex pt-4">
                            <div class="d-flex align-items-center col-5">
                                <input type="checkbox" id="rememberForgotCheckbox" />
                                <div class="p-2 pt-0 pr-0 pb-0">
                                    <label for="rememberForgotCheckbox">Zapamiętaj mnie</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end col-7"><a href="/">Nie pamiętam hasła</a></div>
                        </div>
                        <div id="form-statute" class="col-12 pt-4 d-none">
                            <div>
                                <input type="checkbox" id="statuteCheckbox" />
                            </div>
                            <div class="col-12 p-2 pt-0 pr-0 pb-0">
                                <label for="statuteCheckbox">Akceptuję
                                    <a href="/">regulamin</a>
                                    sklepu Internetowego
                                </label>
                            </div>
                        </div>
                        <div id="form-newsletter" class="col-12 pt-2 d-none">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" id="newsletterCheckbox" />
                            </div>
                            <div class="col-12 p-2 pt-0 pr-0 pb-0">
                                <label for="newsletterCheckbox">Chcę otrzymywać newsletter i korzystać ze specjalnych
                                    promocji.
                                    <a href="/">Więcej</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center pt-4">
                            <button id="form-submitBtn" class="btn btn-warning col-12 p-2">Zaloguj się</button>
                        </div>
                        <div class="col-12 d-flex justify-content-center pt-4">lub kontynuuj z</div>
                        <div class="col-12 row d-flex pt-4 np">
                            <div class="col-12 col-md-6 np d-flex justify-content-md-start justify-content-center mt-2">
                                <button type="button" class="btn btn-outline-secondary col-12 col-md-11">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 14222 14222">
                                        <circle cx="7111" cy="7112" r="7111" fill="#1977f3" />
                                        <path
                                            d="M9879 9168l315-2056H8222V5778c0-562 275-1111 1159-1111h897V2917s-814-139-1592-139c-1624 0-2686 984-2686 2767v1567H4194v2056h1806v4969c362 57 733 86 1111 86s749-30 1111-86V9168z"
                                            fill="#fff" />
                                    </svg>
                                    Facebook
                                </button>
                            </div>

                            <div
                                class="col-12 col-md-6 np d-flex justify-content-md-end justify-content-center mt-4 mt-md-2">
                                <button type="button" class="btn btn-outline-secondary col-12 col-md-11">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 32 32" width="24" height="24">
                                        <defs>
                                            <path id="A"
                                                d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                        </defs>
                                        <clipPath id="B">
                                            <use xlink:href="#A" />
                                        </clipPath>
                                        <g transform="matrix(.727273 0 0 .727273 -.954545 -1.45455)">
                                            <path d="M0 37V11l17 13z" clip-path="url(#B)" fill="#fbbc05" />
                                            <path d="M0 11l17 13 7-6.1L48 14V0H0z" clip-path="url(#B)" fill="#ea4335" />
                                            <path d="M0 37l30-23 7.9 1L48 0v48H0z" clip-path="url(#B)"
                                                fill="#34a853" />
                                            <path d="M48 48L17 24l-4-3 35-10z" clip-path="url(#B)" fill="#4285f4" />
                                        </g>
                                    </svg>
                                    Google
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </section>
        <div id="goBack"><a href="/">
                <div class="pt-5 mt-5"><button class="btn btn-warning">Wróć do strony głównej</div></button>
            </a></div>
    </main>
    <footer class="mb-5 pt-5"></footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
</body>

</html>
