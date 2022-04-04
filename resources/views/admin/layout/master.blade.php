<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title>Employment</title>
</head>

<body>
  <!-- Header -->
  <header
    class="fixed-top d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 px-3 mb-4 border-bottom"
    style="background-color: #40189d;">
    <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-white text-decoration-none">
      <h1> <b> <i> Jobey </i> </b></h1>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="{{ route('home'); }}" class="nav-link px-2 link-light"> الرئيسية</a></li>
      <li><a href="{{ route('jobs'); }}" class="nav-link px-2 link-secondary" style="border-bottom: 3px solid #007bff;" >الوظائف </a></li>
      <li><a href="{{ route('service'); }}" class="nav-link px-2 link-light">خدماتنا</a></li>
      <li><a href="{{ route('service'); }}" class="nav-link px-2 link-light">الشركاء</a></li>
      <li><a href="#" class="nav-link px-2 link-light">من نحن </a></li>
      <li><a href="#" class="nav-link px-2 link-light">تواصل معنا</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <a href="{{ route('login'); }}"> <button type="button" class="btn btn-outline-light me-2">تسجيل الدخول</button> </a>
      <a href ="{{ route('create_account'); }}"> <button type="button" class="btn btn-primary me-0" id="showBTN">إنشاء حساب </button> </a>
    </div>
  </header>



@yield('content');

  <!-- Footer -->
 <footer class="text-white text-center" style="height: 200px; background-color: #40189d;">
   <p style="padding-top: 150px;"> Made With &#10084 By Ahd Karman</p> 
 </footer>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    <script src="jquery-3.5.1.min.js"></script>


</body>

</html>