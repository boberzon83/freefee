<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            ['name' => 'Álava','code' => '01', 'id_state' => '16', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Albacete','code' => '02', 'id_state' => '8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Alicante','code' => '03', 'id_state' => '10', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Almería','code' => '04', 'id_state' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Ávila','code' => '05', 'id_state' => '7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Badajoz','code' => '06', 'id_state' => '11', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Baleares','code' => '07', 'id_state' => '4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Barcelona','code' => '08', 'id_state' => '9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Burgos','code' => '09', 'id_state' => '7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cáceres','code' => '10', 'id_state' => '11', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cádiz','code' => '11', 'id_state' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Castellón','code' => '12', 'id_state' => '10', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Ciudad Real','code' => '13', 'id_state' => '8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Córdoba','code' => '14', 'id_state' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Coruña','code' => '15', 'id_state' => '12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cuenca','code' => '16', 'id_state' => '8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Girona','code' => '17', 'id_state' => '9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Granada','code' => '18', 'id_state' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Guadalajara','code' => '19', 'id_state' => '8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Guipuzcoa','code' => '20', 'id_state' => '16', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Huelva','code' => '21', 'id_state' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Huesca','code' => '22', 'id_state' => '2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Jaén','code' => '23', 'id_state' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'León','code' => '24', 'id_state' => '7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Lleida','code' => '25', 'id_state' => '9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'La Rioja','code' => '26', 'id_state' => '17', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Lugo','code' => '27', 'id_state' => '12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Madrid','code' => '28', 'id_state' => '13', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Málaga','code' => '29', 'id_state' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Murcia','code' => '30', 'id_state' => '14', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Navarra','code' => '31', 'id_state' => '15', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Ourense','code' => '32', 'id_state' => '12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Asturias','code' => '33', 'id_state' => '3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Palencia','code' => '34', 'id_state' => '7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Las Palmas','code' => '35', 'id_state' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Pontevedra','code' => '36', 'id_state' => '12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Salamanca','code' => '37', 'id_state' => '7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Santa Cruz de Tenerife','code' => '38', 'id_state' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cantabria','code' => '39', 'id_state' => '6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Segovia','code' => '40', 'id_state' => '7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Sevilla','code' => '41', 'id_state' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Soria','code' => '42', 'id_state' => '7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Tarragona','code' => '43', 'id_state' => '9', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Teruel','code' => '44', 'id_state' => '2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Toledo','code' => '45', 'id_state' => '8', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Valencia','code' => '46', 'id_state' => '10', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Valladolid','code' => '47', 'id_state' => '7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Bizkaia','code' => '48', 'id_state' => '16', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Zamora','code' => '49', 'id_state' => '7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Zaragoza','code' => '50', 'id_state' => '2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Ceuta','code' => '51', 'id_state' => '18', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Melilla','code' => '52', 'id_state' => '19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Eivissa y Formentera','code' => '07_1', 'id_state' => '4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Mallorca','code' => '07_2', 'id_state' => '4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Menorca','code' => '07_3', 'id_state' => '4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'El Hierro','code' => '38_1', 'id_state' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Fuerteventura','code' => '38_2', 'id_state' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Gran Canaria','code' => '38_3', 'id_state' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'La Gomera','code' => '38_4', 'id_state' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'La Palma','code' => '38_5', 'id_state' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Lanzarote','code' => '38_6', 'id_state' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Tenerife','code' => '38_7', 'id_state' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Sin provincia fija','code' => '99', 'id_state' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}
