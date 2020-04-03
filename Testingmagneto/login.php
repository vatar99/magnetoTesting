<html>
<head>
    <title>Логин пользователя и регистрация</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">

<h2>Войти в профиль здесь</h2>
<form action="validation.php" method="post">
<div class="form-group">
<label>Имя пользователя</label>
<input type="text" name="user" class="form-control" required>
</div>

<div class="form-group">
    <label>Пароль</label>
    <input type="password" name="password" class="form-control" required>
    </div>
<button type="submit" class="btn btn-primary">Войти</button>
</form>
</div>

<div class="col-md-6 login-right">

    <h2>Регистрация профиля здесь</h2>
    <form action="registration.php" method="post">
    <div class="form-group">
    <label>Имя пользователя</label>
    <input type="text" name="user" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label>Пароль</label>
        <input type="password" name="password" class="form-control" required>
        </div>
    <button type="submit" class="btn btn-primary">Регистрация</button>
    </form>
    
    </div>
</div>
</div>
</div>
</body>
</html>