<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;
use App\Models\Media;

class ActorSeeder extends Seeder
{
    public function run()
    {
        $actors = Actor::factory()->count(20)->create();

        $actors->each(function ($actor) {
            $mediaIds = Media::all()->random(3)->pluck('id');  
            $actor->media()->attach($mediaIds);  
        });
    }
}