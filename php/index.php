
<?php include './includes/header.html'; ?>
<?php include './includes/nav.html'; ?>




<hr>

<section class="center">



  <?php

  if (isset($_GET['address'])) {


    $page = $_GET['address'];

  
    if ($page === 'aboutme.html') {
      include './includes/aboutme.html';
    } else if ($page === 'mydreams.html') {
      include './includes/mydreams.html';
    } else if ($page === 'mypassions.html') {
      include './includes/mypassions.html';
    } 

    else if ($page === 'moncv.html') {
      include './includes/moncv.html';
    } 

    
    // else if ($page === 'homepage.html') {
    //   include './includes/homepage.html';}


    else {
      include './includes/erreur404.html';
    }

}
    else {
      include './includes/homepage.html';
    }
  

  ?>


</section>


<?php include './includes/footer.html'; ?>






</body>

</html>