<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_trains = [
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Roma Termini',
                'stazione_di_arrivo' => 'Napoli Centrale',
                'orario_di_partenza'  => '18:00:00' ,
                'orario_di_arrivo' => '20:00:00' ,
                'codice_treno' => '1254',
                'numero_carrozze' => 4 ,
                'in_orario' => 1 ,
                'cancellato' => 0 ,
            ],            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Firenza',
                'stazione_di_arrivo' => 'Afragola',
                'orario_di_partenza'  => '11:00:00' ,
                'orario_di_arrivo' => '16:00:00' ,
                'codice_treno' => '4578',
                'numero_carrozze' => 4 ,
                'in_orario' => 1 ,
                'cancellato' => 0 ,
            ],            [
                'azienda' => 'Regionale',
                'stazione_di_partenza' => 'Napoli',
                'stazione_di_arrivo' => 'Roma Tiburtina',
                'orario_di_partenza'  => '10:00:00' ,
                'orario_di_arrivo' => '14:00:00' ,
                'codice_treno' => '2108',
                'numero_carrozze' => 4 ,
                'in_orario' => 1 ,
                'cancellato' => 0 ,
            ],            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Napoli',
                'orario_di_partenza'  => '13:00:00' ,
                'orario_di_arrivo' => '19:00:00' ,
                'codice_treno' => 'abcdef',
                'numero_carrozze' => 4 ,
                'in_orario' => 1 ,
                'cancellato' => 0 ,
            ]

          ];
        $array_trains = config('trains');
        foreach($array_trains as $train_item) {
                $new_train_object = new Train();
                $new_train_object->azienda = $train_item['azienza'];
                $new_train_object->stazione_di_partenza = $train_item['stazione_di_partenza'];
                $new_train_object->stazione_di_arrivo = $train_item['stazione_di_partenza'];
                $new_train_object->orario_di_partenza = $train_item['orario_di_partenza'];
                $new_train_object->orario_di_arrivo = $train_item['orario_di_arrivo'];
                $new_train_object->codice_treno = $train_item['codice_treno'];
                $new_train_object->numero_carrozze = $train_item['numero_carrozze'];
                $new_train_object->in_orario = $train_item['in_orario'];
                $new_train_object->cancellato = $train_item['cancellato'];
                $new_train_object->save();
        }
    }
}

