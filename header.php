<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/mmm.png" width="80" height="80" class="d-inline-block align-top mr-2" alt="" loading="lazy">
           
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/">Главная</a>
                <a class="nav-item nav-link" href="/calc.php">Новости</a>
                <a class="nav-item nav-link" href="/about.php">О нас</a>
                <a class="nav-item nav-link" href="/contact.php">Контакты</a>
                <a class="nav-item nav-link" href="/employees.php">Сотрудники</a>
            </div>
            <div class="navbar-nav ml-auto">
                <?php
                function makeItem($name, $link) {
                    return ['name' => $name, 'link' => $link];
                }
                $arr = [
                    makeItem('Админ панель', '/dashboard.php'),
                    makeItem('Выйти', '/logout.php')
                ];
                if (isset($_SESSION['uid'])) {
                    foreach($arr as $i)
                        echo '<a class="nav-item nav-link" href="'.$i["link"].'">'.$i["name"].'</a>';
                } else {
                    echo '<a class="nav-item nav-link" href="/login.php">Войти</a>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>