<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員登入</title>
</head>
<body>
    <h1>會員登入</h1>
    <form action="login_api.php" method="post">
    <table class="wrapper" border="1">
        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="text" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td colspan="2" class="ct">
            <input type="submit" value="登入">
            <input type="reset" value="重寫"></td>
            

        </tr>
        <tr>
            <td colspan="2" class="ct">
                <a href="reg.php" class="reg">註冊會員</a>
                <a href="reg.php" class="reg"></a>
            </td>
            
        </tr>    
    </table>
    </form>
</body>
</html>