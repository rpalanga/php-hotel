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





$parking = isset($_GET['parking']);

if($parking){
    
    $parking_filter = array_filter($hotels, function ($hotel) {
        return $hotel['parking'] === true;
    });
};

// $stars = isset($_GET['vote']);

// if($stars ){
//     $stars_filter = array_filter($hotels, function ($hotel){
//         return $hotel['vote']== $value;
//     })
// }



?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-hotel</title>

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container my-3  ">
        <h1 class="text-center my-4 fw-bolder fs-1 bg-danger-subtle rounded-2 " style=" color:chocolate">Scegli il Miglior Hotel <br><small>per te</small></h1>

        <table class="table my-3 border">
            <thead class="bg-body-secondary ">
                <tr >
                    <th scope="col" style="color:brown">Name</th>
                    <th scope="col" style="color:brown">Description</th>
                    <th scope="col" style="color:brown">Parking</th>
                    <th scope="col" style="color:brown">Vote</th>
                    <th scope="col" style="color:brown">Distance</th>

                </tr>


            </thead>
            <tbody>
                <?php

                foreach ($hotels as $CurrentElement) {
                    echo "
                     <tr>";

                    foreach ($CurrentElement as $key => $value) {

                        echo  " 
                            <th>$value</th> 
                            ";
                    }


                    echo "        

                        </tr>";
                };
                ?>


            </tbody>
        </table>
                <!-- metodo per selezione parcheggio -->
        <form method="GET">
            <input type="checkbox"  name="parking" >
            <label name="parking"> Alberghi con il parcheggio </label><br>
            <button type="submit" class="btn btn-danger">Applica Filtro</button>
        </form>
       


        <table class="table my-3 border " action="" method="GET">
            <thead class="bg-body-secondary ">
                <tr >
                    <th scope="col" style="color:brown">Name</th>
                    <th scope="col" style="color:brown">Description</th>
                    <th scope="col" style="color:brown">Parking</th>
                    <th scope="col" style="color:brown">Vote</th>
                    <th scope="col" style="color:brown">Distance</th>

                </tr>


            </thead>
            <tbody>
                <?php

                    foreach ($parking_filter as $hotel) {
                        echo "<tr>";
                        echo "<th>" . $hotel['name'] . "</th>";
                        echo "<th>" . $hotel['description'] . "</th>";
                        echo "<th>" . $hotel['parking'] . "</th>"; 
                        echo "<th>" . $hotel['vote'] . "</th>";
                        echo "<th>" . $hotel['distance_to_center'] . "</th>";
                        echo "</tr>";
                    }

            
                ?>


                </tbody>
            </table>

            <!-- fine metodo selezine parcheggio -->

            <!-- metodo selezione value -->
<!-- 
        <form method="GET">
            <input type="number" name="vote" min="1" max="5">
            <label name="vote"> Alberghi con il parcheggio </label><br>
            <button type="submit" class="btn btn-danger">Applica Filtro</button>
        </form>
       


        <table class="table my-3 border " action="" method="GET">
            <thead class="bg-body-secondary ">
                <tr >
                    <th scope="col" style="color:brown">Name</th>
                    <th scope="col" style="color:brown">Description</th>
                    <th scope="col" style="color:brown">Parking</th>
                    <th scope="col" style="color:brown">Vote</th>
                    <th scope="col" style="color:brown">Distance</th>

                </tr>


            </thead>
            <tbody>
                <?php

                    foreach ($star_filter as $hotel) {
                        echo "<tr>";
                        echo "<th>" . $hotel['name'] . "</th>";
                        echo "<th>" . $hotel['description'] . "</th>";
                        echo "<th>" . $hotel['parking'] . "</th>"; 
                        echo "<th>" . $hotel['vote'] . "</th>";
                        echo "<th>" . $hotel['distance_to_center'] . "</th>";
                        echo "</tr>";
                    }

            
                ?>


                </tbody>
            </table> -->



    </div>






    <!-- boostrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>