<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    perfectNum(7);
    primeNum(3);
   reverseNumber(12);
   generateDistictTotalRandomNum();
   stopWatch();
    function perfectNum($factNum){
        $factors = array();
        $sum = 0;
        $consecFact = 0;
        for($index = 1; $index<=$factNum; $index++){
            if($factNum%$index === 0){
                $factors[$consecFact] = $index;
                $consecFact++;
            }
        }
        for($index = 0; $index<count($factors)-1; $index++){
            $sum = $sum + $factors[$index];
        }
        if($sum === $factNum){
            echo "perfect number";
        }
        else{
            echo "not perfect number";
        }
    }
    function primeNum($primeNumber){
        for($index = 2; $index<=$primeNumber; $index++){
            if($primeNumber%$index === 0){
                break;
            }
        }
        if($index === $primeNumber){
            echo "<p>number is prime</p>";
        }
        else{
            echo "<p>number is not prime</p>";
        }
    }
     function reverseNumber($reverseNum){
        echo "number is reversed ";
       while($reverseNum){
        $remainder = $reverseNum%10;
        echo $remainder;
        $num = $reverseNum/10;
        $numA = (int)$num;
        $reverseNum = $numA;
       }
    }
    function generateDistictTotalRandomNum(){
    $coupen = array(12, 15, 18, 14, 11);
    $index = 0;
    $count = 0;
    while($index<count($coupen)){
        $num = rand(1, 100);
        if($coupen[$index] === $num){
            $index++;
        }
        $count++;
    }
    echo "<p>random numbers are $count</p>";
    } 
    function stopWatch(){
        $startTime = mktime(1,  15, 23, 0, 0, 0);
        $endTime = mktime(2, 5, 15, 0, 0, 0);
        $elapse = ($endTime-$startTime)/1000;
        echo $elapse;
        
    }
    ?>
</body>
</html>