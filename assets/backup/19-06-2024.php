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
                <a id="link" href="https://google.com">über mich -></a>

                </button>
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
            margin-top: 240px;
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
        var greetings_langArray = ["Hello", "Hallo", "Bonjour", "Merhaba", "Boungiorno"];
        const greeting = document.getElementById('greeting');
        function changeText() {
            for (let i = 0; i < greetings_langArray.length; i++)  {
                greeting.innerText = greetings_langArray[i];
                console.log(greetings_langArray[i]);
                setTimeout('', 5000);
            }
        }
        changeText();
    </script>
</body>
</html>