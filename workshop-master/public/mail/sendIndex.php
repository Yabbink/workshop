<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin: 0px 0;
        }

        #contact {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; 
        }
    </style>
</head>
<body>
    <div></div>
    <form id="contact" action="send.php" method="post">
        <h3>contact us</h3>
        <input placeholder="your name" name="name" type="text" tabindex="1"  autofocus><br>
        <input placeholder="your email adress" name="email" type="email" tabindex="2"  autofocus><br>
        <input placeholder="your phone number" name="tel" type="tel" tabindex="3"  autofocus><br>
        <button type="submit" name="submit">Submit Now</button>
    </form>
</body>
</html>