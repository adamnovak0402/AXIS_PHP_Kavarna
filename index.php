<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">

    <title>Kočičí kavárna ve Zlíně</title>
</head>
<body>

<?php
require_once("layout/navigation.php");
?>

    <img src="images/logo.png" alt="AxisLogo">

    <h1>Kavárnička</h1>
    <p>Vítej v mé kavárně</p>
    
    <form>
        <label for="jidlo">Menu:</label> 
        <select id="jidlo" name="jidlo">
            <option value="">-- Vyberte jídlo --</option>
            <option value="cappuccino">Caprese </option>
            <option value="cheesecake">Salát caesar</option>
            <option value="croissant">Šunka sýr</option>
            <option value="croissant">Nic</option>
        </select>
    </form>

    <form>
        <label for="pití">Nápoj:</label>
        <select id="Nápoj" name="Napoj">
            <option value="">-- Vyberte Nápoj --</option>
            <option value="cappuccino">Espresso</option>
            <option value="latte">Latte Macchiato</option>
            <option value="latte">Ristreto</option>
            <option value="croissant">Nic</option>
        </select>
        <br>
        <button type="button" class="button">Objednat</button>
    </form>

    <dl>
        <p><b>jídlo</b></p>
        <dt>CAPRESE</dt>
        <dd>listový salát / kozí sýr pasterizovaný (Francie) / brusinkový džem</dd>
        <dt>SALÁT CAESAR</dt>
        <dd>římský salát / kuřecí prsa / parmazán / krutony / dressing: ančovičky, slunečnicový olej, vejce, koření, vinný ocet</dd>
        <dt>ŠUNKA – SÝR</dt>
        <dd>ricotta / listový salát / uzený losos norský
</dd>
        <p><b>Nápoj</b></p>
        <dt>Espresso</dt>
        <dd>malá káva 30ml / 7g</dd>
        <dt>Latté</dt>
        <dd>espresso s mlékem 250ml / 7g</dd>
        <dt>Ristreto</dt>
        <dd>extra malá káva 20ml / 7g</dd>
    </dl>

</body>
</html>