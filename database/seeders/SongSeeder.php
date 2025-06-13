<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $musicas_gospel = [
            [
        "name" => "Ousado Amor",
        "album" => "Reckless Love",
        "artist" => "Isaias Saad",
        "gender" => "Gospel",
        "key" => "D",
        "bpm" => 68,
        "compass" => "4/4"
    ],
    [
        "name" => "Lugar Secreto",
        "album" => "Gabriela Rocha",
        "artist" => "Gabriela Rocha",
        "gender" => "Gospel",
        "key" => "B",
        "bpm" => 72,
        "compass" => "4/4"
    ],
    [
        "name" => "Bondade de Deus",
        "album" => "Gabriela Rocha",
        "artist" => "Gabriela Rocha",
        "gender" => "Gospel",
        "key" => "G",
        "bpm" => 74,
        "compass" => "4/4"
    ],
    [
        "name" => "Oceanos",
        "album" => "Ana Nóbrega",
        "artist" => "Ana Nóbrega",
        "gender" => "Gospel",
        "key" => "E",
        "bpm" => 70,
        "compass" => "4/4"
    ],
    [
        "name" => "Nada Além do Sangue",
        "album" => "Fernandinho",
        "artist" => "Fernandinho",
        "gender" => "Gospel",
        "key" => "C",
        "bpm" => 76,
        "compass" => "4/4"
    ],
    [
        "name" => "Deserto",
        "album" => "Maria Marçal",
        "artist" => "Maria Marçal",
        "gender" => "Gospel",
        "key" => "F#",
        "bpm" => 70,
        "compass" => "4/4"
    ],
    [
        "name" => "A Ele a Glória",
        "album" => "Diante do Trono",
        "artist" => "Diante do Trono",
        "gender" => "Gospel",
        "key" => "Em",
        "bpm" => 68,
        "compass" => "4/4"
    ],
    [
        "name" => "Eu Escolho Deus",
        "album" => "Thalles Roberto",
        "artist" => "Thalles Roberto",
        "gender" => "Gospel",
        "key" => "C",
        "bpm" => 75,
        "compass" => "4/4"
    ],
    [
        "name" => "Pai Nosso",
        "album" => "Pedras Vivas",
        "artist" => "Pedras Vivas",
        "gender" => "Gospel",
        "key" => "G",
        "bpm" => 72,
        "compass" => "4/4"
    ],
    [
        "name" => "Teu Santo Nome",
        "album" => "Gabriela Rocha",
        "artist" => "Gabriela Rocha",
        "gender" => "Gospel",
        "key" => "A",
        "bpm" => 80,
        "compass" => "4/4"
    ],
    [
        "name" => "A Vitória Chegou",
        "album" => "Cassiane",
        "artist" => "Cassiane",
        "gender" => "Gospel",
        "key" => "G",
        "bpm" => 78,
        "compass" => "4/4"
    ],
    [
        "name" => "Deus Proverá",
        "album" => "Gabriela Gomes",
        "artist" => "Gabriela Gomes",
        "gender" => "Gospel",
        "key" => "C",
        "bpm" => 72,
        "compass" => "4/4"
    ],
    [
        "name" => "Ele Vem",
        "album" => "Gabriel Guedes",
        "artist" => "Gabriel Guedes",
        "gender" => "Gospel",
        "key" => "D",
        "bpm" => 70,
        "compass" => "4/4"
    ],
    [
        "name" => "Faz Chover",
        "album" => "Fernandinho",
        "artist" => "Fernandinho",
        "gender" => "Gospel",
        "key" => "E",
        "bpm" => 74,
        "compass" => "4/4"
    ],
    [
        "name" => "Me Atraiu",
        "album" => "Gabriela Rocha",
        "artist" => "Gabriela Rocha",
        "gender" => "Gospel",
        "key" => "A",
        "bpm" => 76,
        "compass" => "4/4"
    ],
    [
        "name" => "Pra Sempre",
        "album" => "Ministério Avivah",
        "artist" => "Ministério Avivah",
        "gender" => "Gospel",
        "key" => "B",
        "bpm" => 80,
        "compass" => "4/4"
    ],
    [
        "name" => "Sou Casa",
        "album" => "Klebson Kollins",
        "artist" => "Klebson Kollins",
        "gender" => "Gospel",
        "key" => "F",
        "bpm" => 75,
        "compass" => "4/4"
    ],
    [
        "name" => "Teu Amor Não Falha",
        "album" => "Nívea Soares",
        "artist" => "Nívea Soares",
        "gender" => "Gospel",
        "key" => "G",
        "bpm" => 78,
        "compass" => "4/4"
    ],
    [
        "name" => "Vai Passar",
        "album" => "Isadora Pompeo",
        "artist" => "Isadora Pompeo",
        "gender" => "Gospel",
        "key" => "C",
        "bpm" => 72,
        "compass" => "4/4"
    ],
    [
        "name" => "Yeshua",
        "album" => "Comunidade Colo de Deus",
        "artist" => "Comunidade Colo de Deus",
        "gender" => "Gospel",
        "key" => "D",
        "bpm" => 70,
        "compass" => "4/4"
    ],
    [
        "name" => "A Casa É Sua",
        "album" => "Casa Worship",
        "artist" => "Casa Worship",
        "gender" => "Gospel",
        "key" => "C",
        "bpm" => 72,
        "compass" => "4/4"
    ],
    [
        "name" => "Hey, Pai",
        "album" => "Isadora Pompeo",
        "artist" => "Isadora Pompeo",
        "gender" => "Gospel",
        "key" => "G",
        "bpm" => 76,
        "compass" => "4/4"
    ],
    [
        "name" => "Eu Navegarei",
        "album" => "Gabriela Rocha",
        "artist" => "Gabriela Rocha",
        "gender" => "Gospel",
        "key" => "D",
        "bpm" => 70,
        "compass" => "4/4"
    ],
    [
        "name" => "Me Ama",
        "album" => "Diante do Trono",
        "artist" => "Diante do Trono",
        "gender" => "Gospel",
        "key" => "E",
        "bpm" => 74,
        "compass" => "4/4"
    ],
    [
        "name" => "Quero Conhecer Jesus",
        "album" => "Gabriel Guedes",
        "artist" => "Gabriel Guedes",
        "gender" => "Gospel",
        "key" => "A",
        "bpm" => 78,
        "compass" => "4/4"
    ],
    [
        "name" => "O Nome de Jesus",
        "album" => "Isadora Pompeo",
        "artist" => "Isadora Pompeo",
        "gender" => "Gospel",
        "key" => "B",
        "bpm" => 80,
        "compass" => "4/4"
    ],
    [
        "name" => "Só Tu És Santo",
        "album" => "Ministério Zoe",
        "artist" => "Ministério Zoe",
        "gender" => "Gospel",
        "key" => "F",
        "bpm" => 75,
        "compass" => "4/4"
    ],
    [
        "name" => "Teu Amor Não Falha",
        "album" => "Nívea Soares",
        "artist" => "Nívea Soares",
        "gender" => "Gospel",
        "key" => "G",
        "bpm" => 78,
        "compass" => "4/4"
    ],
    [
        "name" => "Minha Morada",
        "album" => "Isadora Pompeo",
        "artist" => "Isadora Pompeo",
        "gender" => "Gospel",
        "key" => "C",
        "bpm" => 72,
        "compass" => "4/4"
    ],
    [
        "name" => "Canção do Apocalipse",
        "album" => "Diante do Trono",
        "artist" => "Diante do Trono",
        "gender" => "Gospel",
        "key" => "D",
        "bpm" => 70,
        "compass" => "4/4"
    ]
        ];


        foreach ($musicas_gospel as $music) {
            Song::create($music);
        }
    }
}
