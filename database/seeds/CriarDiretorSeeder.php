<?php

use Illuminate\Database\Seeder;
use App\Diretor;

class CriarDiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diretor = new Diretor();
        $diretor->nome = "Vinicius";
        $diretor->save();

        factory(Diretor::class,20)->create();
    }
}
