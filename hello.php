<?php

?>
<head>
  <title>Аналитик тест</title>
</head>
<body>

<h2>Страница теста аналитики <h1>[ГЛАВНАЯ]</h1></h2>
<table>
<tr><td><a href="/page1.php">Пункт 1</a></td><td><a href="/page2.php">Пункт 2</a></td></tr>
</table>
<br/>
  <form name="f1" method="get" action="enter_data.php">
    <input name="link" type="hidden" value="index.php" />
    TEXT 1: <br />
    <input name="login" type="text" size="25" maxlength="30" value="Вася" /> <br />
    TEXT 1: <br />
    <input name="link" type="hidden" value="index.php" />
    TEXT 1: <br />
    <input name="link" type="hidden" value="index.php" />
    TEXT 1: <br />
    <input name="link" type="hidden" value="index.php" />
    TEXT 1: <br />
    <input name="link" type="hidden" value="index.php" />
    КОД: <br />
    <input name="pd" type="password" size="25" maxlength="30" value="" /> <br />
    <input type="submit" name="enter" value="Отправить" />
  </form>
</body>