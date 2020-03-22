<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title> Tp1</title>
    <style>
        h4{
            text-align:center;
            
        }
        .container{
            width:90;
        }
        .container>div{
            display:inline-block;
            width:33.33%;
            height:250px;
            background:0px solde #000;
        }
        .container>div>img{
            max-width:30%;
            height:200px;
        }
    </style>
</head>
<body>
    <h4>Délice des Fruits & Légumes</h4>
    <div class="container">
        <?php
            $image=['1.png','2.png','3.png','4.png','5.png','6.png','7.png','8.png','9.png'];
            shuffle($image);
            foreach($image as $i)
                echo "<div><img src='$i'></div>";
        ?>
    </div>
</body>
</html>