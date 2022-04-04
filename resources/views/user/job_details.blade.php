  @extends('admin.layout.master');
  @section('content')
    <!-- Main Content -->
  <main dir="rtl">

    <section  class=" py-5 container">
      <div class="row py-lg-5 ">
        <div class="col-lg-6 col-md-8 my-2 px-2 py-2" style="background-color: #fafbfc; width: 100vw; border:1px solid black">
          <h1 class="fw-light"> <b> تفاصيل الوظيفة</b></h1>
          <p class="lead text-muted"> نتميز دوماً بتقديم الوظائف الرائعة لعملائنا ! </p>
          
        </div>

     
      </div>

      <div class="row">
        <a href="Jobs.html">
            <svg class="col bg-dark" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16" style=" margin-top:-10px;">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
          </a>
          
            <div class="col-4 card mx-2 " style="width: 18rem; background-color: #f2f2f2;">
                <img class="card-img-top img-thumbnail my-4 shadow-sm" src="images/p2.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title text-center">شركة أمازون</h5>
                <p class="card-text">الشركة الأولى الرائدة في مجال التكنولوجيا !</p>
                <a href="#" class="btn btn-primary mx-5">متابعة العروض</a>
                </div>
            </div>

            <div class="col-8 row py-lg-2 mx-3" style="background-color: #f2f2f2">
                <div class="col-lg-6 col-md-8 my-2 px-2 py-2" style=" width: 100vw;">
                    <div class="row my-4">
                        <h1 class=" col-5 fw-light text-center my"> <b> محلل نظم</b>
                            <p class="lead py-2 text-muted"> خبرة لأكثر من سنتين <br> حاصل على شهادة متوسطة في تحليل النظم </p>
                        </h1>
                        <img class=" col-7 shadow-lg p-1" src="images/img2.jpg" width="10%" height="20%" />

                    </div>

                    <h3 class="my-5"> المؤهل الدراسي</h3>
                    <p class="lead text-muted list-group-item "> جامعي  </p>
                    <hr>

                    <h3 class="py-3"> الخبرات </h3>
                    <span class="list-group list-flush" >
                        <p class="lead text-muted list-group-item"> خبير في التحليل </p>
                        <p class="lead  text-muted list-group-item"> مصمم أنظمة </p>
                        <p class="lead  text-muted list-group-item"> دعم فني </p>
                        <p class="lead  text-muted list-group-item"> يشتغل كل حاجة  </p>
                    </span>
                    
                  
                  
                </div>
            </div>
        </div>

    </section>
  </main>
  
  @endsection
