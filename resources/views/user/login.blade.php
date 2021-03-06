@extends('admin.layout.master');

@section('content')
<main dir="rtl" class="form-signin py-5 border shadow-lg" style="margin-top: 120px; margin-bottom: 100px;">  
      @if ($errors->any())
            @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
                
            @endforeach
                
      @endif

    <form id="formAuthentication" class="mb-3" action="{{ route('do_login'); }}" method="POST" enctype="multipart/form-data"> 
      @csrf <!-- we use csrf to ensure the security --> 

      <h1 class="h3 mb-5 fw-normal text-center"> تسجيل الدخول </h1>
  
      <div class="form-floating text-muted">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user_email" value="{{ old('user_name'); }}">
          @error('email_username')
              <span class="alert alert-danger">{{ $message }}</span>
            @enderror
        <label for="floatingInput">البريد الإلكتروني</label>
      </div>
      <div class="form-floating text-muted">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="user_pass" value="{{ old('user_pass'); }}">
        <label for="floatingPassword">كلمة السر </label>
      </div>
      
      <button class="w-100 btn btn-lg btn-primary my-3" type="submit">Sign in</button>
    </form>
     
    
  </main>
  @endsection




  