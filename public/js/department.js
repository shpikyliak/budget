$(document).ready(function () {
    $('#show-department-select').click(function () {
        var bool = $(this).attr('checked');

        if (bool=='checked')
        {
            $('#department-select').css('display','block');
        }else
        {
            $('#department-select').css('display','none');
        }
    });
});
