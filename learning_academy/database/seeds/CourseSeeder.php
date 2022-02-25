<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 3; $i++){
            for($j =1 ; $j <= 6 ; $j++){
                Course::create([
                    'cat_id' => $i,
                    'trainer_id' => rand(1,5),
                    'name' => "course num $j cat num $i",
                    'small_desc' =>"INK's description generator tool creates creative and strategic copy that's designed to increase sales.",
                    'desc' => "NK's description generator tool creates unique, creative, and strategic copy that's designed to increase sales. We've developed AI software that takes Content Performance Optimization to a whole new level. Our mission is to help professionals like yourself automate a boost in sales with our description generator online.",
                    'price' => rand(1000,5000),
                    'img' =>"$i$j.png",
                ]);
            }
        }
    }
}
