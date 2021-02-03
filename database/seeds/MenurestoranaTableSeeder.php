<?php

use Illuminate\Database\Seeder;

class MenurestoranaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/pizzacap.jpg',
            'restoranID' => '1',
            'jelo' => 'Pizza Capricossa',
            'cijena' => 20
        ]);
        $restoranmeni->save();
        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/pizzamed.jpg',
            'restoranID' => '1',
            'jelo' => 'Pizza Mediterana',
            'cijena' => 22
        ]);
        $restoranmeni->save();
        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/pizzaveg.jpg',
            'restoranID' => '1',
            'jelo' => 'Pizza Vegetale',
            'cijena' => 22
        ]);
        $restoranmeni->save();

        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/burger.jpg',
            'restoranID' => '2',
            'jelo' => 'Hamburger',
            'cijena' => 8
        ]);
        $restoranmeni->save();
        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/hotdog.jpg',
            'restoranID' => '2',
            'jelo' => 'HotDog',
            'cijena' => 5
        ]);
        $restoranmeni->save();
        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/taco.jpg',
            'restoranID' => '2',
            'jelo' => 'Taco',
            'cijena' => 9
        ]);
        $restoranmeni->save();

        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/crnakava.jpg',
            'restoranID' => '3',
            'jelo' => 'Crna kava',
            'cijena' => 2
        ]);
        $restoranmeni->save();
        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/espresso.jpg',
            'restoranID' => '3',
            'jelo' => 'Espresso',
            'cijena' => 1
        ]);
        $restoranmeni->save();
        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/cappuccino.jpg',
            'restoranID' => '3',
            'jelo' => 'Cappuccino',
            'cijena' => 2
        ]);
        $restoranmeni->save(); 
        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/pizzasalami.jpg',
            'restoranID' => '1',
            'jelo' => 'Pizza Salami',
            'cijena' => 2
        ]);
        $restoranmeni->save();
        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/cevapi.jpg',
            'restoranID' => '2',
            'jelo' => 'Čevapi',
            'cijena' => 5
        ]);
        $restoranmeni->save();
        $restoranmeni = new App\Menurestorana([
            'imgpath' => '../images/caj.jpg',
            'restoranID' => '3',
            'jelo' => 'Herbalni čaj',
            'cijena' => 1
        ]);
        $restoranmeni->save();
    }
}
