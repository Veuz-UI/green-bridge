<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Bridge</title>
  <link rel="icon" type="image/png" href="assets/img/fav-icon.png" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  <div class="main-banner">
    <div class="container">
    <?php include("header.php")?>
    </div>

  </div>
  <div class="inner-banner">
    <div class="overlay"></div>
    <div class="container">
      <div class="inner-banner-cntnt">
        <h4>Contact</h4>
      </div>
    </div>
  </div>


  <section class="contact-section">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-duration="1500">
        <div class="col-lg-4">
          <div class="contact-box-div">
            <div class="contact-box-icon">
              <img src="assets/img/email-file.gif" alt="">
            </div>
            <div class="contact-box-cntnt">
              <h4>Email Address</h4>
              <h6>a.khan@aljussour.com</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-box-div">
            <div class="contact-box-icon">
              <img src="assets/img/call.gif" alt="">
            </div>
            <div class="contact-box-cntnt">
              <h4>Phone Number</h4>
              <h6>:-+966 53 394 4424</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-box-div">
            <div class="contact-box-icon">
              <img src="assets/img/worldwide.gif" alt="">
            </div>
            <div class="contact-box-cntnt">
              <h4>Address</h4>
              <h6>Green Bridges Commercial Company division of Al Jussour Group Dammam - Kingdom of Saudi Arabia
              </h6>
            </div>
          </div>
        </div>
      </div>

      <div class="input-main-div">
        <h3 data-aos="fade-up" data-aos-duration="1500">Let's Get In Touch</h3>
        <h6 data-aos="fade-up" data-aos-duration="1500">Your email address will not be published. Required fields are marked *</h6>

        <div class="row" data-aos="fade-up" data-aos-duration="1500">
          <div class="col-lg-6">
            <div class="form__group field">
              <input type="input" class="form__field" placeholder="Name" required="">
              <label for="name" class="form__label">Name<span>*</span></label>
          </div>
          </div>
          <div class="col-lg-6">
            <div class="form__group field">
              <input type="input" class="form__field" placeholder="Email" required="">
              <label for="email" class="form__label">Email<span>*</span></label>
          </div>
          </div>
          <div class="col-lg-6">
            <div class="form__group field">
              <input type="input" class="form__field" placeholder="Phone" required="">
              <label for="phone" class="form__label">Phone<span>*</span></label>
          </div>
          </div>
          <div class="col-lg-6">
            <div class="form__group field">
              <input type="input" class="form__field" placeholder="Website" required="">
              <label for="website" class="form__label">Website<span>*</span></label>
          </div>
          </div>

          <div class="col-lg-12">
            <div class="form__group field">
              <input type="input" class="form__field" placeholder="Enter Message here" required="">
              <label for="message" class="form__label">Enter Message here<span>*</span></label>
          </div>
          </div>


          <div class="submit-btn">
            <button type="button" class="secndry-btn hover-btn-2">
              Submit
            </button>
          </div>
       
        </div>
      </div>

     
    </div>
  </section>



 


  <?php include("footer.php")?>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js "
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r " crossorigin="anonymous ">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS " crossorigin="anonymous ">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://kit.fontawesome.com/16b0815225.js" crossorigin="anonymous"></script>






  <script>
    $('.client-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 5
        }
      }
    })
  </script>

  <script>
    $('.home-banner-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>

<script>
   $('.blog-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    })
</script>

<script>
AOS.init({disable: 'mobile'});
</script>


</body>

</html>