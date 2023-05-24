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

       $array_trains = config('db', 'trains');
        foreach($array_trains as $train_item) {
                $new_train_object = new Train();
                $new_train_object->azienda = $train_item['azienda'];
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

