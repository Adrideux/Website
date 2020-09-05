<?php require 'templates/layout/default.php' ?>
    <form action="login.php" method="post">
        <input type="text" name="mailuid" placeholder="Username/E-mail" />
        <input type="password" name="mailuid" placeholder="password" />
        <button type="login" name="login-submit">Login</button>
    </form>
<?php require 'templates/layout/footer.php' ?>
