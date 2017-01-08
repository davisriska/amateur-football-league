<div class="modal fade" tabindex="-1" role="dialog" id="people_updateModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adding a person</h4>
            </div>
            <form id="people_updateModal_form" action="{{route('people@update')}}">
                <div class="modal-body">

                    <div class="alert alert-danger" style="display: none">
                        <ul id="people_updateModal_errors">

                        </ul>
                    </div>

                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name..">
                    </div>

                    <div class="form-group">
                        <label for="">Surname</label>
                        <input type="text" class="form-control" name="surname" placeholder="Surname..">
                    </div>

                    <div class="form-group">
                        <label for="">Type</label>
                        <select class="form-control" name="type">
                            <option value="trainer">Trainer</option>
                            <option value="player">Player</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Team</label>
                        <select class="form-control" name="team">
                            <option value="null"></option>
                            @foreach($teams as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    {{ csrf_field() }}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->