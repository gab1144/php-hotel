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

    $data = $_GET;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>

  <title>Hotel</title>
</head>
<body>

<div class="container">

  <div class="row">
    <div class="col">
      <form action="./index.php" method="GET" class="d-flex">
        
      <div class="form-check">
          <input class="form-check-input" type="radio" name="parking" id="no-parking" value="0">
          <label class="form-check-label" for="no-parking">
            Senza parcheggio
          </label>
        </div>
        
        <div class="form-check">
          <input class="form-check-input" type="radio" name="parking" id="with-parking" value="1" checked>
          <label class="form-check-label" for="with-parking">
            Con parcheggio
          </label>
        </div>
        
        <div class="mb-3">
          <input name="stars" type="number" min="0" max="5">
        </div>

        <div class="mb-3 d-flex">
          <button class="btn btn-primary" type="submit">Cerca</button>
          <button class="btn btn-secondary" type="reset">Annulla</button>
        </div>

      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-8 offset-2">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Stelle</th>
            <th scope="col">Distanza dal centro</th>
          </tr>
        </thead>

        <tbody>
          <?php
            foreach($hotels as $key => $value){
              if(($data['parking'] == $value['parking']) || empty($data)){
                
                echo "<tr>";
                foreach($value as $key_hotel => $value_hotel){
                  if($key_hotel == 'parking'){
                    if($value_hotel == "true"){
                      echo "<td>Sì</td>";
                    } else {
                      echo "<td>No</td>";
                    }
                  } else {
                    echo "<td>$value_hotel</td>";
                  }
                }
                echo "</tr>";
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>