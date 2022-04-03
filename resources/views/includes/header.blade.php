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
      <a href ="{{ route('signUp'); }}"> <button type="button" class="btn btn-primary me-0" id="showBTN">إنشاء حساب </button> </a>
    </div>
  </header>