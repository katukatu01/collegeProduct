<?php

use Illuminate\Database\Seeder;
use App\Music;

class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table("musics")->insert([
           'artist' => '米津玄師',
           'title' => 'lemon',
           'body' => '7億再生突破!!',
           'artist' => '米津玄師',
           'title' => '海の幽霊',
           'body' => '怪獣の子供主題歌',
           ]);
    }
}
