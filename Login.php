<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Management</title>
    <link rel="stylesheet" href="Login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="login-div">
        <form class="login-form" action="homepage.php" method="post">
            <img class="logo_text" src="Source/img/UTT_Logo.png" alt="" width="150px">
            <h1>ĐĂNG NHẬP</h1>    
            <div class="form-group">
                <div class="input-container">
                    <input class="form_control" type="text" id="username" name="username" placeholder="Nhập tên đăng nhập">
                </div>
            </div>
            <div class="form-group">
                <div class="input-container">
                    <input class="form_control type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                </div>
            </div>
            <button type="submit"><h3>ĐĂNG NHẬP</h3></button> 
        </form>
    </div>
</body>
</html>