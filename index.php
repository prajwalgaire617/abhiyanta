<?php
    $mysql=mysqli_connect("localhost","root","","abhiyanta");
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="manifest.json">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style/navbar.css">
  <link rel="stylesheet" href="./css/style/crousel.css">
  <link rel="stylesheet" href="./css/style/banner.css">
  <link rel="stylesheet" href="./css/style/footer.css">
  <link rel="stylesheet" href="./css/style/rights.css">
  <script src="https://kit.fontawesome.com/7ae05d4d44.js" crossorigin="anonymous"></script>
  <title>Bootstrap Example</title>

</head>

<body class="p-3 m-0 border-0 bd-example" style="overflow-x:hidden ;">

  <!-- Example Code -->

              <nav class="navbar navbar-large navbar-expand-md bg-dark">
    <div class="container">
      
      <a class="navbar-brand" href="#">Abhiyanta</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navigation-links">


          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="community.php">Community</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="report.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="jobs.php">Find Job</a>
          </li>
        </ul>

       

      </div>
      <div class="login" >

      <a href="./server/logout.php">
      <i class="fa-solid fa-right-to-bracket" style="color: white;"></i>
      </a>
      </div>
    </div>
  </nav>

  <!-- banner -->

  <div class="flexcontainer">
    <nav class="navbar navbar-small bg-black">
      <ul class="navbar-nav">
          <li class="nav-item">
           
            <a href="index.php" class="nav-link" id="0"><i class="fa-solid fa-house"></i></a>
          <a href="community.php" class="nav-link" id="1"><i class="fa-solid fa-user-group"></i></a>
          <a href="report.php" class="nav-link" id="2"><i class="fa-solid fa-bullhorn"></i></a>
          <a href="jobs.php" class="nav-link" id="3"><i class="fa-solid fa-briefcase"></i></a>


        </li>

      </ul>
    </nav>
  </div>



  <!-- Nav bar end -->

  <div class="banner d-flex justify-center">
    <h1 class="text-center">
        <span> नारीवाद ! </span>
        
        मैले आफूलाई शिकार बन्न दिइन, मैले आफूमाथि भएको अन्यायको विरुद्धमा उभिएँ।</h1>
    </div>


    <div class="our-rights">
    
        <h1>Women Rights</h1>
        <div class = "right-card">
            <p>Section 12 of the Act provides that any person who has committed sexual harassment under the Act may be punished with imprisonment of up to 6 months, and/or a fine of up to Nepalese Rupees 50,000. The said Section also provides that any employer failing to comply with the duties and responsibilities imposed by the Act may be punished with a fine of up to Nepalese Rupees 25,000. In case of repeated offense, double the punishment provided in the foregoing may be applicable.</p>
        </div>
        <div class = "right-card">
            <p>The Sexual Harassment Prevention Act provides a number of provisions intended to protect the victims of sexual harassment, and create an environment in the workplace where the victims feel encouraged to file complaints against sexual harassment.
                The Constitution provides the right to a dignified life (art. 16), prohibition of discrimination on grounds of sex, equality before the law (art. 18), right to work and choose occupation (art. 33), protection of women against any physical, sexual, psychological or any other acts of violence and exploitation (art.38). 
            </p>
        </div>
        <div class = "right-card">
            <p>The Electronic Transaction Act, 2063 (2008), Section 47 prohibits teasing, harassing, insulting, or similar indecent activities against women by using computers, the internet, and other means of electronic communication.  
            </p>
        </div>
        <div class = "right-card">
            <p>The Supreme Court of Nepal in the public interest litigation furnished a directive order in 2008 to the Government of Nepal to devise legal measures to address the sexual harassment of women workers in a dance bar, dance restaurant, or massage parlor (collectively the entertainment sector). The Supreme Court issued a procedural guideline to protect women in the entertainment sector from sexual abuse and exploitation
            </p>
        </div>
        <div class = "right-card">

            <P>The Foreign Employment Policy 2068 (2011) recognizes the problem of sexual harassment faced by female workers in the course of foreign employment and states the need to address concerns of female workers labor market and ensure their rights in the overall migration cycle.
            </P>
        </div>
    
    </div>

  <div class="container my-3">
    <h1 class="text-center">Our Community</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-group">
                <div class="card mx-3">
                  <img src="https://politicalyouthnetwork.org/wp-content/uploads/2019/01/Womens-rights-are-human-rights.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Womens Right</h5>
                    <small class="small">2022 August 15</small>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    
                  </div>
                </div>
                <div class="card mx-3">
                  <img src="https://politicalyouthnetwork.org/wp-content/uploads/2019/01/Womens-rights-are-human-rights.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Womens Right</h5>
                    <small class="small">2022 August 15</small>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    
                  </div>
                </div>
                <div class="card mx-3">
                  <img src="https://politicalyouthnetwork.org/wp-content/uploads/2019/01/Womens-rights-are-human-rights.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Womens Right</h5>
                    <small class="small">2022 August 15</small>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card-group">
                <div class="card mx-3">
                  <img src="https://politicalyouthnetwork.org/wp-content/uploads/2019/01/Womens-rights-are-human-rights.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Womens Right</h5>
                    <small class="small">2022 August 15</small>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    
                  </div>
                </div>
                <div class="card mx-3">
                  <img src="https://politicalyouthnetwork.org/wp-content/uploads/2019/01/Womens-rights-are-human-rights.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Womens Right</h5>
                    <small class="small">2022 August 15</small>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    
                  </div>
                </div>
                <div class="card mx-3">
                  <img src="https://politicalyouthnetwork.org/wp-content/uploads/2019/01/Womens-rights-are-human-rights.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Womens Right</h5>
                    <small class="small">2022 August 15</small>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card-group">
                <div class="card mx-3">
                  <img src="https://politicalyouthnetwork.org/wp-content/uploads/2019/01/Womens-rights-are-human-rights.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Womens Right</h5>
                    <small class="small">2022 August 15</small>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    
                  </div>
                </div>
                <div class="card mx-3">
                  <img src="https://politicalyouthnetwork.org/wp-content/uploads/2019/01/Womens-rights-are-human-rights.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Womens Right</h5>
                    <small class="small">2022 August 15</small>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    
                  </div>
                </div>
                <div class="card mx-3">
                  <img src="https://politicalyouthnetwork.org/wp-content/uploads/2019/01/Womens-rights-are-human-rights.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Womens Right</h5>
                    <small class="small">2022 August 15</small>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>


<!-- FOOTER START -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>About Us</h4>

             <p>
                Harrashment complain can be posted in the report section. Job opportunities for women seeking job. Emergency feature where shaking the mobile phone will automatically send your location to our server and help will be provided.

             </p>
                
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="https://maitinepal.org/">Maiti Nepal</a></li>
                    <li><a href="https://www.worecnepal.org/">WOREC Nepal</a></li>
                    <li><a href="https://nwc.gov.np/en/">Mahila Aayog Nepal </a></li>
                    <li><a href="https://saathi.org.np/">Sathi Nepal</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                 <div class="copyrt">
                <span class="copyright">@abhiyanta All rights reserved. 2022.</span>
             </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>