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
        class cars{
            public $car1;
            public $car2;
            function setdata($dat)
            {
                $this->car1 = $dat;
            }
            function getdata()
            {
                return $this->car1;
            }
        }
        $honda = new cars();
        $honda->setdata('Civic');
        echo $honda->getdata();
    ?>
</body>
</html>