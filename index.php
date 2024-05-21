<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body class="ms_bg-black">
    <div class="container mt-5">
        <div class="row justify-content-center py-3 g-3 row-cols-1 row-cols-md-3">
            <?php foreach ($hotels as $key => $cur_hotel) { ?>

                <div class="col">

                    <div class="card text-center">
                        <div class="card-header">
                            <?php echo $cur_hotel["name"] ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $cur_hotel["description"] ?></p>
                            <p class="card-text">
                                <?php
                                for ($i=0; $i < $cur_hotel["vote"]; $i++) { 
                                    echo '<i class="fa-solid fa-star"></i>';
                                }
                                ?>
                            </p>
                            <p class="card-text">Distanza dal centro <?php echo $cur_hotel["distance_to_center"]; ?> km</p>
                            <p class="card-text"><?php echo $cur_hotel["parking"] ?  "Parcheggio riservato" : "Parcheggio in strada" ?></p>

                            
                        </div>

                    </div>


                </div>

            <?php } ?>
        </div>

    </div>
    </div>
</body>

</html>