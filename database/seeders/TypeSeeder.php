<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Full-Stack',
            'Back-End',
            'Front-End'
        ];

        foreach ($types as $type){
            $types = new Type();
            $types->name = $type;
            $types->save();
        }
    }
}
