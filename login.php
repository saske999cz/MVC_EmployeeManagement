<?php
$act = $_REQUEST['ACT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="newstyle.css">
</head>
<body>
    
    <section id = "login">
        <form action='xulilogin.php?ACT=<?php echo $act?>' name="f1" method = 'post'>
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" id ="tx1">
        <input type="password" name="password" placeholder="Password" id ="tx2">
    <div id = "Buttons">
        <input type="submit" value="Login" id ="OK"/>
        <input type="button" value ="Clear" id ="RESET" onclick="ClearInfo()"/>
    </div>
        
    </form>
    </section>
    
    <script src="index.js"></script>
</body>
</html>