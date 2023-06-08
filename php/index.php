<?php include './includes/head.html'; ?>
<?php include './includes/header.html'; ?>
<?php include './includes/nav.html'; ?>




<hr>

<section class="center">



  <?php

  if (isset($_GET['address'])) {


    $page = $_GET['address'];

    if ($page === 'index.html') {
      include './includes/index.html';
    } else if ($page === 'aboutme.html') {
      include './includes/aboutme.html';
    } else if ($page === 'mydreams.html') {
      include './includes/mydreams.html';
    } else if ($page === 'mypassions.html') {
      include './includes/mypassions.html';
    } else {
      include './includes/erreur404.html';
    }
  }

  ?>


</section>


<?php include './includes/footer.html'; ?>






</body>

</html>