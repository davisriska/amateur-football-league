<div class="modal fade" tabindex="-1" role="dialog" id="results_addModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adding a person</h4>
            </div>
            <form id="results_addModal_form" action="{{route('results@store')}}">
                <div class="modal-body">

                    <div class="alert alert-danger" style="display: none">
                        <ul id="results_addModal_errors">

                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="">Team 1</label>
                        <select class="form-control" name="team_0">
                            @foreach($teams as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Team 2</label>
                        <select class="form-control" name="team_1">
                            @foreach($teams as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Results</label>
                        <input type="text" class="form-control" name="results" placeholder="Results..">
                    </div>

                    {{ csrf_field() }}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->