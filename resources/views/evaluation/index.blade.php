@extends('layouts.app')

@section('content')
    <div class="page-header">

        <div class="tabbable">

            <ul class="nav nav-tabs">
                @foreach ($users as $user)
                    <li><a href="#" data-id="tab{{$user->id}}" class="tab_user">{{$user->name}}</a></li>
                @endforeach

            </ul>
            <div class="tab-content">
                @foreach ($users as $user)
                    <div class="tab-pane tab_pane_user" id="tab{{$user->id}}">
                        <div class="tab-content">
                            <div class="tab-pane fade in show active">
                                <div class="row">
                                    <div class="col-lg-10 col-md-12">
                                        <div class="section-heading mb-4">{{ $form->title }} - {{$user->name}}</div>
                                        <table class="table table-striped table-responsive-md btn-table">
                                            <tr>
                                                <th>
                                                    Questão
                                                </th>
                                                <th>
                                                    Nota
                                                </th>
                                            </tr>
                                            @foreach ($questions as $question)
                                                @if ($question->type == 0)
                                                    <tr>
                                                        <td>
                                                            {{ $question->question }}
                                                        </td>
                                                        <td>
                                                            1<input type="radio" name="nota[{{ $question->id }}]" value="1">
                                                            2<input type="radio" name="nota[{{ $question->id }}]" value="2">
                                                            3<input type="radio" name="nota[{{ $question->id }}]" value="3">
                                                            4<input type="radio" name="nota[{{ $question->id }}]" value="4">
                                                            5<input type="radio" name="nota[{{ $question->id }}]" value="5">
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            @foreach ($questions as $question)
                                                @if ($question->type != 0)
                                                    <tr colspan="2">
                                                        <td>
                                                            {{ $question->question }}
                                                            <br>
                                                            <textarea wight="100%">

                                                            </textarea>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('.tab_user').click(function () {
                $('.tab_pane_user').hide()
                $('#' + $(this).data('id')).show()
            })
        });
    </script>
@endsection
