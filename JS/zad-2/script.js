$(document).ready(function()
{
    $('#send').click(function()
    {
        $('#result').html('');
        var name = $('#name').val();
        if(name.match(/\d+/) != null) $('#result').html('Тут циферки нашлися!');
        else if(name.split(' ').length != 3) $('#result').html('Слов либо много, либо мало.');
        else
        {
            var age = $('#age').val();
            if(age < 0 && age > 200) $('#result').html('Возраст неподходяйщий');
            else
            {
                if (age <= 6) $('#group').html('kid');
                else if (age >= 7 && age <= 17) $('#group').html('shkolota');
                else if (age >=  18 && age <= 21) $('#group').html('you can drink!');
                else if (age >= 22 && age <= 30) $('#group').html('army wait!');
                var born = $('#born').val().split('-');
                var now = new Date().getFullYear();
                if(now-born[0] != age) $('#result').html('С возрастом наврали!');
                else
                {
                    var month = new Date().getMonth()+1;
                    var day = new Date().getDate();
                    $('#result').html("ДР через: "+Math.abs(born[1]-month)+" мес, "+Math.abs(born[2]-day)+" дней");
                }
            }
        }

    });
});