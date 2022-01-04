<?php
$error =  "";
$x = "";
$y = "";
$result ="";
			
				
				if(isset($_GET['operation'])){
					$x=$_GET['num1'];
					$y=$_GET['num2'];
					$op=$_GET['operation'];
                    if(is_numeric($x)&& is_numeric($y)){
                        switch($op){
                            case'+': $result = $x + $y;
                              break;
                            case'-': $result = $x - $y;
                                break;
                                case'*': $result = $x * $y;
                                break;
                                case'/': $result = $x / $y;
                                break;
                    }

				

					}
                    else
                    { 
                   $error ="Enter number first";
                    }

				}
		?>		
				

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
</head>
<body>
    <h1><?=$error?></h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <div>
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1"  value="<?=$x ?>">
</div>
<div> 
    <label for="num2">Number 2</label>
    <input type="number" name="num2" id="num2"  value="<?=$y ?>">
    
</div>
<div>
    <label for="result">Result</label>
    <input type="number" name="result"   value="<?=$result ?>"diabled>
    

    <div>
        <br>
        
<input type="submit" value="+" name="operation">
<input type="submit" value="-" name="operation">
<input type="submit" value="*" name="operation">
<input type="submit" value="/" name="operation">
            </div>
</body>
</html>