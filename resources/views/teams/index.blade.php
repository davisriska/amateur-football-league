@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Teams</div>

                    <div class="panel-body">

                        <table class="table">

                            <thead>
                            <tr>
                                <th>Name</th>
                                <th><a href="{{route('teams@create')}}"><span class="glyphicon glyphicon-plus warning"></span></a></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>
                                        {{$team->name}}
                                    </td>
                                    <td>
                                        <a href="{{route('teams@edit',['team' => $team->id])}}"><span class="glyphicon glyphicon-edit success"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection