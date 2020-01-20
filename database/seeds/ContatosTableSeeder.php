<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Criando eu de maneira manual
        DB::table('Contatos')->insert([
            'nome' => 'Carlos Bruno',
            'telefone' => '92982348950',
            'data_nasc' => '1998/07/21',
            'email' => 'brunobonfim10@hotmail.com'

        ]);
        factory(App\Contato::class, 20)->create();
    }
}
