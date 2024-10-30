<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'titlu' => 'FCSB-Dinamo',
            'descriere' => 'Meciurile dintre FCSB și Dinamo sunt caracterizate de tensiune, pasiune și rivalitate acerbă. Atmosfera din tribune este electrică, iar ambele echipe își doresc cu ardoare victoria în fața rivalei. Aceste confruntări aduc adesea la spectacole deosebite, cu momente de suspans și momente cheie care rămân în memoria fanilor.',
            'imagine' => 'imagine1.com',
            'data_ora'=>'2023-12-15 21:45:00',
            'adresa'=>'National Arena, Bucuresti',
            'pret_bilet' => 70.00 ]);
        DB::table('events')->insert([
            'titlu' => 'Esports',
            'descriere' => 'Aceste evenimente adună jucători talentați, echipe, sponsori și fani din întreaga lume, creând un peisaj vibrant și dinamic în lumea jocurilor video.',
            'imagine' => 'imagine2.com',
            'data_ora'=>'2024-02-14 20:00:00',
            'adresa'=>'BT Arena, Cluj-Napoca',
            'pret_bilet' => 150.00 ]);
        DB::table('events')->insert([
            'titlu' => 'Piesa de teatru Dona Juana',
            'descriere' => 'Piesa a fost adaptată și reinterpretată de mai mulți dramaturgi și regizori de-a lungul timpului. Una dintre cele mai cunoscute versiuni ale acestui personaj este "Dona Juana" de Tirso de Molina, scrisă în secolul al XVII-lea. ',
            'imagine' => 'imagine3.jpg',
            'data_ora'=>'2024-09-19 16:40:00',
            'adresa'=>'Iasi',
            'pret_bilet' => 25.50 ]);
        DB::table('events')->insert([
            'titlu' => 'Concert colinde',
            'descriere' => 'În cadrul acestui eveniment, coruri, soliști vocali sau ansambluri interpretează colinde tradiționale și melodii specifice sărbătorilor de Crăciun. Sala de concert se umple de o atmosferă încărcată de emoție și bucurie, unde luminițele blânde și ornamentale creează un decor cald și primitor.',
            'imagine' => 'imagine4.jpg',
            'data_ora'=>'2023-12-20 17:20:00',
            'adresa'=>'Costinesti',
            'pret_bilet' => 17.25 ]);
    }
}
