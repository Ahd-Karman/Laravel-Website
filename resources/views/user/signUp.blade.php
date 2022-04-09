@extends('admin.layout.master');

@section('content')
 <div dir="rtl" class="modal modal-signin position-static d-block" tabindex="-1" role="dialog" style="margin-top: 100px;"> 

<!-- Signup -->

    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow-lg">
        <div class="modal-header p-5 pb-4 border-bottom-0">

          <h2 class="fw-bold mb-0">إنشاء حساب</h2>
        </div>
  
        <div class="modal-body p-5 pt-0">

          @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif

          <form id="formAuthentication" class="mb-3" action="{{ route('signUp') }}" method="POST">
            @csrf
            <div class="form-floating mb-3 text-muted">
              <input type="text" class="form-control rounded-4" id="floatingInput" placeholder="Username" name="full_name">
              <label for="floatingInput"> اسم المستخدم </label>
            </div>
            <div class="form-floating mb-3 text-muted">
              <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="user_email">
              <label for="floatingInput">البريد الإلكتروني </label>
            </div>
            <div class="form-floating mb-3 text-muted">
              <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" name="user_pass">
              <label for="floatingPassword">كلمة السر</label>
            </div>

            <div class="form-floating mb-3 text-muted">
              <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" name="confirm_pass">
              <label for="floatingPassword">تأكيد كلمة السر</label>
            </div>

            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">إنشاء حساب </button>
            <small class="text-muted">بالنقر على زر إنشاء حساب فهذا يدل على موافقتك على شروط الاستخدام.</small>
           
          </form>
        </div>
      </div>
    </div>
  </div>
  
  @endsection