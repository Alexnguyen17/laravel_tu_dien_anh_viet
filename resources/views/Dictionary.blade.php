<!DOCTYPE html>
<html lang=vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Calculator</title>
</head>
<body>
<h2 style="color:blue;"> Từ Điển Anh - Việt </h2>
<form method="post" action="/login">
    @csrf
    <input type="text" name="search" placeholder="Nhập từ khóa và lấy búa đập phím Enter "/>
    <input style="color:red;" type="submit" id="submit" value="Tìm"/>
</form>
</body>
</html>