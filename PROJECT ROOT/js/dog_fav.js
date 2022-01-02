$(function() {
    $('body').on('click', '#addFav', function(e) {
        var dog_id = $(this).data('dogid');

        $.ajax({
            method: "POST",
            url: "./ajax/togglefav.php",
            dataType: 'json',
            data: { dog_id: dog_id }
        })
        .done(function( rtnData ) {
            console.log(rtnData);
            $('#addFav').text('Remove from favourites').attr('id', 'removeFav');
        });
    });
    $('body').on('click', '#removeFav', function(e) {
        var dog_id = $(this).data('dogid');

        $.ajax({
            method: "POST",
            url: "./ajax/togglefav.php",
            dataType: 'json',
            data: { dog_id: dog_id }
        })
        .done(function( rtnData ) {
            console.log(rtnData);
            $('#removeFav').text('Add to favourites').attr('id', 'addFav');
        });
    }); 
});