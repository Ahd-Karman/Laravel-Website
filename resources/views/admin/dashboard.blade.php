@extends('admin.layout.adminMaster');

@section('content')
 <h4 class="mb-5"> البيانات الشخصية </h4>   


                    <!-- Main Content (Cards)-->
                <div class=" row" style="margin-left: 70px;"> 

                    <div class="col card text-white mb-5 py-2 mx-3" style="max-width: 15rem; border-radius: 20px; background-color:#8bc741;">
                        <span style="font-size: 16px; margin-bottom: 20px;"> الرسائل غير المقروءة </span>

                        <h5 class="card-title"> 93  </h5>
                        
                        <div class="card-footer">
                            
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-envelope-fill rounded float-start px-1" viewBox="0 0 16 16" style="border:1px solid white ; border-radius:20px;">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                        </div>
                    </div>

                    <div class="col card text-white mb-5 py-2 mx-3" style="max-width: 15rem; border-radius: 20px; background-color: #1acf85;">
                        <span style="font-size: 14px; margin-bottom: 8px;" > تمت مشاهدة الملف الشخصي من قبل </span>

                        <h6 class="card-title"> <b> 41,593 </b>  </h6>
                        
                        <div class="card-footer">
                            
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-envelope-fill rounded float-start" viewBox="0 0 16 16" style="border:1px solid white ; border-radius:20px;">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        </div>
                    </div>

                    <div class="col card text-white mb-5 py-2 mx-3" style="max-width: 15rem; border-radius: 20px; background-color:#48a9f8">
                        <span style="font-size: 16px; margin-bottom: 20px;" > مشاريع تم العمل عليها </span>

                        <h5 class="card-title"> 60  </h5>
                        
                        <div class="card-footer">
                            
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-envelope-fill rounded float-start px-1" viewBox="0 0 16 16" style="border:1px solid white ; border-radius:20px;">
                            <path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm9.5 5.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm-6.354-.354a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146z"/>
                        </svg>
                        </div>
                    </div>

                    <div class="col card text-white mb-5 py-2 mx-3" style="max-width: 15rem; border-radius: 20px; background-color: #4e36e2;">
                        <span style="font-size: 16px; margin-bottom: 20px;" > المقابلات الوظيفية السابقة </span>

                        <h5 class="card-title"> 31  </h5>
                        
                        <div class="card-footer">
                            
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-envelope-fill rounded float-start px-1" viewBox="0 0 16 16" style="border:1px solid white ; border-radius:20px;">
                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM2.545 3h10.91c.3 0 .545.224.545.5v1c0 .276-.244.5-.546.5H2.545C2.245 5 2 4.776 2 4.5v-1c0-.276.244-.5.545-.5z"/>
                        </svg>
                        </div>
                    </div>

                </div>
            


                    <!-- User Info -->

                    
                    <div class="card" style="width: 18rem; border-radius: 20px;" id="userInfo">
                        <img src="https://avatars.githubusercontent.com/u/80492499?v=4" class=" card-img-top rounded-circle img-thumbnail my-3 px-5" width="30" height="70" style="border-color: white">
                        <div class="card-body text-center">
                        <h5 class="card-title">Ahd Karman</h5>
                        <p class="card-text text-secondary"> Programmer</p>
                        <div class="row">
                            <div class="col"> <span style="border:5px dotted #39b49e; border-radius: 50%; border-top: none; border-right: none; padding: 20px; font-size: 12px;"> HTML </span></div>
                            <div class="col"> <span style="border:5px dotted #54b14a; border-radius: 50%; border-top: none; border-right: none; padding: 20px; font-size: 12px;"> CSS </span></div>
                            <div class="col"> <span style="border:5px dotted #fc851e; border-radius: 50%; border-top: none; border-right: none; padding: 20px; font-size: 12px;"> PHP </span></div>
                        </div>

                        </div>
                        
                        <h5 class="card-title my-4 px-3"> آخر التحديثات</h5>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">انضمّت Ahd إلى مجتمع جديد !</li>
                        <li class="list-group-item">تابعت Ahd صفحة <i>"وظيفتي" .</i></li>
                        <li class="list-group-item"> تركت العمل لدى <i> "For9a".</i></li>
                        </ul>
                        <div class="card-body text-center ">
                        <a href="#" class="card-link mx-3 text-success text-decoration-none">عرض المزيد</a>
                        <span class="card-link mx-3 text-decoration-none text-danger" onclick="hide()" id="btn">إخفاء</span>
                        </div>
                    
                    </div>
                   

                    <!-- 
                    <div class="card mb-0" style="max-width: 540px;  border-radius: 20px;" id="userInfo">
                        <div class="list-group list-group-horizontal row g-0">
                            <div class="col-md-3">
                                <img src="https://avatars.githubusercontent.com/u/80492499?v=4" class=" my-1 mx-1 img-fluid rounded-circle img-thumbnail" width="150" height="150" alt="...">
                            </div>

                                <div class="col-md-5">
                                    <div class="card-body text-center mb-md-2">
                                    <h5 class="card-title">عهد كرمان </h5>
                                    <p class="card-text text-secondary"> مبرمجة</p>
                                    </div>

                                    <div class="row mx-md-0">
                                        <div class="col"> <span style="border:5px dotted #39b49e; border-radius: 50%; border-top: none; border-right: none; padding: 10px; font-size: 12px;"> HTML </span></div>
                                        <div class="col"> <span style="border:5px dotted #54b14a; border-radius: 50%; border-top: none; border-right: none; padding: 10px; font-size: 12px;"> CSS </span></div>
                                        <div class="col"> <span style="border:5px dotted #fc851e; border-radius: 50%; border-top: none; border-right: none; padding: 10px; font-size: 12px;"> PHP </span></div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="card-title my-4 "> آخر التحديثات</h5>
                                    <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item">انضمّت Ahd إلى مجتمع جديد !</li>
                                    <li class="list-group-item">تابعت Ahd صفحة <i>"وظيفتي" .</i></li>
                                    <li class="list-group-item"> تركت العمل لدى <i> "For9a".</i></li>
                                    </ul>
                                    <div class="card-body text-center ">
                                    <a href="#" class="card-link mx-3 text-success text-decoration-none">عرض المزيد</a>
                                    <span class="card-link mx-3 text-decoration-none text-danger" onclick="hide()" id="btn">إخفاء</span>
                                    </div>
                                </div>


                        </div>
                      </div>
                      -->

                    <img src="https://avatars.githubusercontent.com/u/80492499?v=4" class=" rounded-circle img-thumbnail " width="100" height="100" id="shot" style="border:3px solid; border-color: #4e36e2; display: none;" onclick="show()">
                    
                    
        </div>
        </div>

@endsection