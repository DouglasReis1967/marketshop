<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert(

            [

    ['nome'=>'Camiseta Branca',
    'descricao'=>'Camiseta para ser usada como camiseta, Cor dela e Branca',
    'valor'=> 123,
    'foto'=> 'https://images.tcdn.com.br/img/img_prod/809258/camiseta_branca_malha_pv_manga_curta_gola_redonda_273_1_5c5c3476a83f9f3a704042733ecb224b.jpg',
    'user_id'=> 1,

            ],

    ['nome'=>'Bone branco',
    'descricao'=>'Bone aba reta Branco',
    'valor'=> 50,
    'foto'=> 'https://images-americanas.b2w.io/produtos/1517348333/imagens/bone-branco-snapback-aba-reta-liso/1517348341_1_large.jpg',
    'user_id'=> 1,

        ],

    ['nome'=>'Calca jeans',
    'descricao'=>'Calca jeans Azul',
    'valor'=> 100,
    'foto'=> 'https://m.media-amazon.com/images/I/314jAtkn5BL._AC_SY1000_.jpg',
    'user_id'=> 1,

    ],

    ['nome'=>'Meias Branca',
    'descricao'=>'Meias Branca Cano Curto',
    'valor'=> 25,
    'foto'=> 'https://formsbrasil.com.br/wp-content/uploads/2022/04/082-meia-branca-1.jpg',
    'user_id'=> 1,

],

            ]
);
        //
    }
}
