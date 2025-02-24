<?php
$name = "Miguel";
$isDev = true;
$age = 70;

$isOld = $age > 40;

define('LOGO_URL', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLgS1Qr9wvna1_RYOmDH3jjudoSSvwnp560w&s' );

$output = "Hola $name, con una edad de $age. 0_o";
$outputAge = match (true) {
    $age < 2 => "Eres un bebé, $name",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age == 18 => "Eres mayor de edad, $name",
    $age < 40 => "Eres un adulto joven, $name",
    $age < 60 => "Eres un adulto viejo, $name",
    default => "Hueles más a madera que a fruta, $name",
};

$bestLanguages = ["PHP", "JavaScript", "Python"];
$bestLanguages[]= "Java";
$bestLanguages[] = "TypeScript";
?>

<ul>
    <?php foreach($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>


<h2><?= $outputAge ?></h2>



<img src="<?= LOGO_URL ?>" alt="PHP logo" width ="200">
<h1>
<?= $output ?>
</h1>