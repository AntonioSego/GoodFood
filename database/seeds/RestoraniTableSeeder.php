<?php

use Illuminate\Database\Seeder;

class RestoraniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restorani = new App\Restorani([
            'naziv' => 'Pizzeria Aurelian',
            'grad' => 'Mostar',
            'adresa' => 'Rondo 11',
            'email' => 'pizzaaurelian@gmail.com',
            'telefon' => '063-444-211'
        ]);
            $restorani->save();
          
            $restorani = new App\Restorani([
                'naziv' => 'Fast Food Grizz',
                'grad' => 'Posušje',
                'adresa' => 'Mate Bobana 21',
                'email' => 'fastfoodgriz@gmail.com',
                'telefon' => '063-789-262'
            ]);
                $restorani->save();
                $restorani = new App\Restorani([
                    'naziv' => 'Cofee Brasilia',
                    'grad' => 'Grude',
                    'adresa' => 'A.B Šimića 3',
                    'email' => 'coffebrasilia@gmail.com',
                    'telefon' => '063-789-135'
                ]);
                    $restorani->save();
                    
    }
}
