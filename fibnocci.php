<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
    <style>
        body {
            background-color: maroon;
            text-align: center;
            color: white;
            font-family: sans-serif;
        }
        .output {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="output">
    <?php
    function fibonacciSeries($n) {
        $num1 = 0;
        $num2 = 1;
        echo "Fibonacci Series up to $n terms:<br><br>";
        for ($i = 0; $i < $n; $i++) {
            echo $num1 . " ";
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
        }
    }
    fibonacciSeries(20);
    ?>
</div>

</body>
</html>
