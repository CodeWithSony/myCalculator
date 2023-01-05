<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php calculator</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .mainContainer{
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center:
            justify-content: center;
            width: 100vw;
        }
        .container{
            margin: auto;
            border-radius: 12px;
            background: green;
             width: 53vw;
            height: 60vh;
            display: flex;
        }
        .resultContainer{
            display: flex;
    justify-content: center;
    align-items: center;
        }
        .resultContainer > p{
            /* margin-top: -170px; */
            margin-top: -160px;
    word-wrap: break-word;
    font-size: 23px;
            color: white;
            font-weight:bold;
            font-family: sans-serif;
        }
        .subContainer{
            width: 50%;
            height: 100%;
        }
        .box1{
            border-radius: 12px;
            background: blue;
            display: flex;
            color: white;
            font-family: sans-serif;
            align-items: center;
            justify-content: center;
        }
        .box2{
            border-radius: 12px;
            background: blue;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* justify-content: space-evenly; */
        }
        
        /* for inputs */
        input, select {
            text-align: center;
/* margin-top: -22px; */
            width: 25vw;
    padding: 9px;
    margin-top: 30px;
}
input[type=text] {
    font-size: 19px;
    font-weight: bolder;
}
input[type=submit] {
    font-size: 19px;
    font-weight: bolder;
    background: red;
}
option{
    font-size: 21px;
    font-weight: bolder;
}
        .sub{
            margin-bottom: 50px;
        }
select{
    font-size: 19px;
}
    </style>
</head>
<body>
<div class="mainContainer">

 <div class="container">
    <div class="subContainer box1">
        <h2>php CALCULATOR</h2>
    </div>
    <div class="subContainer box2">
        <form method="POST">
        <div class="app-form-group">
            <input type="text" name="num1" class="app-form-control" placeholder="Enter a number">
        </div>

        <div class="app-form-group">
            <input type="text" name="num2" class="app-form-control" placeholder="Enter a number">  
        </div>

        <div class="select-style">
            <select name="operation" id="">
                <option value="add">ADD</option>
                <option value="sub">SUB</option>
                <option value="mult">MULT</option>
                <option value="div">DIV</option>
            </select>
        
        </div>
        
        <div class="app-form-group">
            <input type="submit" value="submit" name="submit" class="sub">
        </div>
        </form>

    </div>
 </div>
 <div class="resultContainer">
    <p>
        <?php
       if (isset($_POST['submit'])) {
          $num1  = $_POST['num1'];
          $num2  = $_POST['num2'];
        //   echo "{$num1} {$num2}";
          $operation = $_POST['operation'];
       }

       switch ($operation) {
        case "add": $sum = $num1 + $num2;
        echo "The addition of two number is {$sum}";
        break;

        case "sub": $sub = $num1 - $num2;
        echo "The substraction of two number is {$sub}";
        break;

        case "mult": $mult = $num1 * $num2;
        echo "The division of two number is {$mult}";
        break;

        case "div": $div = $num1 / $num2;
        echo "The division of two number is {$div}";
        break;

        default: echo "Sorry it's not exist...";


       }
        ?>
    </p>
 </div>
</div>
    <?php


    ?>
</body>
</html>