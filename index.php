<?php

require __DIR__ . "/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <title>Film</title>
</head>

<body>
  <div class="container text-center">
    <h1>Film</h1>
    <?php foreach ($movies as $movie) { ?>
      <div class="movie my-4 text-start">
        <?php echo ($movie->printInfo()) ?>
      </div>
    <?php } ?>
  </div>
</body>

</html>