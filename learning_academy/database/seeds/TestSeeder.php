<?php

use App\Test;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 3; $i++) {
            Test::create([
                'id' => $i,
                'name' => 'Ahmed Mohmed',
                'spec' => 'MR',
                'img' => $i.'.png',
                'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            ]);
        }
    }
}
