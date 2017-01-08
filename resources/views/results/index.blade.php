@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Results</div>

                    <div class="panel-body">


                        <table class="table table-striped">

                            <thead>
                            <tr>
                                <th>Team 1</th>
                                <th>Team 2</th>
                                <th>Result</th>
                                <th><span id="results_addModal-open" class="glyphicon glyphicon-plus warning"></span></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($results as $result)
                                <tr>
                                    <td>{{$result->team_0->name}}</td>
                                    <td>{{$result->team_1->name}}</td>
                                    <td>{{$result->results}}</td>
                                    <td class="results_updateModal-open" data-id="{{$result->id}}" data-team_0="{{$result->team_id_0}}" data-team_1="{{$result->team_id_1}}"
                                        data-results="{{$result->results}}">
                                        <span class="glyphicon glyphicon-edit success"></span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @include('results.store')
                        @include('results.update')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="js/results.js"></script>
@endsection