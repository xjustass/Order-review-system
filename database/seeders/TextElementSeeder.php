<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('text_elements')->insert([

            [
                'name'=>'Įmonė',
                'text'=>'UAB „Tomita“ ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'name'=>'Įmonės prisistatymas',
                'text'=>'<b> Batteries.lt </b> priklausantis UAB „Tomita“ yra informacinio tipo svetainė skirta informuoti žmones apie visų tipų akumuliatorius, jų naudojimą, priežiūrą ir naujoves. ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name'=>'Adresas',
                'text'=>'Jonavos g. 104, LT-44138, Kaunas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Telefono numeris',
                'text'=>'(8-37) 32 32 02',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name'=>'Mob. tel. numeris',
                'text'=>'+370 618 23 443',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name'=>'El. paštas',
                'text'=>'gamyba@tomita.lt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name'=>'Darbo laikas',
                'text'=>'08:30-17:00',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name'=>'Trumpas footer tekstas',
                'text'=>'Baterijų restauravimas, akumuliatorių gamyba ir atnaujinimas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name'=>'Kainų sąrašo viršutinis tekstas',
                'text'=>'Su visais klientais bendraujame individualiai pagal jų situaciją, todėl kainos irgi priklauso nuo situacijos. Preliminarios paslaugų kainos:',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],


        ]);
    }
}
