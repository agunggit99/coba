<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\Genre;

class FilmSeeder extends Seeder
{
    public function run()
    {
        // Genres
        $genreNames = ['Action', 'Drama', 'Horror', 'Romance', 'Sci-Fi', 'Comedy', 'Thriller'];
        foreach ($genreNames as $g) {
            Genre::firstOrCreate(['genre' => $g]);
        }

        // Films
        $films = [
            [
                'judul'     => 'Avengers: Endgame',
                'deskripsi' => 'Para Avengers berkumpul untuk melawan Thanos dalam pertempuran terakhir yang epik untuk menyelamatkan alam semesta.',
                'tahun'     => '2019-04-26',
                'rating'    => 8.4,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/or06FN3Dka5tukK1e9sl16pB3iy.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'Inception',
                'deskripsi' => 'Seorang pencuri berpengalaman yang mencuri rahasia dari pikiran bawah sadar diberikan tugas mustahil menanamkan sebuah ide.',
                'tahun'     => '2010-07-16',
                'rating'    => 8.8,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/9gk7adHYeDvHkCSEqAvQNLV5Uge.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'The Dark Knight',
                'deskripsi' => 'Batman menghadapi musuh terbesarnya, Joker, yang menyebabkan kekacauan dan teror di kota Gotham.',
                'tahun'     => '2008-07-18',
                'rating'    => 9.0,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'Parasite',
                'deskripsi' => 'Sebuah keluarga miskin secara cerdas dan bertahap menyusup ke kehidupan keluarga kaya yang penuh rahasia.',
                'tahun'     => '2019-05-30',
                'rating'    => 8.6,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'Interstellar',
                'deskripsi' => 'Seorang ayah melakukan perjalanan melalui lubang cacing di ruang angkasa untuk menyelamatkan umat manusia dari kepunahan.',
                'tahun'     => '2014-11-07',
                'rating'    => 8.6,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/gEU2QniE6E77NI6lZFWCxQXABoN.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'Joker',
                'deskripsi' => 'Kisah tragis tentang asal-usul karakter villain ikonik DC Universe yang terkenal, Arthur Fleck menjadi Joker.',
                'tahun'     => '2019-10-04',
                'rating'    => 8.4,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'Knives Out',
                'deskripsi' => 'Seorang detektif jenius menyelidiki kematian misterius dari kepala keluarga penulis novel terkenal yang kaya raya.',
                'tahun'     => '2019-11-27',
                'rating'    => 7.9,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/pThyQovXQrws2Y4aMC2CAXFKqMo.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'Get Out',
                'deskripsi' => 'Seorang pria Afrika-Amerika mengunjungi keluarga pacarnya dan menemukan rahasia gelap yang mengerikan.',
                'tahun'     => '2017-02-24',
                'rating'    => 7.7,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/tFXcEccSQMf3lfhfXKSU9iRBpa3.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'Spider-Man: No Way Home',
                'deskripsi' => 'Peter Parker meminta Doctor Strange untuk membuat dunia melupakan identitasnya, namun sihir tersebut membuka multiverse.',
                'tahun'     => '2021-12-17',
                'rating'    => 8.3,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'Everything Everywhere All at Once',
                'deskripsi' => 'Seorang wanita imigran China harus menjelajahi multiverse paralel untuk menyelamatkan dunia dari ancaman kejahatan.',
                'tahun'     => '2022-03-25',
                'rating'    => 7.8,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/w3LxiVYdWWRvEVdn5RYq6jIqkb1.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'The Shawshank Redemption',
                'deskripsi' => 'Seorang bankir dihukum karena membunuh istrinya dan membangun persahabatan di penjara Shawshank yang keras.',
                'tahun'     => '1994-09-23',
                'rating'    => 9.3,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/lyQBXzOQSuE59IsHyhrp0qIiPAz.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
            [
                'judul'     => 'Dune',
                'deskripsi' => 'Putra seorang bangsawan antariksa menjalani perjalanan epik ke planet gurun untuk melindungi sumber daya paling berharga.',
                'tahun'     => '2021-10-22',
                'rating'    => 7.9,
                'thumbnail' => 'https://image.tmdb.org/t/p/w500/d5NXSklpcvzeBO6bOBFikDQ7RZ3.jpg',
                'video'     => null,
                'subtitle'  => null,
            ],
        ];

        foreach ($films as $filmData) {
            Film::firstOrCreate(['judul' => $filmData['judul']], $filmData);
        }

        // Link some films to genres
        $action = Genre::where('genre', 'Action')->first();
        $drama  = Genre::where('genre', 'Drama')->first();
        $scifi  = Genre::where('genre', 'Sci-Fi')->first();
        $thriller = Genre::where('genre', 'Thriller')->first();
        $horror = Genre::where('genre', 'Horror')->first();
        $comedy = Genre::where('genre', 'Comedy')->first();

        $links = [
            'Avengers: Endgame'                  => [$action, $scifi],
            'Inception'                           => [$action, $scifi, $thriller],
            'The Dark Knight'                     => [$action, $drama, $thriller],
            'Parasite'                            => [$drama, $thriller],
            'Interstellar'                        => [$scifi, $drama],
            'Joker'                               => [$drama, $thriller],
            'Knives Out'                          => [$thriller, $comedy],
            'Get Out'                             => [$horror, $thriller],
            'Spider-Man: No Way Home'             => [$action, $scifi],
            'Everything Everywhere All at Once'   => [$scifi, $comedy],
            'The Shawshank Redemption'            => [$drama],
            'Dune'                                => [$scifi, $action, $drama],
        ];

        foreach ($links as $judul => $genres) {
            $film = Film::where('judul', $judul)->first();
            if ($film) {
                $ids = array_filter(array_map(fn($g) => $g ? $g->id_genre : null, $genres));
                $film->genres()->syncWithoutDetaching($ids);
            }
        }

        echo "Seeder selesai! Films: " . Film::count() . ", Genres: " . Genre::count() . "\n";
    }
}
