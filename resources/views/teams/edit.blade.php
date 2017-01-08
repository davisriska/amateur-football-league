@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a team</div>

                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('teams@update',['team' => $team->id])}}" method="post">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Team name</label>
                                        <input type="text" class="form-control" placeholder="Team name" name="name" value="{{old('name',$team->name)}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 col-sm-offset-1">
                                    <select multiple="multiple" id="trainer_select" name="trainers[]">
                                        @foreach($trainers as $trainer)
                                            <option value="{{$trainer->id}}">{{$trainer->getFullName()}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-5 col-sm-offset-1">
                                    <select multiple="multiple" id="player_select" name="players[]">
                                        @foreach($players as $player)
                                            <option value="{{$player->id}}">{{$player->getFullName()}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-1 col-sm-offset-11">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>

                            {{csrf_field()}}

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="/js/jquery.multi-select.js"></script>
    <script src="/js/jquery.quicksearch.js"></script>
    <script>
        var pleyerSelectValue = {!! json_encode(array_map('strval', old('players',$team->people()->where('type', 'player')->pluck('id')->toArray()))) !!};
        var trainerSelectValue = {!! json_encode(array_map('strval', old('trainers',$team->people()->where('type', 'trainer')->pluck('id')->toArray()))) !!};
    </script>
    <script src="/js/teams_edit.js"></script>
@endsection