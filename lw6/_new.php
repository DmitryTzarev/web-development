<HEAD><TITLE>Социологический опрос насчет курения</TITLE></HEAD>
<BODY>
<H1>Социологический опрос насчет курения</H1>
<FORM action="cgi-bin/smoketest.cgi">
<TABLE>
<TR><TD>Ваш возраст:</TD><TD><INPUT name="age"></TD></TR>
<TR><TD>Вы курите(Y/N):</TD>
    <TD><INPUT type="radio" name="smoke" value="Yes" checked>Да
        <INPUT type="radio" name="smoke" value="No">Нет</TD></TR>
<TR><TD>Как вы относитесь если рядом кто-то курит?</TD>
    <TD><SELECT name="sm_near">
        <OPTION value="0">Резко негативно
        <OPTION value="1">Негативно
        <OPTION value="2" selected>Мне все равно
        <OPTION value="3">Позитивно
        <OPTION value="4">Резко позитивно
        </SELECT>
    </TD></TR>
<TR><TD>Сколько вы выкуриваете в день?</TD>
    <TD><SELECT name="sm_day">
        <OPTION value="0">Ни сколько     
        <OPTION value="1">1 сигарету
        <OPTION value="2">2 сигареты
        <OPTION value="5">около 5
        <OPTION value="0.5pac">полпачки
        <OPTION value="pac">пачку
        <OPTION value="2pac">2 пачки
        <OPTION value="more">больше
        </SELECT>
    </TD></TR>
<TR><TD>Как давно вы начали курить?</TD>
    <TD><SELECT name="sm_stage">
        <OPTION value="noatall">Не начинал    
        <OPTION value="onetime">Бросил
        <OPTION value="0.5year">Полгода
        <OPTION value="1year">Год
        <OPTION value="2year">2 Года
        <OPTION value="5year">5 Лет
        <OPTION value="more">Больше
        </SELECT>
    </TD></TR>
<TR><TD>Считаете ли вы это опасным для своего здоровья?</TD>
    <TD><SELECT name="sm_danger">
        <OPTION value="0">Очень Опасно
        <OPTION value="1">Думаю,что да
        <OPTION value="2" selected>Не знаю
        <OPTION value="3">Может самую малость
        <OPTION value="4">Нет,Безопасно.
        </SELECT>
    </TD></TR>
<TR><TD>Хотите ли вы бросить?</TD>
    <TD><SELECT name="sm_nosmoke">
        <OPTION value="0">Уже бросаю
        <OPTION value="1">Думаю бросить
        <OPTION value="2" selected>Иногда
        <OPTION value="3">Очень Редко
        <OPTION value="4">Никогда.
        </SELECT>
    </TD></TR>
<TR><TD><INPUT type="submit" value="Послать Данные"></TD>
    <TD><INPUT type="reset" value="Очистить Форму"></TD></TR>
</TABLE>
</FORM>
</BODY></HTML>
