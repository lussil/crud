<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'Brigadeiro',
            'descricao' => 'Doce muito absurdamente doce',
            'valor' => 20.10
        ]);
        Produto::create([
            'nome' => 'cajuzinho',
            'descricao' => 'Doce muito doce',
            'valor' => 10.6
        ]);

        Produto::create([
            'nome' => 'beijinho',
            'descricao' => 'Doce doce',
            'valor' => 8.4
        ]);

        Produto::create([
            'nome' => 'doce de leite',
            'descricao' => 'Doce absurdamente doce',
            'valor' => 14.9
        ]);

    }
}
