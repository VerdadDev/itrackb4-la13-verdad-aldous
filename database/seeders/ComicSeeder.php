<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use App\Models\Genre;

class ComicSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create the genres first
        $adventure = Genre::create(['name' => 'Adventure']);
        $action = Genre::create(['name' => 'Action']);
        $darkFantasy = Genre::create(['name' => 'Dark Fantasy']);
        $superhero = Genre::create(['name' => 'Superhero']);

        // 2. Create comics and assign their genre IDs
        Comic::create([
            'title' => 'One Piece',
            'author' => 'Eiichiro Oda',
            'genre_id' => $adventure->id,
            'rate' => 9,
            'chapter' => 1050,
            'is_completed' => false,
        ]);

        Comic::create([
            'title' => 'Naruto',
            'author' => 'Masashi Kishimoto',
            'genre_id' => $action->id,
            'rate' => 8,
            'chapter' => 700,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Attack on Titan',
            'author' => 'Hajime Isayama',
            'genre_id' => $darkFantasy->id,
            'rate' => 9,
            'chapter' => 139,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'My Hero Academia',
            'author' => 'Kohei Horikoshi',
            'genre_id' => $superhero->id,
            'rate' => 8,
            'chapter' => 340,
            'is_completed' => false,
        ]);

        Comic::create([
            'title' => 'Demon Slayer',
            'author' => 'Koyoharu Gotouge',
            'genre_id' => $darkFantasy->id,
            'rate' => 9,
            'chapter' => 205,
            'is_completed' => true,
        ]);
        Comic::create([
            'title' => 'One Piece',
            'author' => 'Eiichiro Oda',
            'genre_id' => $adventure->id,
            'rate' => 9,
            'chapter' => 1050,
            'is_completed' => false,
        ]);

        Comic::create([
            'title' => 'Naruto',
            'author' => 'Masashi Kishimoto',
            'genre_id' => $action->id,
            'rate' => 8,
            'chapter' => 700,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Attack on Titan',
            'author' => 'Hajime Isayama',
            'genre_id' => $darkFantasy->id,
            'rate' => 9,
            'chapter' => 139,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'My Hero Academia',
            'author' => 'Kohei Horikoshi',
            'genre_id' => $superhero->id,
            'rate' => 8,
            'chapter' => 430,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Demon Slayer',
            'author' => 'Koyoharu Gotouge',
            'genre_id' => $darkFantasy->id,
            'rate' => 9,
            'chapter' => 205,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Jujutsu Kaisen',
            'author' => 'Gege Akutami',
            'genre_id' => $darkFantasy->id,
            'rate' => 9,
            'chapter' => 271,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Bleach',
            'author' => 'Tite Kubo',
            'genre_id' => $action->id,
            'rate' => 9,
            'chapter' => 686,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Dragon Ball',
            'author' => 'Akira Toriyama',
            'genre_id' => $action->id,
            'rate' => 10,
            'chapter' => 519,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Black Clover',
            'author' => 'Yuki Tabata',
            'genre_id' => $adventure->id,
            'rate' => 8,
            'chapter' => 380,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Chainsaw Man',
            'author' => 'Tatsuki Fujimoto',
            'genre_id' => $darkFantasy->id,
            'rate' => 9,
            'chapter' => 220,
            'is_completed' => false,
        ]);

        Comic::create([
            'title' => 'Hunter x Hunter',
            'author' => 'Yoshihiro Togashi',
            'genre_id' => $adventure->id,
            'rate' => 10,
            'chapter' => 410,
            'is_completed' => false,
        ]);

        Comic::create([
            'title' => 'Tokyo Ghoul',
            'author' => 'Sui Ishida',
            'genre_id' => $darkFantasy->id,
            'rate' => 8,
            'chapter' => 144,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Haikyuu!!',
            'author' => 'Haruichi Furudate',
            'genre_id' => $action->id,
            'rate' => 9,
            'chapter' => 402,
            'is_completed' => true,
        ]);

        Comic::create([
            'title' => 'Spy x Family',
            'author' => 'Tatsuya Endo',
            'genre_id' => $action->id,
            'rate' => 9,
            'chapter' => 130,
            'is_completed' => false,
        ]);

        Comic::create([
            'title' => 'Fullmetal Alchemist',
            'author' => 'Hiromu Arakawa',
            'genre_id' => $adventure->id,
            'rate' => 10,
            'chapter' => 108,
            'is_completed' => true,
        ]);
    }
}
