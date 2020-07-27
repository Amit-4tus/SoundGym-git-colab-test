<button type="button" class="btn btn-danger" onclick="MyFunction(this)"
    reset='<i class="fa fa-send"></i> Submit'
    beforeSend='<i class="fa fa-spin fa-spinner"></i> Submit'
    success='<i class="fa fa-check"></i> Submit'
    error='<i class="fa fa-bug"></i> Submit'
><i class="fa fa-send"></i> Submit
</button>

<script>
    $.ajax({
        url: baseUrl + '/controller/action?param=' + $(e).attr('param'),
        type: "POST",
        dataType: 'json',
        data: {data: JSON.stringify(list)},
        beforeSend: function () {
            $(e).html($(ele).attr('beforeSend'));
        },
        success: function (data) {
            $(e).html($(e).attr(data.status));
            setTimeout(function () {
                $(e).html($(e).attr('reset'));
            }, 1000);
        },
        error: function () {
            $(e).html($(e).attr('error'));
            setTimeout(function () {
                $(e).html($(e).attr('reset'));
            }, 1000);
        }
    });
</script>