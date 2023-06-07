<?php include './includes/head.html'; ?>
<?php include './includes/header.html'; ?>
<?php include './includes/nav.html'; ?>




<hr>

<section class="center">


<?php

        
                si c'est homepage
                    alors on include homepage
                    include './includes/homepage.html';
                  


                     sinon si c'est aboutme
                    alors on include aboutme
                    include './includes/aboutme.html';
  
                sinon si c'est mydreams
                    alors on include mydreams
                    include './includes/mydreams.html';

                sinon erreur 404
                    alors on include la page 404
                    include './includes/404.html';

            ?>


</section>


<?php include './includes/footer.html'; ?>






</body>

</html>