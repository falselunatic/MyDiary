<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== TRUE)
{
  $loggedin=TRUE;
}
else {
  $loggedin=FALSE;
}
echo
'<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><i class="bi bi-pencil-square"></i>iwrite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mydiary/welcome.php"><i class="bi bi-house"></i>Home</a>
        </li>';
        if(!$loggedin){
          echo 
        '<li class="nav-item">
          <a class="nav-link" href="/mydiary/login.php"><i class="bi bi-egg-fried"></i>Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mydiary/signup.php"><i class="bi bi-eyeglasses"></i>Sign-up</a>
        </li>';}
        if($loggedin){
          echo 
        '<li class="nav-item">
          <a class="nav-link" href="/mydiary/logout.php"><i class="bi bi-exclamation-circle"></i>Logout</a>
        </li>';}
       echo 
      '<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';
?>