<?php $header_id = "intro"; $header_title = "Farm Fresh"; $header_description = "Local food and artisanal goods brought to Cornell University with perfection since 2010."; $page_title="Home Page"; include 'include/header.php';?>
      <section id="overview">
        <div class="sm-container">
            <div class="row">
              <div class="col-3">
                <div class="icon-sustainable">
                  <img src="img/icons/group.png" alt="group of people icon">
                  <div class="icon-text">Supports healthy communities</div>
                </div>
              </div>
              <div class="col-3">
                <div class="icon-sustainable">
                  <img src="img/icons/sprout.png" alt="sprout plant out of hand">
                  <div class="icon-text">Promotes Sustainability</div>
                </div>
              </div>
              <div class="col-3">
                <div class="icon-sustainable">
                  <img src="img/icons/tractor.png" alt="tractor icons">
                  <div class="icon-text">Increased access to nutritious food</div>
                </div>
              </div>
              <div class="clearfix"></div>
                <p>Our mission is to organize and plan a weekly Farmers' market on Cornell's campus that allows for students, faculty, staff and the local community to come together to purchase and enjoy local goods and products. The Farmers' Market at Cornell is working to bridge the Ithaca community and Cornell, while building a greater appreciation for food that is fresh and locally sourced.</p>
            </div>
        </div>
      </section>
      <section id="where" >
        <div class="row">
          <div class="where-when">
            <div>
              <h3>Where and When?</h3>
              <p>We are located on west side of the Ag Quad every Thursday on the Arts Quad from 11-2 on Cornell campus.</p>
              <button type="button" id="get-directions" class="black-button">Get directions</button>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>
      <section id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="gallery-img">
                <img src="img/gallery/carrots.jpg" alt="Carrots">
              </div>
            </div>
            <div class="col-3">
              <div class="gallery-img">
                <img src="img/gallery/hunny.jpg" alt="Carrots">
              </div>
            </div>
            <div class="col-3">
              <div class="gallery-img">
                <img src="img/gallery/peach.jpg" alt="Carrots">
              </div>
            </div>
            <div class="col-3">
              <div class="gallery-img">
                <img src="img/gallery/pumkin.jpg" alt="Carrots">
              </div>
            </div>
            <div class="col-3">
              <div class="gallery-img">
                <img src="img/gallery/tomatoes.jpg" alt="Carrots">
              </div>
            </div>
            <div class="col-3">
              <div class="gallery-img">
                <img src="img/gallery/veggies.jpg" alt="Carrots">
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>
      <section id="options">
        <div class="container">
          <div class="option-container">
          <div class="row">
            <a href="#">
              <div class="col-3">
                <div class="option-set">
                  <h6>Want to join our team?</h6>
                  <p>We are currently hiring in three different positions.</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="col-3">
                <div class="option-set">
                  <h6>View vendors</h6>
                  <p>View our vendors from both Cornell and the Ithaca community.</p>
                </div>
              </div>
            </a>
            <div class="col-3">
              <div class="option-set">
                <h6>Join our email list</h6>
                <input type="email" name="email" id="join-email" placeholder="Enter your email here">
                <button type="submit" id="submit-email" class="black-button">Join</button>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          </div>
        </div>
      </section>
<?php include 'include/footer.php' ?>
