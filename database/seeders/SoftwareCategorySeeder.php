<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SoftwareCategory;

class SoftwareCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SoftwareCategory::create([
            'category' => 'DAW'
        ]);
        SoftwareCategory::create([
            'category' => 'VST Instrument'
        ]);
        SoftwareCategory::create([
            'category' => 'Library'
        ]);
        SoftwareCategory::create([
            'category' => 'FX'
        ]);
    }
}
