$(document).ready(function(){
    $('#email').blur(function(){
        var username = $(this).val();
        $.ajax({
            url:"Signup.php",
            method:"POST",
            data:{email:email},
            dataType:"text",
            success:function(html)
            {
                $('warning').html(html);
            }
        });
    });
});