<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Playfair:wght@300&display=swap"
    rel="stylesheet">  
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylepassions.css">

  <title>About Me</title>


</head>

<body>

<?php include './includes/header.html'; ?>
<?php include './includes/nav.html'; ?>




<hr>

  <?php

  if (isset($_GET['address'])) {


    $page = $_GET['address'];

    if ($page === 'homepage.html') {
      include './includes/homepage.html';} 
    else if ($page === 'aboutme.html') {
      include './includes/aboutme.html';
    } else if ($page === 'mydreams.html') {
      include './includes/mydreams.html';
    } else if ($page === 'mypassions.html') {
      include './includes/mypassions.html';
    } 
    

  
    else {
      include './includes/erreur404.html';
    }

}
  
  

  ?>




<?php include './includes/footer.html'; ?>






</body>
</html>

