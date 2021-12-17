<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Floor4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>


    <link rel="stylesheet" href="assets/css/style.css"></head>
<body>
<header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">


    <div class="logoo" style=" color: #ffffff">
         Vbusiness
         </div>    </div>
    
    <div class="cd-search js-cd-search">
      <form>
        <input class="reset" type="search" placeholder="Search...">
      </form>
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><a href="#0">Tour</a></li>
      <li class="cd-nav__item"><a href="#0">Support</a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
        <?php echo '<img src="'.$_SESSION['avatar'].'" alt="avatar" style="width:50px;height:50px">'; ?>
          <!--<img src="assets/img/cd-avatar.svg" alt="avatar">-->
          <span><?php echo $_SESSION['user_name'];?></span>
        </a>
    
        <ul class="cd-nav__sub-list">
        <li class="cd-nav__sub-item"><button type="Button" class="btn btn-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Account</button></li>
          
          <li class="cd-nav__sub-item"><button type="Button" class="btn btn-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightt" aria-controls="offcanvasRightt">Edit Account</button></li>
          <li class="cd-nav__sub-item"><a href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Main of the Company</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">
          <a href="home.php">Home of Company<span class="cd-count">3</span></a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a aria-current="page" href="#0">All Stages</a></li>
            <li class="cd-side__sub-item"><a href="floor1.php">Floor 1</a></li>
            <li class="cd-side__sub-item"><a href="floor2.php">Floor 2</a></li>
            <li class="cd-side__sub-item"><a href="floor3.php">Floor 3</a></li>
           



          </ul>
        </li>
    
   
        <li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">
        <a href="office.php">My Office<span class="cd-count">2</span></a>
          
          
        </li>
    
   
    </nav>
    <section class="another">
    <div class="cd-content-wrapper">
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
      <div class="text-component text-center">
      <h4 style="color : #F90F60 ;"><strong>Hello <?php echo $_SESSION['user_name'];?>,</h4>
      <h6>You are now in your virtual Coworking Space , you can start working & even invite your coworkers. Create, edit, and share all your documents and files.</h6>
      <h6>Create workgroups and assign tasks remotely. Monitor deadlines.</h6>

      <h3 style="color: #ff7979"><strong>Be creative <?php echo $_SESSION['user_name'];?> !</h3><br>
    
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-bs-whatever="@mdo">Invite your coworker
</button>


      

      <img src="img/26211.jpg">


        
      </div>
    </div> </section>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h2 style="color:#ec4646d8; font: small-caps bold 24px/1 sans-serif; " id="offcanvasRightLabel"><strong>My Account</h2>
   
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <?php echo '<img src="'.$_SESSION['avatar'].'" alt="HTML5 Icon" style="wiidth:128px;height:128px">'; ?> <br>
  <label for="user_name" class="form-label">User Name</label>
  <input type="text" class="form-control" placeholder="<?php  echo $_SESSION['user_name'];?>" aria-label="user_name" aria-describedby="basic-addon2" disabled>
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control" placeholder="<?php  echo $_SESSION['name'];?>" aria-label="name" aria-describedby="basic-addon2" disabled>
  <label for="genre" class="form-label">Genre</label>
  <input type="text" class="form-control" placeholder="<?php  echo $_SESSION['genre'];?>" aria-label="genre" aria-describedby="basic-addon2" disabled>
  <label for="password" class="form-label">Password</label>
  <input type="text" class="form-control" placeholder="<?php  echo $_SESSION['password'];?>" aria-label="password" aria-describedby="basic-addon2" disabled> <br>
  <button type="button" class="btn btn-warning text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Return </button>
  
  </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightt" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h2 style="color:#ec4646d8; font: small-caps bold 24px/1 sans-serif;" id="offcanvasRightLabel"><strong>Edit Account</h2>
   
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <?php echo '<img src="'.$_SESSION['avatar'].'" alt="HTML5 Icon" style="width:128px;height:128px" >'; ?> <br>
  <form action="update.php" method="post"> 
  
  <div class="input-group">
  <input type="file" class="form-control" id="inputGroupFile04" name="new_avatar" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
</div><br>
  <label for="user_name" class="form-label">Change your User Name</label>
  <input type="text" id="new_name" class="form-control" placeholder="<?php  echo $_SESSION['user_name'];?>" name="new_name" aria-describedby="basic-addon2">
  <label for="nename" class="form-label">Change your Name</label>
  <input type="text" id="new_name" class="form-control" placeholder="<?php  echo $_SESSION['name'];?>" name="nename" aria-describedby="basic-addon2">
  <label for="new_password" class="form-label">Change your Password</label>

  <input type="text" class="form-control" placeholder="<?php  echo $_SESSION['password'];?>"  name="new_password" aria-describedby="basic-addon2"><br>
  <button type="button" class="btn btn-warning text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Return </button>
  <input type="hidden" name="id" value="<?php echo $id?>">

  <button type="Submit" class="btn btn-danger">Update</button>


  </form>
  </div>
</div>

      </div>
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Invite your Coworker</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
     

          <div class="mb-3">
            <label for="uname" class="col-form-label" >Enter his/her Name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Name">
          </div>
       
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
  
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-warning">Send Invitation</button>
      </div>
    </div>
  </div>
</div>
  </main>
  
  <script src="js/util.js"></script> 
  <script src="js/menu-aim.js"></script>
  <script src="js/main.js"></script>
  <script>
  var exampleModal = document.getElementById('exampleModal')
         exampleModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget
            var recipient = button.getAttribute('data-bs-whatever')
 
           var modalTitle = exampleModal.querySelector('.modal-title')
           var modalBodyInput = exampleModal.querySelector('.modal-body input')

           modalTitle.textContent = 'New message to ' + recipient
           modalBodyInput.value = recipient
        })
       
    
        
      </script>
      <script src="js/util.js"></script> 
  <script src="js/menu-aim.js"></script>
  <script src="js/main.js"></script>
  <script>
  var offcanvasElementList = [].slice.call(document.querySelectorAll('.offcanvas'))
  var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
  return new bootstrap.Offcanvas(offcanvasEl)
})
</script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>