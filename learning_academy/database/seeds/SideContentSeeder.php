<?php

use App\SiteContent;
use Illuminate\Database\Seeder;

class SideContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContent::create([
            'name' => 'banner' ,
            'content' => json_encode([
                'title' => 'EVERY CHILD YEARNS TO LEARN',
                'subtitle' => 'Making Your Childs World Better',
                'desc' => "Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man",

            ]),
        ]);
    }
}
