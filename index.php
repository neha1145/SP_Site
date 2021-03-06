<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAFEDOCS TECHNOLOGY</title>

    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- HomePage -->

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg fixed-top py-3">
      <a href="./index3.html" class="navbar-brand">SAFEDOCS TECHNOLOGY</a>
      <button
        class="navbar-toggler custom-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#what-we-do" class="nav-link">About</a>
          </li>

          <li class="nav-item">
            <a href="#service" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact </a>
          </li>
          <li class="nav-item">
            <a href="./for-recruiters.html" class="nav-link">HR</a>
          </li>
          <li class="nav-item">
            <a href="./shop.html" class="nav-link">Products</a>
          </li>
        </ul>

        <ul class="navbar-nav mx-auto">
          <form
            class="form-inline d-none d-sm-block"
            action="FullPost.php?id=<?php $searchQueryParameter ?>"
          >
            <div class="form-group">
              <input
                class="form-control mr-2"
                name="search"
                type="text"
                placeholder="Search Here.."
              />
              <button class="btn" name="searchBtn" type="submit">Search</button>
            </div>
          </form>
        </ul>
      </div>
    </nav>

    <!-- NAV BAR END -->

    <!-- slider banner	 -->

    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="info">
            <h1>LEADING CONTRACTORS</h1>
          </div>
        </div>
        <div class="carousel-item">
          <div class="info">
            <h1>INDUSTRIES WITH CONTINUAL SAFETY IMPROVEMENT</h1>
          </div>
        </div>
        <div class="carousel-item">
          <div class="info">
            <h1>HENCE PERFORMANCE</h1>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Services End  -->

    <!-- section features -->

    <!-- Services section -->
    <section id="what-we-do">
      <div class="container-fluid">
        <h2 class="section-title mb-2 h1">🅦🅗🅐🅣 🅦🅔 🅓🅞</h2>
        <p class="text-center text-muted h5 container">
          We are the most recognised management system serving company in terms
          of ISO certifications & CSMS with over 50+ clients in Pan India
        </p>
        <div class="row mt-5">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
              <div class="card-block block-1">
                <h3 class="card-title">WORK AT BEST STANDARDIZED ECOSYSTEM</h3>
                <p class="card-text">
                  Businesses looking to commercialize emerging technologies are
                  part of a developing business ‘ecosystem’, and the stronger
                  they can exploit the networks within the ecosystem, the faster
                  the market for their products will grow
                </p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
              <div class="card-block block-2">
                <h3 class="card-title">ADDING EFFICIENCY TO INNOVATION</h3>
                <p class="card-text">
                  Standards also provide a tried and tested framework for taking
                  new ideas from the drawing board or development bench all the
                  way to commercial production. They define the essential
                  parameters, the safety considerations, testing processes, and
                  how to move to prototyping and scale-up.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
              <div class="card-block block-3">
                <h3 class="card-title">PERSONAL PROTECTIVE EQUIPMENT</h3>
                <p class="card-text">
                  Providing best quality protective equipments all over the world. This 
                  equipments are made to provide the best protection. It is made with good materials and fabrics to ensure your safety.
                </p>
              </div>
            </div>
          </div>
        <!-- </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
              <div class="card-block block-4">
                <h3 class="card-title">Special title</h3>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
              <div class="card-block block-5">
                <h3 class="card-title">Special title</h3>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
              <div class="card-block block-6">
                <h3 class="card-title">Special title</h3>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </section>
    <!-- /Services section -->
    <!-- What WE Do Section -->

    <div class="WWD-Main-Container" id="service">
      <section class="WWD-Section-Header">
        <h1><span>Our</span> Services</h1>
        <br>
        <h2 style="color: rgb(76, 182, 182);">-----CONTRACTOR SAFETY 
          <span style="color: rgba(52, 73, 66, 0.699);">MANAGEMENT SYSTEM-----</span></h2>
      
      </section>
      <div class="WWD-Container" data-aos="fade-up">
          <div class="">
            <p style="font-size: 20px; text-align: center; color: #40514e;">
              Our advisors provide individualized services to help alleviate your safety uncertainty and stress. With many years of experience, our experts have the knowledge and expertise to handle any situation.
            </p>
            <!-- <a href="#" class="WWD-btn">Read More</a> -->
          </div>
          <br><br>
        <section class="WWD-card" data-aos="fade-left">
          <img src="img/ISO450012018.jpg" alt="" />
          <div class="">
            <h3>
              ISO 45001:2018
              Occupational Hazard Free Workplace
              
              
              
              </h3>
            <p>
              No matter what type of hazardous and unsafe situation you have, our team of experts will provide the best course of action. We serve clients in the area ranging from Iron & Steel Making to Automobile SMEs Suppliers with high end business needs.
            </p>
            <!-- <a href="#" class="WWD-btn">Read More</a> -->
          </div>
        </section>

        <section class="WWD-card" data-aos="fade-right">
          <img src="img/sa8000-certification-social-accountability.jpg" alt="" />
          <div class="">
            <h3>SA8000
              Socially Motivate to rise Productivity
              
              </h3>
            <p>
              SA8000 is based on the principles of international human rights norms as described in International Labor Organization conventions.
            </p>
            <!-- <a href="#" class="WWD-btn">Read More</a> -->
          </div>
        </section>

        <section class="WWD-card" data-aos="fade-down">
          <img src="img/ISO14001.jpg" alt="" />
          <div class="">
            <h3>ISO 14001:2015
              Nurture the Nature
              
              </h3>
            <p>
              ISO 14001 is the international standard that specifies requirements for an effective environmental management system (EMS). It provides a framework that an organization can follow, rather than establishing environmental performance requirements
            </p>
            <!-- <a href="#" class="WWD-btn">Read More</a> -->
          </div>
        </section>

        <section class="WWD-card" data-aos="fade-right">
          <img src="img/required-ppe.jpg" alt="" />
          <div class="">
            <h3>SAFETY BANNERS & PPES     
              </h3>
              <h4>Procurement for You</h4>
            <p>
              We have with ourselves the best templates & themes and We have translators who actually write for you so turning multiple language hoarding & banners is an easy task now.
              We also deal in all types of Industrial & Surgical PPEs with a sleek cost and a satisfactory Quality, which we actually promise, comes with Warranty.
            </p>
            <!-- <a href="#" class="WWD-btn">Read More</a> -->
          </div>
        </section>
      </div>
    </div>

    <!-- End What We Do End -->

    <!-- Contact Us -->

    <section id="contact">
      <div class="contact-section">
        <div class="content">
          <h2>Contact Us</h2>
        </div>

        <div class="contact-container">
          <div class="contact-Info" data-aos="fade-left">
            <div class="contact-box">
              <div class="contact-icon">
                <i class="fa fa-map"></i>
              </div>
              <div class="contact-text">
                <h3>Address</h3>
                <p>
                  Sonari, Jamshedpur, East Singhbhum, Jharkhand. Pin: 831011
                </p>
              </div>
            </div>

            <div class="contact-box">
              <div class="contact-icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="contact-text">
                <h3>Phone</h3>

                <p>
                  <a href="tel:+918210431630"><p>+918210431630</p></a>
                </p>
              </div>
            </div>

            <div class="contact-box">
              <div class="contact-icon">
                <div class="fa fa-envelope-o"></div>
              </div>
              <div class="contact-text">
                <h3>Email</h3>
                <p><a href="mailto:safedocstechnology@gmail.com">safedocstechnology@gmail.com</a></p>
              </div>
            </div>
          </div>
          <div class="contact-form" data-aos="fade-right">
            <form action="" method="POST">
              <h2>Send Message</h2>

              <div class="inputBox">
                <input type="text" name="name" required="required" />
                <span>Full Name</span>
              </div>

              <div class="inputBox">
                <input type="text" name="email" required="required" />
                <span>Email</span>
              </div>

              <div class="inputBox">
                <textarea
                  name="message"
                  id=""
                  cols="30"
                  required="required"
                  rows="10"
                ></textarea>

                <span>Type Your Message</span>
              </div>

              <div class="inputBox">
                <input type="hidden" name="form_submitted" value="1">
                <input type="submit" name="btn" value="submit" class="my-btn" />
                
              </div>
              <?php
                if(isset($_POST["form_submitted"]) and isset($_POST['btn'])){
                  $email= $_POST["email"];
                  $message= $_POST["message"];
                  $name=$_POST["name"];
                  
                ?>

            </form>
<?php

            if(isset($_POST['btn'])){
                        if(!empty($_POST['email'])){
                            $email=$_POST['email'];
                        }
                        if(!empty($_POST['message'])){
                            $message=$_POST['message'];
                        }
                        if(!empty($_POST['name'])){
                            $name=$_POST['name'];
                        }
        
                    }
                    if(empty($name)){
                        $name=0;
                    }
                    if(empty($email)){
                        $email=0;
                    }
                    if(empty($message)){
                        $message=0;
                    }
                    
                    
                    $to="damitlucky998@gmail.com";
                    $subject="Asking for Quotation";
                    
                    $message="Mail from:".$email."\n From ".$name ." \n Message ".$message;                    
                    
                    if(mail($to,$subject,$message)){
                        ?>
            <script>console.log('done')</script>
                    <?php
                        //header('location: index.php');
                    } else{
                        ?>
            <script>console.log('not send')</script>
                        <?php  
                            }
                    }
                        ?>









          </div>
        </div>
      </div>
    </section>

    <!-- Contact us end -->

    <!--  -->

    <!-- Footer -->

    <div class="footer">
      <div class="inner-footer">
        <div class="footer-items">
          <h2>Our Works</h2>
          <div class="footer-border"></div>
          <ul>
            <a href="#"><li>Work 1</li></a>
            <a href="#"><li>Work 2</li></a>
            <a href="#"><li>Work 3</li></a>
            <a href="#"><li>Work 4</li></a>
          </ul>
        </div>

        <div class="footer-items">
          <h2>Our Portfolio</h2>
          <div class="footer-border"></div>
          <ul>
            <a href=""><li>Portfolio 1</li></a>
            <a href=""><li>Portfolio 2</li></a>
            <a href=""><li>Portfolio 3</li></a>
          </ul>
        </div>

        <div class="footer-items">
          <h2>Contact</h2>
          <div class="footer-border"></div>
          <ul>
            <li>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
           
                Jamshedpur,West Bengal, India
 
            </li>
            <li>
        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+918210431630">+918210431630</a>
              
            </li>
            <li>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <a href="mailto:safedocstechnology@gmail.com">safedocstechnology@gmail.com</a>
            </li>
          </ul>

          <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        Copyright &copy; Computer & Codes 2020. All Rights Reserved
      </div>
    </div>

    <a href="#" class="gotoTop"><i class="fa fa-arrow-up"></i></a>

    <!-- END FOOTER -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 400,
        duration: 600,
      });
    </script>

    <script src="./js/main.js"></script>
  </body>
</html>
