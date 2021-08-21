
$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.btn-edit', function () {
        var id = $(this).attr('product-id');
        console.log(id);
        $.ajax({
            url: '/admin/getOneProduct/' + id,
            type: 'GET',
            success: function (response) {
                console.log(response);
                $('#product-id').val(response[0].id);
                $('#title').val(response[0].title);
                $('#description').val(response[0].description);
                $('#price').val(response[0].price);
                $('#category').val(response[0].category_id);
                $('#file_path').val(response[0].file_path);

                if (response[0].image !== null) {
                    var img_source = '../../storage/' + response[0].image;
                }
                else {
                    var img_source = '../assets/img-placeholer.png';
                }
                $('#img_view').attr('src', img_source);
            }
        });

    });


    // delete
    var id;
    var row;
    $(document).on('click', '.btn-delete', function () {
        row = $(this).closest("tr")
        id = $(this).attr('delete-id');
        var title = $(this).closest("tr").find('td:eq(0)').text();
        $('#deleteModal').modal('show');
        $('.delete-message').html('Are you sure do you want to delete ' + title + '?');
    });
    $('#btn-confirm-delete').click(function () {
        $.ajax({
            url: '/admin/deleteProduct/' + id,
            type: 'DELETE',
            success: function () {
                /* $('.delete-success').css('display', 'inline');
                 $(this).text('Deleting...');
                 setTimeout(function () {
                     row.fadeOut(500, function () {
                         $(this).text('Yes');
                         table.row(row).remove().draw();
                     });
 
                 }, 2000);
                 $('.delete-success').css('display', 'none');*/
                window.location.href = 'product'
            }
        });

    });
});




