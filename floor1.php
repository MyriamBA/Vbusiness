<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Floor2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">All Data</a></li>
            <li class="cd-side__sub-item"><a href="#0">Category 1</a></li>
            <li class="cd-side__sub-item"><a href="#0">Category 2</a></li>
          </ul>
        </li>

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
      <h4 style="color : #F90F60 ;" ><strong>Hello <?php echo $_SESSION['user_name'];?>,</h4>
      <h6>You are now in your<strong> Virtual Meeting Room.</strong> You can either start a meeting or join another one, so configure your meeting room your way.</h6><br>
      <button type="button" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Start a Meeting</button>
      <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Join a Meeting</button>


      <img src="img/classic_room.jpg">
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
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">List of Meeting</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
        <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col"></th>
      <th scope="col">Meet</th>
      <th scope="col">Date</th>
      <th scope="col">Place</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-dark">
      <th scope="row">1</th>
      <td>Meet Business</td>
      <td>19/01/2022</td>
      <td>Office</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">2</th>
      <td>Important Meeting</td>
      <td>12/09/2022</td>
      <td>Meeting room</td>
    </tr>
   
  </tbody>
</table>


       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-warning">Join Now</button>
      </div>
        </form>
    </div>
  </div>
</div>















      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Invite participant</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Name of the participant">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description of the Meeting</label>
            <textarea class="form-control" id="message-text" placeholder="Subject of the Meeting.."></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-info">Start Now</button>
      </div>
    </div>
  </div>
</div>


        
      </div>
    </div> </section>
  </main>
  
  <script src="js/util.js"></script> 
  <script src="js/menu-aim.js"></script>
  <script src="js/main.js"></script>
  <script>
  var offcanvasElementList = [].slice.call(document.querySelectorAll('.offcanvas'))
  var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
  return new bootstrap.Offcanvas(offcanvasEl)
})
</script>



<script>
  var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'Start a Meeting ' + recipient
  modalBodyInput.value = recipient
})
</script>
 <script src="js/util.js"></script> 
  <script src="js/menu-aim.js"></script>
  <script src="js/main.js"></script>
    
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>