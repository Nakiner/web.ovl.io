function snake(width , height, length, time, reverse)
{
    var current = 0;
    var dx = 1;
    var dy = 0;
    var x = 0;
    var y = 0;
    var hasFood = false;
    var newEl = null;
    document.body.onkeydown = function(e)
    {
        if(reverse)
        {
            dx = ((e.keyCode - 38) % 2)*(-1);
            dy = ((e.keyCode - 39) % 2)*(-1);
        }
        else
        {
            dx = (e.keyCode - 38) % 2;
            dy = (e.keyCode - 39) % 2;
        }
    };
    var timer = setInterval(function ()
    {
        x = (x + dx) < 0 ? width - 1 : (x + dx) % width;
        y = (y + dy) < 0 ? height - 1 : (y + dy) % height;
        newEl = document.getElementsByClassName(y + '_' + x)[0];
        if(newEl.className.indexOf('s') > 0)//sdoh
        {
            clearInterval(timer);
            alert('Looser! Length: ' + length);
        }
        if(newEl.className.indexOf('f') > 0)
        {
            newEl.className = newEl.className.replace(' f', '');
            length++;
            hasFood = false;
        }
        newEl.className += ' s';//shaval
        newEl.setAttribute('data-n', current++);

        for(var i = 0, min = Infinity, item, items = document.getElementsByClassName('s'), len = items.length; i < len && len > length; i++)
        {
            if(+items[i].getAttribute('data-n') < min)
            {
                min = +items[i].getAttribute('data-n');
                item = items[i];
            }
        }
        if(!!item) item.className = item.className.replace(' s', '');
        for(var fX, fY; !hasFood; fX = Math.round(Math.random() * width % width), fY = Math.round(Math.random() * height % height)) //delaem edy
        {
            if(!!fX && !!fY && document.getElementsByClassName(fY + '_' + fX)[0].className.indexOf('s') < 0)
            {
                hasFood = true;
                document.getElementsByClassName(fY + '_' + fX)[0].className += ' f';
            }
        }
    }, time);

}
alert("Press button to start");
document.body.onkeydown = function(e)
{
    if(e.keyCode === 32) snake(40, 20, 3, 250, true);
    else snake(40, 20, 3, 250, false);
};