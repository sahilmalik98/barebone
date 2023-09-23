<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FacadesDB::table('records')->insert(
            [['name'=>'like','email'=>'like@gmail.com','Father_name'=>'likemaddy',],
            ['name'=>'amit','email'=>'amit@gmail.com','Father_name'=>'amit',]]
        );

    }
}



