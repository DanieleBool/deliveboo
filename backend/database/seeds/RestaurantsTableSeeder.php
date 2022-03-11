<?php

use Illuminate\Database\Seeder;
use App\Restaurant;
use Illuminate\Support\Str;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [

            [
                'name' => 'La Piadineria',
                'description' => 'Ordina la tua piadina preferita a casa tua da La Piadineria   grazie alla consegna a domicilio di Deliverboo.',
                'address' => 'Piazza dei Cinquecento 1, Stazione Termini',
            ],

            [
                'name' => 'Panificio Roscioli Pietro',
                'description' => 'Ordina Pizza e Mortadella direttamente da casa o in ufficio oppure le nostre specialità per la cucina.',
                'address' => 'Via Buonarroti 44',
            ],
            [
                'name' => 'McDonald\'s',
                'description' => 'Leggi maggiori informazioni sugli allergeni presenti nei prodotti offerti da questo ristorante.',
                'address' => 'Via Marsala 25',
            ],
            [
                'name' => 'Namastè - Roma',
                'description' => 'Ordina il tuo piatto preferito a casa tua da Namastè grazie alla consegna a domicilio di Deliverboo Roma.',
                'address' => 'Via Raimondo Montecuccoli 8',
            ],
            [
                'name' => 'Maat',
                'description' => 'Per un brunch o un hamburger in famiglia, scegli Maat e lasciati trasportare a New York!',
                'address' => 'Via S. Calvino 20',
            ],

            [
                'name' => 'KFC',
                'description' => 'L\'irresistibile pollo fritto del Colonnello finalmente anche a casa tua, o dove vuoi tu!',
                'address' => 'Via Gioberti, 29',
            ],
            [
                'name' => 'Viva Nachos',
                'description' => 'Hai delle domande? Chiedi a Viva Nachos informazioni più dettagliate sui metodi di cottura e sugli ingredienti utilizzati.',
                'address' => '20 Via Raffaele Cadorna',
            ],
            [
                'name' => 'Antico Vinaio',
                'description' => 'Hai delle domande? Chiedi a All\'Antico Vinaio informazioni più dettagliate sui metodi di cottura e sugli ingredienti utilizzati.',
                'address' => 'Piazza della Maddalena',
            ],
            [
                'name' => 'The Cheesecake House of Maat Bistrot',
                'description' => 'Ordina il tuo dolce preferito a casa tua da The Cheesecake House of Maat Bistrot grazie alla consegna a domicilio di Deliverboo.',
                'address' => '20 Via Sestio Calvino',
            ],
            [
                'name' => 'Insalatona',
                'description' => 'Insalata, Wrap, Bowl, scegli tu. Grazie alla partnership con Deliveroo puoi gustare il tuo piatto sano, gustoso ed italiano con un super sconto del 50%. Attenzione: se vuoi un\'insalatina-ina-ina, cambia ristorante. Benvenuta/o da Insalatona!',
                'address' => '4 Via Oreste Salomone',
            ],
            [
                'name' => 'Quadrotto',
                'description' => 'Ordina il tuo piatto preferito a casa tua Quadrotto Roma grazie alla consegna a domicilio di Deliveroo',
                'address' => 'Via della lega lombarda 31',
            ],
            [
                'name' => 'Breakfast Rome',
                'description' => 'Ordina la tua colazione preferita a casa tua da Breakfast Rome grazie alla consegna a domicilio di Deliverboo.',
                'address' => 'Via Federico Ozanam 86',
            ],
            [
                'name' => 'Gelateria Giolitti',
                'description' => 'Ordina il tuo gelato preferito a casa tua da Gelateria Giolitti grazie alla consegna a domicilio di Deliverboo Roma',
                'address' => 'Via degli Uffici del Vicario',
            ],
            [
                'name' => 'Il Fornaretto di Trastevere',
                'description' => 'Ordina il tuo gelato preferito a casa tua da Gelateria Giolitti grazie alla consegna a domicilio di Deliverboo Roma',
                'address' => 'Viale Trastevere 128',
            ],
            [
                'name' => 'La Casa de Los Burritos',
                'description' => 'La Casa De Los Burritos ti offre il miglior Burrito a casa tua in qualsiasi momento. In 20 minuti siamo da te, siamo aperti ogni giorno ed al Lockdown ci siamo abituati, ordina subito e ricevi il Burrito dal Professor al 50% di sconto grazie alla partnership con Deliveroo.',
                'address' => 'Via Raffaele Rossi 23',
            ],
            [
                'name' => 'LM Frutta',
                'description' => 'Ordina il tuo dolce preferito a casa tua da The Cheesecake House of Maat Bistrot grazie alla consegna a domicilio di Deliverboo.',
                'address' => 'Via degli Avignonesi 23',
            ],


        ];

        // questa variabile lista tutti i caratteri unwanted cioé non voluti in questo caso nello slug e nella mail

        $unwanted_array = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
        'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
        'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
        'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', '\'' => '');

        // ***

        foreach($restaurants as $key => $restaurant){

            $newRestaurant = new Restaurant;
            $newRestaurant->user_id = $key + 1;
            $newRestaurant->name = $restaurant['name'];

            // questo metodo serve a sostituire tutti i caratteri non desidarati
            $newRestaurant->slug = Str::of(strtr( $restaurant['name'].' '.$restaurant['address'], $unwanted_array ))->slug('-');
            // ***
            $newRestaurant->description = $restaurant['description'];
            // questo metodo serve a sostituire tutti i caratteri non desidarati e in piú converte to the lower case ed elimina gli spazi.
            $newRestaurant->email = str_replace(' ','',strtolower(strtr( $restaurant['name'].'@gmail.com', $unwanted_array)));
            // ***
            $newRestaurant->address = $restaurant['address'];
            $newRestaurant->city = 'Roma';
            $newRestaurant->country = 'Italia';
            $newRestaurant->post_code = '00100';
            $newRestaurant->phone = '06'.rand(1000,9999).rand(1000,9999);
            $newRestaurant->save();
            
        }

    }


}




