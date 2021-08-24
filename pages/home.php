<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include 'components/general/head.php'; ?>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <?php 
        // ADD PRELOADER PHP
        include 'components/general/preloader.php'; 
    ?>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php
        include 'components/general/topbar.php'; 
    ?>
    <!-- Page Content -->

    <!-- Banner Starts Here -->
    <?php
        include 'components/general/banner.php'; 
    ?>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Classes</h2>
              <!-- <a href="products.html">view all products <i class="fa fa-angle-right"></i></a> -->
            </div>
          </div>

          <?php
            if(!isset($listClasses) || count($listClasses) <= 0){
                    echo "<tr><td colspan='8'>No Records found</td></tr>";
            } 
            else {
                foreach($listClasses as $row) {
                    echo '<div class="col-md-4">
                            <div class="product-item">
                            <<img src="'.$_ENV['TARGET_DIR'].$row['image'].'" alt="">
                            <div class="down-content">
                                <h4>'.$row['class_name'].'</h4>
                                <h6>₱ '.$row['price'].'</h6>
                                <button type="button" class="btn btn-success btn-rounded">
                                    <i class="fa fa-plus-circle"></i> Add To Cart
                                </button>
                            </div>
                            </div>
                        </div>';
                }
            }
            ?>
         
        </div>
      </div>
    </div>
   
    <?php 
        // ADD FOOTER PHP
        include 'components/general/footer.php'; 
    ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
