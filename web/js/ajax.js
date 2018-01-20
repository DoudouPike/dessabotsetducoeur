$('.ajax-link').click(function(event) {
    event.preventDefault();
    var url = event.target.href;
    $.ajax({
        url: url
    })
    .done(function(response) {
        console.log(response);
        $('#ajax-content').html(response);
    })
    .fail(function(error) {
        console.log(error);
    });
})
