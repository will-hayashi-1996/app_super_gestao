<?php

use App\SiteContato;

use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(11) 99999-8888';
        $contato->email = '';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja bem-vindo ao ssitema super gestao';
        $contato->save();
        */

        factory(SiteContato::class,100)->create();


    }
}
