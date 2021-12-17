<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Vbusiness</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   </head>
   <body>


   <?php if (isset($_GET['error'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <?php echo $_GET['error'];  ?>  </div>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <?php echo $_GET['success']; ?> </div>
          <?php } ?>
      <nav id="navbar-example2">
          
      
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <div class="logo">
         Vbusiness
         </div>
         <div class="nav-items">

            <li><a  href="#">Home</a></li>
            <li><a  href="#information">Explore</a></li>
            <li><a  href="#information2">About Us</a></li>
            <li><a href="#information3">Quick Demo</a></li>
            <li><a href="#information4">Contact Us</a></li>
         </div>
     
         <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Sign Up</button> 
         <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Log In</button>
    </nav>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
       <form action="login.php" method="post"> 
     

          <div class="mb-3">
            <label for="uname" class="col-form-label" ><strong>User Name</label>
            <input type="text" class="form-control" id="uname" name="uname" placeholder="User Name">
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label"><strong>Password</label>
            <input type="password" name ="password" placeholder="Password" class="form-control" id="password">
          </div>
          <a href="oublier.php" style=" color:rgb(240, 119, 119)" class="ca"><strong>Forget your password !</a>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-warning">Join My Company</button>
      </div>
        </form>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
       <form action="signup.php" method="post"> 
     

          <div class="mb-3">
            <label for="uname" class="col-form-label" >Name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Name">
          </div>
          <div class="mb-3">
            <label for="uname" class="col-form-label" >User Name</label>
            <input type="text" class="form-control" id="uname" name="uname" placeholder="Choose your User Name">
          </div>
          <div class="mb-3">
            <label for="genre" class="col-form-label" >Genre</label>
            <select class="form-select" aria-label="Default select example" name ="genre" id="genre">
        <option value="Male" selected>Male </option>
           <option value="Female">Female</option>
</select>
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">Password</label>
            <input type="password" name ="password" placeholder="Password" class="form-control" id="password">
          </div>
          <div class="mb-3">
            <label for="re_password" class="col-form-label">Password</label>
            <input type="password" name ="re_password" placeholder="Re_password" class="form-control" id="re_password">
          </div>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-warning">Start Now</button>
      </div>
        </form>
    </div>
  </div>
</div>
  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">

      <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h1><strong>Virtualize your Company !</h1>
                <button class="btn"><a style="color: #f2f2f2;" href="#information" > Explore</a></button>
            </div>
        </section>
       

        <section id="information" class="home">
      <div class="image">
      <div class="wrapper">
      <div class="card front-face">
        <img src="img/belle.jpeg">
      </div>
      <div class="card back-face">
        <img src="img/20290.jpg">
      </div>
    </div>   
</div>
     <div class="info"><br>
      <div class="wrapper2">
    <div class="static-txt"><strong>You Can</div>
    <ul class="dynamic-txts">
      <li><span>Work</span></li>
      <li><span>Communicate</span></li>
      <li><span>Meet</span></li>
    </ul> 
    <div class="static-txt"><strong>From Home !</div> 

       
      </div>

    </section>
   <section class="site-third">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
            </div>
        </section>

        <section class="site-foor" id="information2">
        <div class="card" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title" style="color: #F90F60 ;">Remote work </h5>
    <img src="img/working.gif" class="card-img-top" style=" ">

    <p class="card-text" style="color:rgb(126, 13, 69) ;">Vbusiness offers you the opportunity to work from home, you have your own virtual space to work in comfort. So, let's Experience a Virtual Space Where Everyone Feels Closer to You.

</p><br>
    <a href="#" class="btn btn-light">Read more</a>
  </div>
</div>
<div class="card" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title" style="color: #F90F60;">Virtual Coworking Space </h5><br>
    <img src="img/26211.jpg" class="card-img-top" style=" "><br><br><br>

    <p class="card-text" style="color:rgb(126, 13, 69) ;">Vbusiness offers you a virtual Coworking space, where you can invite your coworkers and work on your projects. You will be able to share many ressources.</p>
    <a href="#" class="btn btn-light">Read more</a>
  </div>
</div>
<div class="card" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title" style="color: #F90F60;"> Virtual Conferences & Meeting </h5><br>
    <img src="img/classic_room.jpg" class="card-img-top" style=" "><br><br><br>

    <p class="card-text" style="color: rgb(126, 13, 69);">Vbusiness offers you the opportunity to join professional conferences and office meeting from home. You will be able to communicate with your exectuters and professsional people. </p>
    <a href="#" class="btn btn-light">Read more</a>
  </div>
</div>
   

  </section>

        <section class="site-foor1">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
       
        </section>
        <section class="site-demo" id="information3">
        <video width ="100%" height ="100%" controls=" controls " autoplay="true" >
               <source src ="img/demo.mp4" autoplay="true"  type ="video/mp4" />
                    </video>
        </section>
        <section class="site-fif">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
        </section>
            <footer class="site-footer" id="information4">
    <button class="my_bttn">

<i class="fa fa-arrow-up"></i>
 </button>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Explore More</h6>
            <p class="text-justify">Vbusiness is a <i>Virtual space where you can talk just like in-person </i>. Since you are in the same virtual space, you can see what other people are doing and talk to them easily and swiftly. Develop a more inclusive online communication style in remote work.Bring your team to a virtual office where remote work is done efficiently. Communicate, collaborate, and host meetings, all in one space.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Services</h6>
            <ul class="footer-links">
              <li><a href="#">Remote Work</a></li>
              <li><a href="#/Virtual ">Virtual Coworking Space</a></li>
              <li><a href="#">Business Meet</a></li>
              <li><a href="#">Business Conferences</a></li>
              <li><a href="#">visit Departments</a></li>
              <li><a href="#">Company Tour</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Quick Demo</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright ©2021 All rights reserved | made by Myriam & Rihab  </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</div> 

      </div>
      <script>
         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         var exampleModal = document.getElementById('exampleModal')
         exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
            var button = event.relatedTarget
  // Extract info from data-bs-* attributes
            var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
           var modalTitle = exampleModal.querySelector('.modal-title')
           var modalBodyInput = exampleModal.querySelector('.modal-body input')

           modalTitle.textContent = 'New message to ' + recipient
           modalBodyInput.value = recipient
        })
       
    
        
      </script>
      <script>
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: '#navbar-example2'
})
      </script>
      <script>
        $(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop()>300){
	    $('.my_bttn').fadeIn(250);
	}
	else{
	    $('.my_bttn').fadeOut(250);
	}
    });
    $('.my_bttn').click(function(){
	$('html,body').animate(
	    {scrollTop:0},400
	);
    });
});
      </script>


   </body>
</html>