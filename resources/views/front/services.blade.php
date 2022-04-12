@extends('front.layout.master');

@section('content')
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

@endsection