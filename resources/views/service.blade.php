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


  <main style="height: 500px; background-color: #f2f2f2;">

    <section class="py-5 text-center container">
        <div class="row py-lg-5 border">
          <div class="col-lg-6 col-md-8 mx-auto ">
            <h1 class="fw-light"> <b> خدماتنا </b></h1>
            <p class="lead text-muted"> نتميز دوماً بتقديم الوظائف الرائعة لعملائنا ! </p>
            <nav class="navbar navbar-light bg-light">
              <form class="row form-inline mx-5">
                <input class="col form-control mr-sm-2 mx-5 px-5" type="search" placeholder="Search" aria-label="Search">
                <button class="col btn btn-outline-success my-2 my-sm-0 mx-2 px-0" type="submit"> بحث </button>
              </form>
            </nav>
          </div>
        </div>
      </section>

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