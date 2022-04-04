@extends('admin.layout.master');

@section('content')
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
     <a href="{{ route('dashboard'); }}">  <button class="w-100 btn btn-lg btn-primary my-3" type="submit">Sign in</button> </a>
    
  </main>
  @endsection




  