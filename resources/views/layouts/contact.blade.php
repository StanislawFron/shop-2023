<x-head name="helpContact" />
<header id="fixedNavbar" class="bg-white container-fluid np">
    <x-navbar />
</header>
<main class="pt-5">
    <section class="pt-5 p-md-0 pt-md-5 pb-5 pb-md-5">
        <div class="d-flex justify-content-center">
            <form class="col-6">
                <div class="row">
                    <div class="text-center">
                        <h2>Skontaktuj się z nami!</h2>
                    </div>
                    <div class="pt-3 col-12 col-lg-6"><input class="p-3 w-100" type="text" placeholder="Imię" /></div>
                    <div class="pt-3 col-12 col-lg-6"><input class="p-3 w-100" type="text"
                            placeholder="Adres e-mail" /></div>
                    <div class="pt-3">
                        <textarea placeholder="Treść wiadomości" class="w-100 p-2"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="pt-5 p-md-0 pt-md-5">
        <div class="d-flex justify-content-center">
            <div class="row d-flex justify-content-center col-6">
                <div class="text-center">
                    <h2>FAQ</h2>
                </div>
                <div class="row np d-flex justify-content-center pt-3">
                    <div class="faqElement row">
                        <div>Question1 <button class="showAnswer">+</button></div>
                        <div class="answer d-none">Question 1 answer Question 1 answer Question 1 answer</div>
                    </div>
                    <div class="faqElement row">
                        <div>Question2 <button class="showAnswer">+</button></div>
                        <div class="answer d-none">Question 2 answer Question 2 answer Question 2 answer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<x-navbar-mobile />
<x-footer />
