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
    <section id = "f3">
        <h1>Trang Chủ</h1>
        <div class = "slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">

                <div class="slide first">
                    <img src="../myPHP/Img/t4 1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="../myPHP/Img/t4 2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="../myPHP/Img/t4 3.png" alt="">
                </div>
                <div class="slide">
                    <img src="../myPHP/Img/t4 4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="../myPHP/Img/Trang Chu.jpg" alt="">
                </div>

                <div class ="navigation-auto">
                    <div class ="auto-btn1"></div>
                    <div class ="auto-btn2"></div>
                    <div class ="auto-btn3"></div>
                    <div class ="auto-btn4"></div>
                    <div class ="auto-btn5"></div>
                </div>


            </div>

            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
            </div>


        </div>


    </section>

    <script>
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter >5){
            counter = 1;
        }
      }, 5000)
        
    </script>
</body>
</html>