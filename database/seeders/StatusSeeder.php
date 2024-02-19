<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'Activo',
            'description' => 'Estado activo',
            'order' => 0,
        ]);

        Status::create([
            'name' => 'Desactivo',
            'description' => 'Estado desactivo',
            'order' => 1,
        ]);
    }
}
