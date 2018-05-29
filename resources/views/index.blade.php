@extends('layouts.main')

@section('styles')

@section('script')


@section('content')
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About e-Print</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="image/about1.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <p>e-print adalah suatu web yang bertujuan unuk memudahkan konsumen dalam hal percetakan dan perfotokopian 
          dengan adanya web ini konsumen tidak usah lagi untuk datang ke tempat kami untuk mengorder tetapi hanya cukup membuka nya lewat gadget konsumen</p>
          <p>web ini memiliki bayak fitur , termasuk jasa yang kami sediakan seperti cetak brosur , kartu nama ,dan print biasa .</p>
          <a href="#portfolio" class="btn btn-default btn-lg page-scroll">My Katalog</a> </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Katalog</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".mm">Marketing Material</a></li>
            <li><a href="#" data-filter=".os">Office and Stationery</a></li>
            <li><a href="#" data-filter=".pg">Promotional Gift</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>

    <!-- bussiness card -->
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 mm">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="bussiness_card" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Bussiness Card</h4>
              </div>
              <img src="image/portfolio/bussiness card.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

        <!-- poster -->
        <div class="col-sm-6 col-md-3 col-lg-3 mm">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="poster" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Poster</h4>
              </div>
              <img src="image/portfolio/poster.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

        <!-- brosur -->
        <div class="col-sm-6 col-md-3 col-lg-3 mm">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="brosur" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>brosure</h4>
              </div>
              <img src="image/portfolio/brosur.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

       <!--  stempel -->
        <div class="col-sm-6 col-md-3 col-lg-3 os">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="stempel" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Stempel</h4>
              </div>
              <img src="image/portfolio/stempel.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

        <!-- amplop -->
        <div class="col-sm-6 col-md-3 col-lg-3 mm">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="amplop" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Amplop</h4>
              </div>
              <img src="image/portfolio/amplop.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

        <!-- calender -->
        <div class="col-sm-6 col-md-3 col-lg-3 os">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="calender" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>calender</h4>
              </div>
              <img src="image/portfolio/calender.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

        <!-- banner -->
        <div class="col-sm-6 col-md-3 col-lg-3 mm">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="banner" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Banner</h4>
              </div>
              <img src="image/portfolio/Banner.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        
        <!-- id card -->
        <div class="col-sm-6 col-md-3 col-lg-3 os">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="id_card" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>ID card</h4>
              </div>
              <img src="image/portfolio/idcard.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

        <!-- tumbler -->
        <div class="col-sm-6 col-md-3 col-lg-3 pg">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="tumbler" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Tumbler</h4>
              </div>
              <img src="image/portfolio/tumbler.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

       <!--  mug -->
        <div class="col-sm-6 col-md-3 col-lg-3 pg">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="mug" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>mug </h4>
              </div>
              <img src="image/portfolio/mug.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

        <!-- stiker -->
        <div class="col-sm-6 col-md-3 col-lg-3 pg">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="stiker" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Stiker</h4>
              </div>
              <img src="image/portfolio/stiker.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

        <!-- pin -->
        <div class="col-sm-6 col-md-3 col-lg-3 pg">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="pin" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Pin</h4>
              </div>
              <img src="image/portfolio/pin.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Get In Touch</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default btn-lg"><a href="iqbal.izzulhaq3@gmail.com" >Send Message</a></button>
      </form>
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection