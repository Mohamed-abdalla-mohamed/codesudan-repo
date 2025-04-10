 <!-- Carousel -->
 <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel"
      style="margin-top: 90px;padding:5px;background-color:#2498D3;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item   active" style="padding: 0px 30px 0px 50px ;">
          <img src="../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (1).jpg" class="d-inline-block w-60"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              <?php echo $data->rozaytStore; ?>
            </h1>
            <h6 class="text-right text-danger">
              <?php echo $data->accessors . '<br>' . $data->and . '<br>' . $data->perfums; ?>
            </h6>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 30px 0px 50px ;">
          <img src="../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (2).jpg" class="d-inline-block w-60"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              <?php echo $data->rozaytStore; ?>
            </h1>
            <h1 class="text-right text-success">
              <?php echo $data->clothes . '<br>' . $data->and . '<br>' . $data->bags; ?>
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 30px 0px 50px ;">
          <img src="../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (3).jpg" class="d-inline-block w-60"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              <?php echo $data->rozaytStore; ?>
            </h1>
            <h1 class="text-right text-success">
              <?php echo $data->makeup . '<br>' . $data->and . '<br>' . $data->perfums; ?>
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 30px 0px 50px ;">
          <img src="../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (2).jpg" class="d-inline-block w-60"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              <?php echo $data->rozaytStore; ?>
            </h1>
            <h1 class="text-right text-success">
              <?php echo $data->abaya . '<br>' . $data->and . '<br>' . $data->shawls; ?>
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 30px 0px 50px ;">
          <img src="../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (1).jpg" class="d-inline-block w-60"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              <?php echo $data->rozaytStore; ?>
            </h1>
            <h1 class="text-right text-success">
              <?php echo $data->shoos . '<br>' . $data->and . '<br>' . $data->bags; ?>
            </h1>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
    <!-- Carousel End -->