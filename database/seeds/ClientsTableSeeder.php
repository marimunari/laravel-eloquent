<?php

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\SoccerTeam;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \Illuminate\Database\Eloquent\Collection $soccers */
        $soccers = SoccerTeam::all();
        /** @var \Illuminate\Database\Eloquent\Collection $collectionInvidual */
        $collectionInvidual = factory(Client::class, 5)->states(Client::TYPE_INDIVIDUAL)->make()->each(function ($client) use ($soccers) {
            $client->soccer_team_id = $soccers->random()->id;
            $client->save();
        });

        /** @var \Illuminate\Database\Eloquent\Collection $collectionLegal */
        $collectionLegal = factory(Client::class, 5)->states(Client::TYPE_LEGAL)->make()->each(function ($client) use ($soccers) {
            $client->soccer_team_id = $soccers->random()->id;
            $client->save();
        });;
    }
}
