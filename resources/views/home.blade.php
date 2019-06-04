@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Avaliações pendentes</div>

                <div class="card-body">
                    @foreach($forms as $form)
                        <a href="{{ route('evaluation', ['id' => $form->id]) }}">{{ $form->title }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
