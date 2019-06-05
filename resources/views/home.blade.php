@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Avaliações pendentes</div>

                <div class="card-body">
                    @if($forms->count() > 0)
                        @foreach($forms as $form)
                            <a href="{{ route('evaluation', ['id' => $form->id]) }}">{{ $form->title }}</a>
                        @endforeach
                    @else
                        Não existem avalições pendentes
                    @endif
                </div>
            </div>
            <br>
            @if(\Illuminate\Support\Facades\Auth::user()->is_admin == 1)
                @if($formsResponsed->count() > 0)
                    <div class="card">
                        <div class="card-header">Respostas</div>

                        <div class="card-body">
                            @foreach($formsResponsed as $form)
                                <a href="{{ route('evaluation-rel', ['id' => $form->id]) }}">{{ $form->title }}</a>
                            @endforeach
                        </div>
                    </div>
                    <br>
                @endif
                @if($formsWaiting->count() > 0)
                    <div class="card">
                        <div class="card-header">Aguardando termino da avaliação</div>

                        <div class="card-body">
                            @foreach($formsWaiting as $form)
                                {{ $form->title }} - ({{$form->count}}/{{$userCount}})
                            @endforeach
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>
@endsection
