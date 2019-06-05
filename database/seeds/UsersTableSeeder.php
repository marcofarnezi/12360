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
        DB::table("users")->insert(
            [
                [
                    'name'      => 'Juliana Lourdes',
                    'email'     => 'juliana.lourdes@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Marco Farnezi',
                    'email'     => 'marco.farnezi@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 1
                ],
                /*[
                    'name'      => 'Pedro Emiliano',
                    'email'     => 'pedro.emiliano@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Eduardo Oliveira',
                    'email'     => 'eduardoo@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Luiz Gama',
                    'email'     => 'luiz.gama@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Marcos Coelho',
                    'email'     => 'marcos.coelho@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Julia Amarante',
                    'email'     => 'julia.amarante@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Atos Pontes',
                    'email'     => 'atos.pontes@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Luís Fernando Bastos',
                    'email'     => 'luisfernando.bastos@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Marcos Matos Machado',
                    'email'     => 'marcos.matos@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Ítallo Lima',
                    'email'     => 'itallo.lima@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Ronan Cândido',
                    'email'     => 'ronan.candido@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Lucas Barbosa',
                    'email'     => 'lucas.barbosa@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Eugenio Michetti',
                    'email'     => 'eugeniomichetti@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Josoé Queiroz',
                    'email'     => 'josoe.queiroz@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Thiago Brumano',
                    'email'     => 'thiago.brumano@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'André Souza',
                    'email'     => 'andre.souza@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Fábio Santos Dias',
                    'email'     => 'fabio.dias@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Sergisley Marciano Matias de Lima ',
                    'email'     => 'sergisley.lima@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Leonardo Padilha',
                    'email'     => 'leonardo.padilha@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],

                [
                    'name'      => 'Brendo Oliveira',
                    'email'     => 'brendo.oliveira@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Gabriela Carmo Nascimento',
                    'email'     => 'gabriela.carmo@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Priscylla Mara dos Reis',
                    'email'     => 'priscylla.reis@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Marcelo Geovani',
                    'email'     => 'marcelo.geovani@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Elker Lima',
                    'email'     => 'elker.lima@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Marcelo Fernandes',
                    'email'     => 'marcelo.fernandes@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Igor Coelho',
                    'email'     => 'igor.coelho@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ],
                [
                    'name'      => 'Justina Peixoto',
                    'email'     => 'justina.peixoto@plataforma13.com.br',
                    'password'  => bcrypt('123'),
                    'is_admin'  => 0
                ]*/
            ]
        );
    }
}
