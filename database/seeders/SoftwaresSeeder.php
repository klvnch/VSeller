<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Softwares;

class SoftwaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Softwares::create([
            'category_id' => 1,
            'title' => 'FL Studio 21 Producer Edition'
        ]);
        Softwares::create([
            'category_id' => 1,
            'title' => 'Ableton Live 11 Suite'
        ]);
        Softwares::create([
            'category_id' => 4,
            'title' => 'Fabfilter Total Bundle'
        ]);
        Softwares::create([
            'category_id' => 4,
            'title' => 'A.O.M Factory Total Bundle'
        ]);
        Softwares::create([
            'category_id' => 2,
            'title' => 'Ample Guitar LP III'
        ]);
        Softwares::create([
            'category_id' => 2,
            'title' => 'Xfer Records Serum'
        ]);
        Softwares::create([
            'category_id' => 3,
            'title' => 'Sonuscore ROKI Electric Piano KONTAKT Library'
        ]);
        Softwares::create([
            'category_id' => 3,
            'title' => 'Cinematique Instruments Pandrum KONTAKT Library'
        ]);
    }
}
