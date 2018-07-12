var updateOutput = function (e) {
    var list = e.length ? e : $(e.target),
        output = list.data('output');
    if (window.JSON) {
        if (output) {
            output.val(window.JSON.stringify(list.nestable('serialize')));
        }
    } else {
        alert('JSON browser support required for this page.');
    }
};

var editMenuItem = function () {
    var modal_input_id = $('#edit_name').attr('data-id');
    //modal_input_id = $('#edit_id').val();

    var modal_name_val = $('#edit_name').val();
    //console.log(modal_input_id);

    //new name
    $("#nestable")
        .find("li[data-id='" + modal_input_id + "'] > .dd-handle .dd-item-text")
        .text(modal_name_val);

    //add new name to data
    $("#nestable")
        .find("li[data-id='" + modal_input_id + "']")
        .data("name",modal_name_val);

    $('#myModal').modal('hide');

    // output initial serialised data
    updateOutput($('.dd').data('output', $('#json-output')));

    //console.log(test);
};

$(document).ready(function(){

    //console.log(route);

    //make a elements clickable
    $('.dd-handle a').on('mousedown', function(e){
        e.stopPropagation();
    });





    var clickEdit = function () {
        var id = $(this).parent().parent().data('id');

        var text = $(this).parent().children('.dd-item-text').text();
        //console.log(id);

        $('#myModal').modal('show');

        $('#edit_name').val(text);
        $('#edit_name').attr("data-id",id);
        $('#edit_id').val(id);

    };




    //get menu list as json and  send post request with ajax
    var saveMenu = function () {


        var jsonOutput = $('#json-output').val();
        var menuId = 1;

        //console.log(route);

        $.ajax({
            type:'POST',
            url: route,
            data: {'json':jsonOutput},
            success: function () {
                console.log('success');
            },
            error: function () {
                console.log('success');
            }
        })
    };

    //events
    // Clcik EDIT
    $('.edit').click(clickEdit);

    //click edit button in modal
    $('#modal_edit').on("click", editMenuItem);

    //save menu btn
    $('#saveMenu').on("click", saveMenu);

    $('.dd').nestable()
        .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('.dd').data('output', $('#json-output')));
});

