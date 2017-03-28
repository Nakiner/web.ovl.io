function work(caller)
{
    var clrs = makeColors();
    caller = parseInt(caller.split('-')[1]);
    var one = caller-1;
    if(one < 0) one = 4;
    $('#div-'+one).css({ background: clrs });
    $('#div-'+(caller+1)%5).css({ background: clrs });
}
function makeColors()
{
    var numbs_one = new Array();
    var color_one = "rgb(";
    for(var i = 0; i < 3; i++)
    {
        numbs_one[i] = Math.floor((Math.random() * (255)));
        if(i == 0 || i == 1) color_one = color_one+numbs_one[i]+", ";
        else color_one = color_one+numbs_one[i]+")";
    }
    return rgb2hex(color_one);

}
function rgb2hex(rgb)
{
    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    function hex(x) {
        return ("0" + parseInt(x).toString(16)).slice(-2);
    }
    return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}