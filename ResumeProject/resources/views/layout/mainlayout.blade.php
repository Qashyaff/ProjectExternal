<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Portfolio Dashboard</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style> p { color: #800080; 
}
 </style>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
</head>
<body>
    <div style="p">
<nav class="navbar navbar-expand-lg bg-transparent">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">Portfolio Page Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Social media
          </a>
          <ul class="dropdown-menu">
          <a class="dropdown-item" href="#"> <i class="ri-facebook-circle-fill"></i> Facebook </a>  
            <li><a class="dropdown-item" href="#">Instagram</a></li>
            <li><a class="dropdown-item" href="#">Telegram</a></li>
            <li><a class="dropdown-item" href="#">Twitter</a></li>
            
          </ul>
          
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            To contact me
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item"  href="#" >No Phone</a></li>
            <li><a class="dropdown-item" href="#">Email</a></li>
            <li><a class="dropdown-item" href="#">No Whatsapp</a></li>
           
          </ul>
          
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Hello LuqmanQashyaff</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search About me" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</nav>
<div class="container">
@yield('content')
</div>

<footer>
    All right   reserved &amp;  LuqmanQashyaff
</footer>
</body>
</html> 