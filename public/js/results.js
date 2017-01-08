$(document).ready(function () {

    /**
     *  Shows modal on + click
     */
    $('#results_addModal-open').click(function () {
        $('#results_addModal').modal('show');
    });

    /**
     *  Submit action for results add form.
     */
    $('#results_addModal_form').submit(function (e) {

        $('#results_addModal_errors').empty();
        $('#results_addModal_errors').parent().hide();

        $.ajax({
            method: "POST",
            url: $('#results_addModal_form').attr('action'),
            data: $('#results_addModal_form').serialize(),
            statusCode: {
                422: function (jqXHR, textStatus, errorThrown) {
                    $('#results_addModal_errors').parent().show();
                    $.each(JSON.parse(jqXHR.responseText), function (i, e) {
                        $('#results_addModal_errors').append('<li>' + e[0] + '</li>');
                    });
                }
            }
        }).done(function (data) {
            $('#results_addModal').modal('hide');
            $('#results_addModal_form').find('input').val('');

            location.reload();
        });

        return false;
    });

    /**
     *  Shows edit modal on edit buttons click
     */
    $('.results_updateModal-open').click(function () {
        $('#results_updateModal').find('input[name=id]').val($(this).data('id'));
        $('#results_updateModal').find('input[name=results]').val($(this).data('results'));
        $('#results_updateModal').find('select[name=team_0]').val($(this).data('team_0'));
        $('#results_updateModal').find('select[name=team_1]').val($(this).data('team_1'));

        $('#results_updateModal').modal('show');
    });

    /**
     *  Submit action for result update form
     */
    $('#results_updateModal_form').submit(function (e) {

        $('#results_updateModal_errors').empty();
        $('#results_updateModal_errors').parent().hide();

        $.ajax({
            method: "POST",
            url: $('#results_updateModal_form').attr('action'),
            data: $('#results_updateModal_form').serialize(),
            statusCode: {
                422: function (jqXHR, textStatus, errorThrown) {
                    $('#results_updateModal_errors').parent().show();
                    $.each(JSON.parse(jqXHR.responseText), function (i, e) {
                        $('#results_updateModal_errors').append('<li>' + e[0] + '</li>');
                    });
                }
            }
        }).done(function (data) {
            $('#results_updateModal').modal('hide');
            location.reload();
        });

        return false;
    });

});