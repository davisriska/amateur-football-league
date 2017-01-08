$(document).ready(function () {

    /**
     *  Checks for change on orderBy select and refreshes the page accordingly
     */
    $('#people_orderBy').change(function (e) {
        if ($(this).val() != '') {
            location.search = '?order_by=' + $(this).val();
        } else {
            location.search = '';
        }
    });

    /**
     *  Checks for search string and sets the orderBy select accordingly
     */
    if ($('#people_orderBy') && location.search != '') {
        $('#people_orderBy').val(getSearchParam('order_by') + "&direction=" + getSearchParam('direction'));
    }

    /**
     *  Shows modal on + click
     */
    $('#people_addModal-open').click(function () {
        $('#people_addModal').modal('show');
    });

    /**
     *  Submit action for people add form.
     */
    $('#people_addModal_form').submit(function (e) {

        $('#people_addModal_errors').empty();
        $('#people_addModal_errors').parent().hide();

        $.ajax({
            method: "POST",
            url: $('#people_addModal_form').attr('action'),
            data: $('#people_addModal_form').serialize(),
            statusCode: {
                422: function (jqXHR, textStatus, errorThrown) {
                    $('#people_addModal_errors').parent().show();
                    $.each(JSON.parse(jqXHR.responseText), function (i, e) {
                        $('#people_addModal_errors').append('<li>' + e[0] + '</li>');
                    });
                }
            }
        }).done(function (data) {
            $('#people_addModal').modal('hide');
            $('#people_addModal_form').find('input').val('');

            location.reload();
        });

        return false;
    });


    /**
     *  Shows edit modal on edit buttons click
     */
    $('.people_updateModal-open').click(function () {
        $('#people_updateModal').find('input[name=id]').val($(this).data('id'));
        $('#people_updateModal').find('input[name=name]').val($(this).data('name'));
        $('#people_updateModal').find('input[name=surname]').val($(this).data('surname'));
        $('#people_updateModal').find('select[name=type]').val($(this).data('type'));
        $('#people_updateModal').find('select[name=team]').val($(this).data('team'));

        $('#people_updateModal').modal('show');
    });

    /**
     *  Submit action for people update form
     */
    $('#people_updateModal_form').submit(function (e) {

        $('#people_updateModal_errors').empty();
        $('#people_updateModal_errors').parent().hide();

        $.ajax({
            method: "POST",
            url: $('#people_updateModal_form').attr('action'),
            data: $('#people_updateModal_form').serialize(),
            statusCode: {
                422: function (jqXHR, textStatus, errorThrown) {
                    $('#people_updateModal_errors').parent().show();
                    $.each(JSON.parse(jqXHR.responseText), function (i, e) {
                        $('#people_updateModal_errors').append('<li>' + e[0] + '</li>');
                    });
                }
            }
        }).done(function (data) {
            $('#people_updateModal').modal('hide');
            location.reload();
        });

        return false;
    });

});

/**
 *  Helper function that gets search strings variables with values
 */
function getSearchParam(name) {

    var str = window.location.search;
    var objURL = {};

    str.replace(
        new RegExp("([^?=&]+)(=([^&]*))?", "g"),
        function ($0, $1, $2, $3) {
            objURL[$1] = $3;
        }
    );

    return objURL[name];
}