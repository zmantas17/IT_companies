<?php
    use OOP\Manual;
    use OOP\Programmer;
    use OOP\Tester;
    use OOP\Render;
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT imonės</title>
</head>
<body>
    <?php
    $person0 = new Manual('Mick', 'Micksen1337@one.lt', '19');
    $person0->addLocation('Germany');

    $person1 = new Programmer('Michael', 'michael@yandex.lt');
    $person1->addLocation('Sweden');
    $person1->setSalary(1515.55);

    $person2 = new Tester ('Vardenis', 'vardenis@gmail.com');
    $person2->addLocation('Lietuva');
    $person2->setSalary(450.55);
    $person2->addTask('Clean up code');
    $person2->addTask('Clean the dishes');


    Render::PrintInfo($person0->getInfo());
    echo '<br>';
    Render::PrintInfo($person1->getInfo());
    echo '<br>';
    Render::PrintInfo($person2->getInfo());
    ?>
</body>
</html>