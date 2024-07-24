<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Cache\TagSet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\Schema;
use illuminate\Support\Str;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Technology::truncate();

        $technologies= ['HTML','CSS','JS','VUE','PHP','BOOTSTRAP','SQL','LARAVEL','AXIOS'];
        
        foreach($technologies as $technology){
            $new_technology= new Technology;

            $new_technology->name=$technology;
            $new_technology->slug=Str::of($technology)->slug();

            $new_technology->save();    
        }

        Schema::enableForeignKeyConstraints();
    }
}
