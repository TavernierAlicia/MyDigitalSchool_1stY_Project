$('.commentaire-erreur').hide();
$('#comment').click(function(){
    comment= $('#contenu').val();
    if(comment!="") {
        html = "";
        $.ajax({
            url: 'core/forum/commentaire.php',
            type: 'POST',
            data: 'commentaire=' + comment + '&publication=' + publication,
            success: function (data) {
                info = JSON.parse(data);
                html = '<li class="media commentaire">' +
                    '<div class="list-item">' +
                    '<div class="media-left">' +
                    '<a class="media-image">' +
                    '<img src="uploads/users/' + info['photo'] + '" alt=""></a>' +
                    '</div>' +
                    '<div class="media-body">' +
                    '<div class="pull-left">' +
                    '<div class="info">' +
                    '<div class="reader item"><a href="#">' + info['comment'] + '</a></div>' +
                    '</div> </div>' +
                    '<div class="pull-right"></div>' +
                    '<div class="clearfix"></div>' +
                    '<div class="time">' + info['dateC'] + '</div>' +
                    '<div class="des"><p>' + info['contenu'] + '</p></div></div></div></li>';
                if ($('li').hasClass('commentaire')) {
                    $('.commentaire').append(html);
                } else {
                    $('.comment-list').html(html);
                }
                $('#contenu').val("");
                $('.commentaire-erreur').hide();
            }
        });
    }else{
        $('.commentaire-erreur').show();
    }
});