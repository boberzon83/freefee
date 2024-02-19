<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            ['id_country' => '209',  'name' => "Andalucía", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209',  'name' => "Aragón", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209',  'name' => "Asturias, Principado de", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209',  'name' => "Baleares, Islas", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209',  'name' => "Canarias", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209',  'name' => "Cantabria", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209',  'name' => "Castilla y León", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209',  'name' => "Castilla - La Mancha", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209',  'name' => "Cataluña", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "Comunidad Valenciana", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "Extramadura", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "Galicia", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "Madrid, Comunidad de", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "Murcia, Región de", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "Navarra, Comunidad Foral de", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "País Vasco", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "Rioja, La", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "Ceuta", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id_country' => '209', 'name' => "Melilla", 'created_at' => new DateTime, 'updated_at' => new DateTime]
        ]);
    }
}
