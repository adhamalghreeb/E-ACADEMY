<?php

use Illuminate\Database\Seeder;
use App\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'kareem fouad',
            'spec' => 'web development',
            'img' => '1.png',
        ]);
        Trainer::create([
            'name' => 'mostafa fouad',
            'spec' => 'medical development',
            'img' => '2.png',
        ]);
        Trainer::create([
            'name' => 'ahmed fouad',
            'spec' => 'machine development',
            'img' => '3.png',
        ]);
        Trainer::create([
            'name' => 'jac fouad',
            'spec' => 'ai development',
            'img' => '4.png',
        ]);
        Trainer::create([
            'name' => 'mona fouad',
            'spec' => 'front development',
            'img' => '5.png',
        ]);
    }
}
