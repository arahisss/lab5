<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>Лабораторная 1</title>
</head>

<body>    
    <?php
        if (! ($conn_id = @mysql_connect("localhost", "user", "pass")))
            die("Cannot")
    ?>
    <section class="section">
        <div class="container">
            <header class="header">
                <a class="header__logo" href="index.html">MyPage</a>

                <nav class="nav">
                    <a class="nav__link" href="index.html">Главная</a>
                    <a class="nav__link" href="#">Контакты</a>
                    <a class="nav__link" href="feedback.html">Обратная связь</a>
                    <a class="nav__link login-button" href="auth.html">Войти</a>
                    
                </nav>
            </header>
    
            <main>
                <div class="content">
                    <h1>Загляните вглубь природы</h1>
                    <h2>Природа выдержит самый тщательный осмотр.
                        Она предлагает нам взглянуть на ее самый маленький лист и взглянуть на ее равнину, как на насекомое.</h2>
                    <a class="learn_more" href="#">Узнать больше</a>
                </div>
            </main>

            <footer class="footer">
            
                <nav class="nav">
                    <a class="nav__link" href="#">Главная</a>
                    <a class="nav__link" href="#">Контакты</a>
                    <a class="nav__link" href="feedback.html">Обратная связь</a>

                </nav>
        
            </footer>
        </div>
    </section>

        

    </body>
</html>