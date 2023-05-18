$('button').click(function(){
    $.ajax({
        url:'router/router.php?ind=login',
        data:$('form').serialize(),
        type:'POST',
        success:function(result){
            if(result == 'error'){
                $('#status').html('Invalid username or password')
            }else{
                $('#status').html('Logged In Successfully')
                window.location.href = 'chatroom.php'
            }
        }
    })
})