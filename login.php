<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
    <script src="login.js"></script>
</head>
<body> 
    <h3>Provera da li je cekiran chackbox (uslovi koriscenja, pravilnik upotrebe...)<br>
    Kao i da li su email i lozinka uneti.</h3>
    <input type="text" name="email" id="email" placeholder="Unesite email"><br><br>
    <input type="password" name="lozinka" id="lozinka" placeholder="Unesite lozinku"><br><br>
    <input type="checkbox" name="pitanje" id="pitanje"> Slazem se sa uslovima.<br><br>
    <button type="button" onclick="provera();">Login</button><br><br>
    <div id="odgovor"></div>
</body>
</html>