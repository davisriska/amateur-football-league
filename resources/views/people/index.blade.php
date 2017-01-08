@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">People</div>

                    <div class="panel-body">


                        <table class="table table-striped">

                            <thead>
                            <tr>
                                <th>Order by</th>
                                <th>
                                    <select name="people_orderBy" id="people_orderBy">
                                        <option value=""></option>
                                        <option value="name&direction=asc">By name ascending</option>
                                        <option value="name&direction=desc">By name descending</option>
                                        <option value="surname&direction=asc">By surname ascending</option>
                                        <option value="surname&direction=desc">By surname descending</option>
                                        <option value="type&direction=asc">By type ascending</option>
                                        <option value="type&direction=desc">By type descending</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Type</th>
                                <th>Team</th>
                                <th><span id="people_addModal-open" class="glyphicon glyphicon-plus warning"></span></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($people as $person)
                                <tr>
                                    <td>
                                        {{$person->name}}
                                    </td>
                                    <td>{{$person->surname}}</td>
                                    <td>{{ucfirst($person->type)}}</td>
                                    <td>{{$person->getTeamName()}}</td>
                                    <td class="people_updateModal-open" data-name="{{$person->name}}" data-id="{{$person->id}}" data-surname="{{$person->surname}}"
                                        data-type="{{$person->type}}" data-team="{{$person->team_id}}">
                                        <span class="glyphicon glyphicon-edit success"></span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @include('people.store')
                        @include('people.update')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="js/people.js"></script>
@endsection