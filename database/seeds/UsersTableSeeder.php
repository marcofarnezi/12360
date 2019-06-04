<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("user")->insert(
            [
                [
                    'name'      => 'Juliana Lourdes',
                    'login'     => 'juliana.lourdes@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Pedro Emiliano',
                    'login'     => 'pedro.emiliano@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Eduardo Oliveira',
                    'login'     => 'eduardoo@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Marco Farnezi',
                    'login'     => 'marco.farnezi@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
               /* [
                    'name'      => 'Luiz Gama',
                    'login'     => 'luiz.gama@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Marcos Coelho',
                    'login'     => 'marcos.coelho@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Julia Amarante',
                    'login'     => 'julia.amarante@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Atos Pontes',
                    'login'     => 'atos.pontes@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Luís Fernando Bastos',
                    'login'     => 'luisfernando.bastos@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Marcos Matos Machado',
                    'login'     => 'marcos.matos@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Ítallo Lima',
                    'login'     => 'itallo.lima@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Ronan Cândido',
                    'login'     => 'ronan.candido@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Lucas Barbosa',
                    'login'     => 'lucas.barbosa@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Eugenio Michetti',
                    'login'     => 'eugeniomichetti@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Josoé Queiroz',
                    'login'     => 'josoe.queiroz@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Thiago Brumano',
                    'login'     => 'thiago.brumano@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'André Souza',
                    'login'     => 'andre.souza@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Fábio Santos Dias',
                    'login'     => 'fabio.dias@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Sergisley Marciano Matias de Lima ',
                    'login'     => 'sergisley.lima@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Leonardo Padilha',
                    'login'     => 'leonardo.padilha@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],

                [
                    'name'      => 'Brendo Oliveira',
                    'login'     => 'brendo.oliveira@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Gabriela Carmo Nascimento',
                    'login'     => 'gabriela.carmo@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Priscylla Mara dos Reis',
                    'login'     => 'priscylla.reis@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Marcelo Geovani',
                    'login'     => 'marcelo.geovani@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Elker Lima',
                    'login'     => 'elker.lima@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Marcelo Fernandes',
                    'login'     => 'marcelo.fernandes@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Igor Coelho',
                    'login'     => 'igor.coelho@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ],
                [
                    'name'      => 'Justina Peixoto',
                    'login'     => 'justina.peixoto@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                ]*/
            ]
        );
    }
}
