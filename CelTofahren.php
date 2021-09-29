<?php
class Weather{
    private static $tempCond = ['it\'s cold','it\'s mild','it\'s warm'];
    public static function CelToFar($c)
    {
        $z = $c * 9 / 5 + 32;
        echo "temp in fahrenheit is $z. ". Weather::DetCon($z);
        return $z;
    }
    
    public static function DetCon($f)
    {
        if ($f < 40){
            return self::$tempCond[0]; //cold
        }else if($f < 70){
            return self::$tempCond[1]; //mild
        }else{
            return self::$tempCond[2]; //warm
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>