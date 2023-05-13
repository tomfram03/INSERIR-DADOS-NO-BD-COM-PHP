$(document).ready(function(){
    $.post('listUser.php', function(retorna){
        $('#list').html(retorna)
    })
})