<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="icon" href="assets/pictures/icon.ico" type="image/x-icon">
</head>
<body>
    <div class="ui">
        <div class="leftUI">            
                <p id="greeting">Hallo</p>
                <p id="name">Ich bin Sinan</p>
                <!--<button onclick="window.location.href='https://www.google.com';">-->
                <a id="link" href="aboutme.html">über mich -></a>
        </div>
        <div class="mePic"></div>
    </div>

    <style>
        body    {
            font-family: 'Calibri', 'Arial', sans-serif;
        }
        .leftUI {
            position: relative;
        }
        #link   {
            display: inline-block;
            padding: 10px 35px;
            margin-left: 145px;
            margin-top: 465px;
            color: white;
            font-size: 26px;
            text-align: left;
            text-decoration: none;
            border-radius: none;
            background-color: lawngreen;

        }
        #greeting    {
            font-size: 160px;
            position: absolute;
            margin-top: 220px;
            margin-left: 140px;
        }
        #name    {
            font-size: 40px;
            position: absolute;
            margin-top: 400px;
            margin-left: 150px;
        }
    </style>
    <script>

        var greetings_langArray = ["Hallo", "Hello", "Bonjour", "Buongiorno", "こんにちは ", "你好 ", "안녕하세요 ", "Привет ", "Merhaba", "Helló", "Hej", "Hei", "Здраво", "Zdravo", "Ahoj", "Zdravo", "Cześć", ];
        const greeting = document.getElementById('greeting');
        let index = 0;

        function changeText() {
            greeting.innerText = greetings_langArray[index];
            index = (index + 1) % greetings_langArray.length;
        }
        setInterval(changeText, 5000);
    </script>
</body>
</html>