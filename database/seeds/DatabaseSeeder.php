<?php

use App\Models\Producto;
use App\Models\Tienda;
use App\Models\Venta;
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
        // $this->call(UserSeeder::class);
        factory(Producto::class, 500)->create();
        factory(Tienda::class, 200)->create();
        factory(Venta::class, 1000)->create();
    }
}
