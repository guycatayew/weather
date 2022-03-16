<?php

namespace App\Console\Commands;

use App\Models\City;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class Weather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get weather from API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();
        $city = City::get();
        foreach ($city as $c) {
            $res = $client->request('GET', env('API_LINK') . '?q=' . $c->city_name . ',' . $c->country . '&appid=' . env('API_ID'));
            $data = json_decode($res->getBody(), true);
            \App\Models\Weather::create([
                'city_id' => $c->id,
                'coordinates' => json_encode($data['coord']),
                'weather' => json_encode($data['weather'][0]),
                'temperature' => $data['main']['temp']-273.15,
                'feel' => $data['main']['feels_like']-273.15,
                'humidity' => $data['main']['humidity'],
                'wind' => $data['wind']['speed']*3.6
            ]);
//            print_r($data['wind']['speed']*3.6);
//            echo ' ';
//            print_r($data['weather'][0]);
        }
    }
}
