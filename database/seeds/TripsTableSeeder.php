<?php

use App\Trip;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trip = new Trip();

        $trip->numero_offerta = 12;
        $trip->destination = 'Maldive';
        $trip->hotel = 'Royal Island Resort & Spa';
        $trip->travellers = 2;
        $trip->departure_date = '2022-07-21';
        $trip->return_date = '2022-07-30';
        $trip->transport = 'Aereo';
        $trip->place_of_departure = 'Aeroporto Internazionale di Napoli';
        $trip->place_of_arrival = 'Aeroporto internazionale Velana';
        $trip->activities_included = "Hotel dotato di ampie camere in riva al mare. La struttura è dotata di una SPA, di palestra e discoteca. La struttura fornisce il servizio in camera 24h su 24.";
        $trip->amount = 6500;
        $trip->discount = 5;
        $trip->travel_time = 36000;

        $trip->save();
    }
}
