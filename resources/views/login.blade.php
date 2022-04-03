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
  @include ('includes.header');

<main dir="rtl" class="form-signin py-5 border shadow-lg" style="margin-top: 120px; margin-bottom: 100px;">
    <form> 
       

      <h1 class="h3 mb-5 fw-normal text-center"> تسجيل الدخول </h1>
  
      <div class="form-floating text-muted">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">البريد الإلكتروني</label>
      </div>
      <div class="form-floating text-muted">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">كلمة السر </label>
      </div>
  
      
    </form>
     <a href="dashboard.html">  <button class="w-100 btn btn-lg btn-primary my-3" type="submit">Sign in</button> </a>
    
  </main>


  <!-- Footer -->
  @include ('includes.footer');
 
 
 
 
   <!-- Optional JavaScript; choose one of the two! -->
 
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
     <script src="jquery-3.5.1.min.js"></script>
 
 
 </body>
 
 </html>