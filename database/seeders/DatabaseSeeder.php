<?php

namespace Database\Seeders;

use App\Models\kategori;
use App\Models\produk;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
   
        $kategori=kategori::create([
            'name'=>'makanan'
        ]);
        $kategori=kategori::create([
            'name'=>'minuman'
        ]);
        $kategori=kategori::create([
            'name'=>'aksesoris'
        ]);

        produk::create([
            'kategori_id'=>1,
            'name'=>'waaifuu 1',
            'harga'=>980000,
            'foto'=>'images/love.jpg'
        ]);
        produk::create([
            'kategori_id'=>1,
            'name'=>'waaifuu 2',
            'harga'=>20000,
            'foto'=>'images/ngeteh.jpg'
        ]);
        produk::create([
            'kategori_id'=>2,
            'name'=>'waaifuu 3',
            'harga'=>30000,
            'foto'=>'images/shikimori.png'
        ]);
    }
}
