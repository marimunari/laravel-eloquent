<?php

use Illuminate\Database\Seeder;
use App\Models\SoccerTeam;

class SoccerTeamsTableSeeder extends Seeder
{
    const MAX_ROWS = 100;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SoccerTeam::class, self::MAX_ROWS)->create();
    }
}
