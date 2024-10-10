<?php 

    require_once __DIR__ . "/classes/Animal.php";
    require_once __DIR__ . "/classes/Lion.php";
    require_once __DIR__ . "/classes/Monkey.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 8 OOP 2</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <main class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="fw-bold text-center p-4">
                    PHP OOP 2 : Ereditarieta' -> inheritance
                </h1>
            </div>
            <div class="col-6 card" >
                <div class="card-body">
                    <p>
                        <?php 
                        $animal = new Animal("Giaguaro", "Foresta Amazzonica", 70, "https://as1.ftcdn.net/v2/jpg/01/29/82/68/1000_F_129826834_cgeIt3BZYt9BKExiE9lWkC7UjCv89icc.jpg");
                        var_dump($animal) ?>
                    </p>
                </div>
            </div>
            
            <div class="col-6 card" >
                <div class="card-body">
                    <p>
                        <?php 
                            $lion = new Lion("Congo", 155.44, "...", "folta e rossa", "Branco XX7U");
                            $macaca = new Monkey("Castle", 14, "https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Macaque_India_3.jpg/800px-Macaque_India_3.jpg", true, "Branco dei Re");
                            var_dump($lion);
                        ?> 
                    </p>
                </div>
            </div>

            <?php 
                var_dump($macaca); 
                var_dump($animal->eat()); 
                var_dump($lion->eat());
                var_dump($macaca->eat());
                var_dump(Animal::$type);
            ?>
        </div>
    </main>

</body>
</html>