$('#work').click(function ()
{
    var wid = Math.floor((Math.random() * (500)+20));
    var hei = Math.floor((Math.random() * (500)+20));
    var x = Math.floor((Math.random() * ($(window).width()-wid)));
    var y = Math.floor((Math.random() * ($(window).height()-hei)));
    var clrs = makeColors();
    var bgBody = clrs[0];
    var bgDiv = clrs[1];
    $('#work').css({ left: x, top: y, width: wid, height: hei, background: bgDiv });
    $('body').css({ background: bgBody });
    if(clrs[3] !=  '') $('#work').css({ border: "10px solid "+clrs[3] });
});
function makeColors()
{
    var result = new Array();
    var numbs_one = new Array();
    var numbs_two = new Array();
    var color_one = "rgb(";
    var color_two = "rgb(";
    for(var i = 0; i < 3; i++)
    {
        numbs_one[i] = Math.floor((Math.random() * (255)));
        numbs_two[i] = Math.floor((Math.random() * (255)));
        result[3] = '';
        if(Math.abs(numbs_one[i] - numbs_two[i]) < 13)
        {
            if(numbs_one[i] < 127) result[3] = 'white';
            else result[3] = 'black';
        }
        else $('#work').css({ border: "0" });
        if(i == 0 || i == 1)
        {
            color_one = color_one+numbs_one[i]+", ";
            color_two = color_two+numbs_two[i]+", ";
        }
        else
        {
            color_one = color_one+numbs_one[i]+")";
            color_two = color_two+numbs_two[i]+")";
        }
    }
    result[0] = rgb2hex(color_one);
    result[1] = rgb2hex(color_two);
    return result;

}
$('#send').click(function ()
{
    $.ajax(
        {
            type: "POST",
            url: "brain.php",
            data:
                {
                    bgdiv: rgb2hex($('#work').css('background-color')),
                    bgbody: rgb2hex($('body').css('background-color'))
                },
            success: function (res)
            {
                if(res == 'ok') alert('Успешно сохранено в базе.');
                else if(res == 'fail') alert('Произошла ошибка.');
            }
        }
    );
});
function rgb2hex(rgb)
{
    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    function hex(x) {
        return ("0" + parseInt(x).toString(16)).slice(-2);
    }
    return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}