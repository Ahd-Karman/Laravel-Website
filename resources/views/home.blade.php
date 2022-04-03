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



  <!-- Slider -->
  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item ">
          <img src="images/img2.jpg" width="100" height="100" />

          <div class="container">
            <div class="carousel-caption">
              <h1 class="text-dark">نسعى إلى التميز !</h1>
              <p class="text-dark"> قمنا بتوفير +5000 وظيفة منذ بدء العام الجديد! ولا زال نجاحنا في ازدياد</p>
              <p><a class="btn btn-lg btn-primary"href="{{ route('jobs'); }}"> وظائفنا </a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="images/img1.jpg" width="100" height="100" />


          <div class="container">
            <div class="carousel-caption text-start">
              <h1>شركاء النجاح.</h1>
              <p> الشركات التي كانت معنا منذ بدء رحلتنا في السوق ، يمكنك التعرف عليها بانضمامك إلينا</p>
              <p><a class="btn btn-lg btn-primary" href="#">سجل دخولك الآن</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item active">
          <img src="images/img3.jpg" width="100" height="100" />

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>هنا حيث تجد الأفضل.</h1>
              <p class="text-dark">تعد خدماتنا الأولى من نوعها والأفضل على مستوى السوق العربي لعام 2020 ، ولا زلنا في
                تقدم مستمر ، يمكنك التعرف علينا أكثر خلال تصفحك</p>
              <p><a class="btn btn-lg btn-primary" href="#"> خدماتنا </a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">السابق</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">التالي</span>
      </button>
    </div>

  </main>

  <div dir="rtl" class="row g-0 mx-0">
    <!-- Google Ads-->
    <section class="col-2">
      <p class="mx-5"> Google Ads </p>
      <div class=" mx-3" style="width: 150px; height: 400px; background-color: #ccc;">
      </div>
    </section>
    <!-- Our Partners -->
    <span class="col-10">
      <h2 class="text-center mb-4"> شركاؤنا</h2>
      <div class="container marketing py-3 mx-1">
        <div class="row">
          <div class="col-lg-4">
            <img class="img-thumbnail" src="images/p1.png" width="120" height="120" style="border-radius: 50%;" />

            <h2>مايكروسوفت</h2>
            <p class="fs-5"> الشركة الداعمة لنا في توفير فرص العمل، والراعي الفضي لموقعنا </p>
            <p><a class="btn btn-primary" href="#"> معرفة المزيد </a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-thumbnail" src="images/p3.png" width="120" height="120" style="border-radius: 50%;" />

            <h2> جوجل </h2>
            <p class="fs-5"> الشركة الداعمة لنا في توفير فرص العمل، والراعي الذهبي لموقعنا </p>
            <p><a class="btn btn-primary" href="#"> معرفة المزيد </a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-thumbnail" src="images/p2.png" width="120" height="120" style="border-radius: 50%;" />

            <h2>امازون</h2>
            <p class="fs-5"> الشركة الداعمة لنا في توفير فرص العمل، والراعي الماسي لموقعنا </p>
            <p><a class="btn btn-primary" href="#"> معرفة المزيد </a></p>
          </div><!-- /.col-lg-4 -->
        </div>
      </div>
    </span>
  </div>

  <!-- Latest Jobs-->
  <!-- Slider -->
  <main>
    <h2 class="text-center mb-4 my-5"> آخر الوظائف</h2>
    <div id="myCarousel" class="carousel slide my-5" data-bs-ride="carousel"
      style="width: 70%; height: 30%; margin-left: 150px; ">
    
      <div class="carousel-inner" style="border-radius: 20px;">
        <div class="carousel-item active" style="background-color: #f2f2f2; padding-top: 100px; padding-left: 100px;">
          <div class="row mx-5">
            <div class="col card mb-5 py-2  text-center" style="max-width: 18rem;  border-radius: 20px;">
              <img class="mx-5 py-2" src="images/img2.jpg" width="100" height="100" />
              <h2 class="display-6 fs-5 fw-bold "> مدير مبيعات </h2>
              <p>خبرة لأكثر من سنتين ، حاصل على شهادة مالهاش حل.</p>
            </div>

            <div class="col card mb-5 py-2 mx-5  text-center" style="max-width: 18rem;  border-radius: 20px;">
              <img class="mx-5 py-2" src="images/img2.jpg" width="100" height="100" />
              <h2 class="display-6 fs-5 fw-bold "> موظف تسويق </h2>
              <p>خبرة لأكثر من سنتين ، حاصل على شهادة مالهاش حل.</p>
            </div>

          </div>

          <p style="margin-left: 250px; "><a class="btn btn-primary py-3 my-5 " href="{{ route('jobs'); }}"> عرض آخر الوظائف </a></p>

        </div>

        <div class="carousel-item " style="background-color: #f2f2f2; padding-top: 100px; padding-left: 100px;">
          <div class="row mx-5">
            <div class="col card mb-5 py-2 text-center" style="max-width: 18rem;  border-radius: 20px;">
              <img class="mx-5 py-2" src="images/img2.jpg" width="100" height="100" />
              <h2 class="display-6 fs-5 fw-bold "> محلل نظم </h2>
              <p>خبرة لأكثر من سنتين ، حاصل على شهادة مالهاش حل.</p>
            </div>

            <div class="col card mb-5 py-2  mx-5 text-center" style="max-width: 18rem;  border-radius: 20px;">
              <img class="mx-5 py-2  mx-5" src="images/img2.jpg" width="100" height="100" />
              <h2 class="display-6 fs-5 fw-bold "> مدير مشاريع </h2>
              <p>خبرة لأكثر من سنتين ، حاصل على شهادة مالهاش حل.</p>
            </div>

          </div>

          <p style="margin-left: 250px; "><a class="btn btn-primary py-3 my-5 "href="{{ route('jobs'); }}"> عرض آخر الوظائف </a></p>


        </div>

        <div class="carousel-item " style="background-color: #f2f2f2; padding-top: 100px; padding-left: 100px;">
          <div class="row mx-5">
            <div class="col card mb-5 py-2 text-center" style="max-width: 18rem;  border-radius: 20px;">
              <img class="mx-5 py-2" src="images/img2.jpg" width="100" height="100" />
              <h2 class="display-6 fs-5 fw-bold "> مهندس برمجيات</h2>
              <p>خبرة لأكثر من سنتين ، حاصل على شهادة مالهاش حل.</p>
            </div>

            <div class="col card mb-5 py-2  mx-5 text-center" style="max-width: 18rem;  border-radius: 20px;">
              <img class="mx-5 py-2" src="images/img2.jpg" width="100" height="100" />
              <h2 class="display-6 fs-5 fw-bold "> دعم فني </h2>
              <p>خبرة لأكثر من سنتين ، حاصل على شهادة مالهاش حل.</p>
            </div>

          </div>

          <p style="margin-left: 250px; "><a href="{{ route('jobs'); }}" class="btn btn-primary py-3 my-5 "> عرض آخر الوظائف </a></p>


        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">السابق</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">التالي</span>
      </button>
    </div>

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