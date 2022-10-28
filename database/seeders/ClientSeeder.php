<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->name = 'emmanuel';
        $client->phone_number = '61283821';
        $client->email = 'kugue@gmail.com';
        $client->save();

        $client = new Client();
        $client->name = 'pablo';
        $client->phone_number = '61237821';
        $client->email = 'luis@gmail.com';
        $client->save();
    }
}