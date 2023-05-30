<x-head name="account" />
<header id="fixedNavbar" class="bg-white container-fluid np">
    <x-navbar />
</header>
<main class="pt-5">
    <div class="container-fluid pt-5">
        <div class="row np pt-5 col-12">
            <div class="d-flex justify-content-center pb-3">
                <h2>DODAJ PRZEDMIOT</h2>
            </div>
            <div class="row np d-flex justify-content-center">
                <form class="col-12 col-md-6" action="/account/storeItem" method="POST">
                    @csrf
                    <div class="row">
                        <div class="pt-3">
                            <input class="p-2 w-100" name="title" type="text" placeholder="Nazwa" value="{{ old('title') }}">
                            @error('title')
                                <br>
                                <p class="text-danger text-xs np">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <textarea placeholder="Opis" name="description" class="w-100 p-2">{{ old('description') }}</textarea>
                            @error('description')
                            <br>
                            <p class="text-danger text-xs np">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <select name="category" id="category">
                                <option value="category">Kategoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                              </select>
                            @error('category')
                                <br>
                                <p class="text-danger text-xs np">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <select name="group" id="group" class="d-none">
                                <option value="group">Grupa</option>
                                @foreach ($groups as $group)
                                    <option value="{{ $group->name }}">{{ $group->name }}</option>
                                @endforeach
                              </select>
                            @error('group')
                                <br>
                                <p class="text-danger text-xs np">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="price">Cena</label>
                            <input class="numberInput" type="number" name="price" value="{{ old('price') }}"/>
                            @error('price')
                                <br>
                                <p class="text-danger text-xs np">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="number">Ilość</label>
                            <input class="numberInput" type="number" name="amount" value="{{ old('amount') }}"/>
                            @error('amount')
                                <br>
                                <p class="text-danger text-xs np">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="saleValue">Obniżka</label>
                            <input class="numberInput" type="number" name="sale_percentage" value="{{ old('sale_percentage') }}"/>
                            @error('sale_percentage')
                                <br>
                                <p class="text-danger text-xs np">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button id="form-submitBtn" class="btn btn-warning col-12 p-2">DODAJ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</main>
<x-navbar-mobile />
<x-footer />
