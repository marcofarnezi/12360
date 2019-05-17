<?php

use Illuminate\Database\Seeder;
use App\Form;
use App\Question;

class QuestionsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $form = Form::create([
                'title'      => 'Avaliação'
            ]);

        Question::create(
            [
                [
                    'form_id'   => $form->id,
                    'question'     => 'É relutante em aceitar as decisões acordadas pelo grupo?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Ao resolver as dificuldades do dia a dia sabe expor suas necessidades e fazer perguntas que o auxiliem?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Aceita opiniões divergentes da sua com facilidade e respeito?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'É um exemplo para todos ao defender os valores da empresa?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Se empenha para que os resultados do grupo sejam os melhores possíveis?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'É autoconfiante?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Demonstra autonomia para decidir?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Sabe administrar o tempo para superar seus desafios?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Sabe se comunicar de forma clara e coesa?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Utiliza técnicas administrativas para melhorar o ambiente e a colaboração no trabalho?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Procura auxiliar na redução de despesas e desperdícios?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Encara as necessidades da organização como mais importantes que as necessidades pessoais?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Está disposto a aceitar riscos?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Desiste com facilidade ao primeiro sinal de dificuldade?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Sabe usar a tecnologia e os recursos da empresa em prol da produtividade de seu trabalho?',
                    'type'      => 0,
                ],
                [
                    'form_id'   => $form->id,
                    'question'     => 'Obs.',
                    'type'      => 1,
                ],
            ]
        );
    }
}
