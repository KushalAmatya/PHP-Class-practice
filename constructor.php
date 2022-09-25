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
        class fruits{
            public $name;
            function __construct($name)
            {
                
                $this->name = $name;               
            }
            function getdata(){
                return $this->name;
            }
        }
        $banana = new fruits("Yellow");
        echo $banana->getdata();
    ?>
</body>
</html>