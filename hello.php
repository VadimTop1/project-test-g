<?php

?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Google Tag Manager -->
    <!-- Текущая версия: GTM-PXQ8ST9 -->
    <!-- Старая версия: GTM-KPMLLHJ-->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PXQ8ST9');</script>
    <!-- End Google Tag Manager -->



    <title>Аналитик тест</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <!-- Текущая версия: id=GTM-PXQ8ST9 -->
    <!-- Старая версия: id=GTM-KPMLLHJ -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXQ8ST9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <h2>Страница теста аналитики <h1>[ГЛАВНАЯ]</h1></h2>
    <br/><br/>
    <table>
        <tr><td><a href="/page1.php">Пункт 1</a></td><td><a href="/page2.php">Пункт 2</a></td></tr>
    </table>
    <br/>
    <div id="telId"><b>Телефон 1:</b> 001278989</div>
    <br/>
        <form id="f1" method="post" action="#">
            <label for="login">First Name: </label>
            <br />
            <input name="login" type="text" size="25" maxlength="30" value="Вася" />
            <br />
            <br />
            <label for="text1">Text 1: </label>
            <br />
            <input name="text1" type="text" size="25" maxlength="30" value="Вася" />
            <br />
            <br />
            <label for="text2">Text 2: </label>
            <br />
            <input name="text2" type="text" size="25" maxlength="30" value="Вася" />
            <br />
            <br />
            <label for="pd">Код: </label>
            <br />
            <input name="pd" type="password" size="25" maxlength="30" value="" />
            <br />
            <br />
            <input type="submit" name="enter" value="Отправить" />
        </form>

    <i class="fa fa-bars button_form" aria-hidden="true"></i>
    <div id="form_board">
        <form id="f2" method="post" action="#">
            <label for="name">Введите имя: </label>
            <br />
            <input name="name" type="text" size="25" maxlength="30" value="" required/>
            <br />
            <br />
            <label for="mail">Введите свою почту: </label>
            <br />
            <input name="mail" type="email" placeholder="mail@example.com" required/>
            <br/>
            <label for="fileNew">Выберите файл: </label>
            <br/>
            <input type="file" name="fileNew">
            <br />
            <label for="pdf2">Готовы принять условия: </label>
            <br />
            <input type="checkbox" name="pdf2" value="1" required>
            <br />
            <br />
            <input type="submit" name="enter" value="Отправить" />
        </form>
    </div>
</body>
    <div id="tel2Id"><b>Телефон 2:</b> 2223278449</div>
    <script src="main.js"></script>