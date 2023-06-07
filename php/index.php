<?php include './includes/head.html'; ?>
<?php include './includes/header.html'; ?>
<?php include './includes/nav.html'; ?>




<hr>

<section class="center">



<?php

if(isset($_GET['address'])) {


  $page = $_GET['address'];

  if ($page === 'index.html') {
    include './includes/index.html';
  }

  else if ($page === 'aboutme.html') {
    include './includes/aboutme.html';
  }

  else if ($page === 'mydreams.html') {
    include './includes/mydreams.html';
  }

  else if ($page === 'mypassions.html') {
    include './includes/mypassions.html';
  }

  else {
    include './includes/erreur404.html';
  }

}



                // si c'est homepage
                //     alors on include homepage
                //     include './includes/homepage.html';
          

                //      sinon si c'est aboutme
                //     alors on include aboutme
                //     include './includes/aboutme.html';
  
                // sinon si c'est mydreams
                //     alors on include mydreams
                //     include './includes/mydreams.html';

                // sinon si c'est mypassions
                //     alors on include mypassions
                //     include './includes/mypassions.html';

                // sinon erreur 404
                //     alors on include la page 404
                //     include './includes/404.html';

            ?> 


</section>


<?php include './includes/footer.html'; ?>






</body>

</html>