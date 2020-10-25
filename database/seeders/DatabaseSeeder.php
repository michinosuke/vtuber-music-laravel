<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Artist::factory(20)->create();
        // \App\Models\Music::factory(10)->create();
        // \App\Models\Video::factory(10)->create();
        // \App\Models\VideoArranger::factory(10)->create();
        $tables = [
            'artists',
            'artist_recommends',
            'artist_actions',
            'artist_children',
            'music',
            'videos',
            'video_actions',
            // 'video_tags',
            // 'video_recommends',
            'music_composers',
            'music_lyricists',
            'music_arrangers',
            'video_singers',
            'video_mixers',
            'video_off_vocals',
            'video_arrangers'
        ];
        foreach($tables as $table) {
            DB::insert(file_get_contents(__DIR__."/sampleData/vmusic_$table.sql"));
        }
    }
}
