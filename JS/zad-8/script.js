var time = 1000;
function start(old = "")
{
    if(old != "") clearInterval(old);
	var color = createColor();
	var main = setInterval(function ()
	{
		var block = Math.round(Math.random() * 100);
		if(isClear($(".block-"+block).css("background-color")) == false)
		{
			color = createColor();
			if(time != 100) time -= 100;
			start(main);
		}
		$(".block-"+block).css({"background-color": color});
	}, time);
}
function createColor()
{
    var str = '#';
    for (var i = 0; i < 3; i++) {
        var color = Math.floor(Math.random() * 256).toString(16);
        str += color.length < 2 ? '0'+color : color;
    }
    return str;
}
function isClear(rgb)
{
	rgb = rgb.match(/^rgba\((\d+),\s*(\d+),\s*(\d+),\s*(\d+)\)$/);
	if(rgb == null) return false;
	else return true;
	function hex(x)
	{
		return ("0" + parseInt(x).toString(16)).slice(-2);
	}
}
start();