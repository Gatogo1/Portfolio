Thanks for downloading this template!

Template Name: Personal
Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
Author: BootstrapMade.com
License: https://bootstrapmade.com/license/
    <?php 
             $sql=mysqli_query($conn,"select * from project");

             while ($row=mysqli_fetch_array($sql)) {
              $data= $row['id'];
              $link="portfolio-details.php?id=".urlencode(base64_encode($data));
        
        ?>
        <div class="col-lg-4 col-md-6 portfolio-item <?php echo $row['category'] ?>">
          <div class="portfolio-wrap">
            <img src="admin/upload/<?php echo $row['image'] ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo $row['tittle'] ?></h4>
              <p>Client : <?php echo $row['client'] ?></p>
              <div class="portfolio-links">
                <a href="admin/upload/<?php echo $row['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.php"  data-gallery="portfolioDetailsGallery" data-lightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php }?>