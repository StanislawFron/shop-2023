<?php

namespace Database\Seeders;

use App\Models\Items;
use App\Models\Groups;
use App\Models\Categories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Items::factory(100)->create();

        // ========== KATEGORIE =========
        Categories::create([
            'id' => NULL,
            'name' => 'Laptopy'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Komputery'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Podzespoły komputerowe'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Smartfony'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Smartwatche'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Telewizory'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Głośniki'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Aparaty'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Kamery'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Gaming'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'AGD'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Dom i ogród'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Biuro i firma'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Sport i turystyka'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Zabawki i dziecko'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Uroda i zdrowie'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Kultura i rozrywka'
        ]);
        Categories::create([
            'id' => NULL,
            'name' => 'Supermarket'
        ]);

        // ========== GRUPY =========
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Laptopy',
            'name' => 'Laptopy'
        ]);

        Groups::create([
            'id' => NULL,
            'parent_name' => 'Komputery',
            'name' => 'Komputery'
        ]);

        Groups::create([
            'id' => NULL,
            'parent_name' => 'Podzespoły komputerowe',
            'name' => 'Podzespoły komputerowe'
        ]);

        Groups::create([
            'id' => NULL,
            'parent_name' => 'Smartfony',
            'name' => 'Smartfony'
        ]);

        Groups::create([
            'id' => NULL,
            'parent_name' => 'Smartwatche',
            'name' => 'Smartwatche'
        ]);

        Groups::create([
            'id' => NULL,
            'parent_name' => 'Telewizory',
            'name' => 'Telewizory'
        ]);

        Groups::create([
            'id' => NULL,
            'parent_name' => 'Głośniki',
            'name' => 'Głośniki'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Aparaty',
            'name' => 'Aparaty'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Kamery',
            'name' => 'Kamery'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Gaming',
            'name' => 'Gaming'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'AGD',
            'name' => 'AGD'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Dom i ogród',
            'name' => 'Dom i ogród'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Biuro i firma',
            'name' => 'Biuro i firma'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' =>'Sport i turystyka',
            'name' => 'Sport i turystyka'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Zabawki i dziecko' ,
            'name' => 'Zabawki i dziecko'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Uroda i zdrowie',       
            'name' => 'Uroda i zdrowie'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Kultura' ,
            'name' => 'Kultura i rozrywka'
        ]);
        Groups::create([
            'id' => NULL,
            'parent_name' => 'Supermarket',
            'name' => 'Supermarket'
        ]);

    }
}