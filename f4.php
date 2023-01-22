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
    
    <section id = "f4">
        <input type="radio" name="radio-btn" id="f4radio1" hidden = "true">
        <input type="radio" name="radio-btn" id="f4radio2" hidden = "true">
        <input type="radio" name="radio-btn" id="f4radio3" hidden = "true">
        <input type="radio" name="radio-btn" id="f4radio4" hidden = "true">
        <input type="radio" name="radio-btn" id="f4radio5" hidden = "true">
            
                
        <img src="../myPHP/Img/t4 1.jpg" class ="small-img1"  alt="">
        <img src="../myPHP/Img/t4 2.jpg"  class ="small-img2"  alt="">
        <img src="../myPHP/Img/t4 3.png"  class ="small-img3"  alt="">
        <img src="../myPHP/Img/t4 4.jpg"  class ="small-img4"  alt="">
        <img src="../myPHP/Img/Trang Chu.jpg" class ="small-img5"  alt="">
        
    </section>

    <script>
        var counter = 1;
        setInterval(function(){
          document.getElementById('f4radio' + counter).checked = true;
          
          
          counter++;
          if(counter==4){
            scrollToBottom(100);
          }
          if(counter >5){
              counter = 1;
              scrollToTop(5000);
          }
          
            
          
          
        }, 5000)

        function scrollToBottom(timedelay=0) {
            var scrollId;
            var height = 0;
            var minScrollHeight = 200;
            scrollId = setInterval(function () {
                if (height <= document.body.scrollHeight) {
                    window.scrollBy(0, minScrollHeight);
                }
                else {
                    clearInterval(scrollId);
                }
                height += minScrollHeight;
            }, timedelay);           
        }

        function scrollToTop(timedelay=0) {
            var scrollId;
            var height = 0;
            var minScrollHeight = -300;
            scrollId = setInterval(function () {
                if (height <= document.body.scrollHeight) {
                    window.scrollBy(0, minScrollHeight);
                }
                else {
                    clearInterval(scrollId);
                }
                height += minScrollHeight;
            }, timedelay);           
        }
    </script>
</body>
</html>