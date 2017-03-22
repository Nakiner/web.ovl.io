function play()
{
    var y = Math.floor((Math.random() * ($(window).height()-100)));
    var x = Math.floor((Math.random() * ($(window).width()-200)));
    $("#work").css(
    {
        top: y,
        left: x
    });
    /*onmousemove = function(e)
    {
        if()
    };*/

}