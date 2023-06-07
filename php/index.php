<?php include './includes/head.html'; ?>
<?php include './includes/header.html'; ?>
<?php include './includes/nav.html'; ?>




<hr>

<section class="center">


<?php

                si c'est le homepage
                    alors on include le homepage
                    include './includes/homepage.html';

                      //  sinon si c'est la page 1
                    // alors on include la page 1
                    // include './includes/page1.html';

                // sinon si c'est la page 2
                    // alors on include la page 2
                    // include './includes/page2.html';

                // sinon erreur 404
                    // alors on include la page 404
                    // include './includes/404.html';

            ?>


</section>


<?php include './includes/footer.html'; ?>






</body>

</html>