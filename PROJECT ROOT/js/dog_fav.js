$(function() {
    $('body').on('click', '#addFav', function(e) {
        var breed_id = $(this).data('breedid');

        $.ajax({
            method: "POST",
            url: "./ajax/togglefav.php",
            dataType: 'json',
            data: { breed_id: breed_id }
        })
        .done(function( rtnData ) {
            console.log(rtnData);
            $('#addFav').text('Remove from favourites').attr('id', 'removeFav');
        });
    });
    $('body').on('click', '#removeFav', function(e) {
        var breed_id = $(this).data('breedid');

        $.ajax({
            method: "POST",
            url: "./ajax/togglefav.php",
            dataType: 'json',
            data: { breed_id: breed_id }
        })
        .done(function( rtnData ) {
            console.log(rtnData);
            $('#removeFav').text('Add to favourites').attr('id', 'addFav');
        });
    }); 
});