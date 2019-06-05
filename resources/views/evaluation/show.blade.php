@extends('layouts.app')

@section('content')
    <div class="page-header">

        <div class="tabbable">

            <ul class="nav nav-tabs">
                @foreach ($users as $k => $name)

                    <li><a href="#" data-id="tab{{$k}}" class="tab_user">{{$name}}</a></li>

                @endforeach

            </ul>
            <div class="tab-content">
                @foreach ($responses as $user_id => $response)
                    <div class="tab-pane tab_pane_user" id="tab{{$user_id}}">
                        <div class="tab-content">
                            <div class="tab-pane fade in show active">
                                <div class="row">
                                    <div class="col-lg-10 col-md-12">
                                        <div class="section-heading mb-4">{{ $form->title }} - {{$users[$user_id]}}</div>
                                        <table class="table table-striped table-responsive-md btn-table">
                                            <tr>
                                                <th>
                                                    Questão
                                                </th>
                                                <th>
                                                    Nota
                                                </th>
                                            </tr>
                                            @foreach ($response as $question_id => $resp)
                                                    <tr>
                                                        <td>
                                                            {{ $questions[$question_id] }}
                                                        </td>
                                                        <td>
                                                            @if (isset($resp['score']))
                                                                {{round($resp['score'] / $resp['qnt'],2)}}
                                                            @else
                                                                @if (isset($resp['obs']))
                                                                    <ul>
                                                                        @foreach ($resp['obs'] as $respObj)
                                                                           <li> {{ $respObj }} </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            @endif
                                                        </td>
                                                    </tr>
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

        var first = $('.tab_user')[0]
        $('#' + $(first).data('id')).show()
    </script>
@endsection
