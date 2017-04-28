$(document).ready(function()
{
    $('.send').click(function ()
    {
        $.ajax({
                type: "POST",
                url: "index2.php",
                data:
                {
                    email: $('#inputEmail').val(),
                    pwd: $('#inputPassword').val()
                },
                success: function (res)
                {
                    var data = JSON.parse(res);
                    if(data.user == false) $("#msg").html("Bad login or password");
                    else
                    {
                        $('#menu').append("<li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#popup\">Hi, "+data.user+"</a></li>"+data.menu);
                        $("#yeah").html("<h1>Личный кабинет</h1>");
                    }
                }
        });
    });
});