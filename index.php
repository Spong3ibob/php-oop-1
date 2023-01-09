<?php
class Movies {
    public $name;
    public $lenght;
    public $type;
    public $year;
    private $age;

    public function __construct($_name, $_lenght, $_type, $_year)
    {
        $this -> name = $_name;
        $this -> lenght = $_lenght;
        $this -> type = $_type;
        $this -> year = $_year;

    }

    public function setAge($age) {
        if($age > 18 != "vietato ai minori");
        $this->age = $age;
    }
    public function getAge() {
       return $this->age;
    }
}

$avatar = new Movies("AVATAR LA VITA DELL' ACQUA","3h 12m","Sci-fi/Azione","2022" );
// $avatar -> name = ;
// $avatar -> lenght = ;
// $avatar -> type = ;
// $avatar -> year = ;
$avatar -> setAge("27");
var_dump($avatar)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
</head>
<body>
    <h1><?php echo $avatar -> name; ?></h1>
    <h3>Anno di uscita: <?php echo $avatar -> year; ?></h3>
    <h3>Dutata: <?php echo $avatar -> lenght; ?></h3>
    <h2>Tipologia: <?php echo $avatar -> type; ?></h2>
    <h2>Età: <?php echo $avatar ->getAge(); ?></h2>

</body>
</html>