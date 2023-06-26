<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =[
            [
                'cod_ciudad'=>'12345',
                'nom_ciudad'=>'Pasto',
                'departamento'=>'31'      
            ],


            [
                'cod_ciudad'=>'12346',
                'nom_ciudad'=>'Popayan',
                'departamento'=>'32'   
            ],

                 [
                'cod_ciudad'=>'12347',
                'nom_ciudad'=>'Cali',
                'departamento'=>'33'   
                 ],


            [
                'cod_ciudad'=>'12348',
                'nom_ciudad'=>'Bogotá',
                'departamento'=>'34'
            ],

                 [
                'cod_ciudad'=>'12349',
                'nom_ciudad'=>'Ipiales',
                'departamento'=>'31'
                 ]


          
                 ];

                 DB::table('ciudades')->insert($datos);
    }
}
