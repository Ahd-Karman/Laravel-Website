<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="css/dashboard-style.css">

    <title> Dashboard </title>
</head>
<body>
        <div dir="rtl" class="row mx-md-5" style="width: 93vw;">
            
    
            <div class="b-example-divider"></div>
                <!-- SideBar-->
            <section class="col-4 container"> 
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px; height: 100vh; background-color: #40189d;">
                    <a href="#" class="d-flex align-items-center mb-3 mb-md-0  text-white text-decoration-none">
                    <span class="fs-4"> الملف التعريفي </span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="page" id="active" class="option">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill mx-4" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                            </svg>
                        البيانات الشخصية
                        </a>
                    </li>

                        <li class="nav-item">
                            <a href="experience.html" class="nav-link text-white"  class="option">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-puzzle-fill mx-4" viewBox="0 0 16 16">
                                    <path d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2H7a.5.5 0 0 1 .5.5v.382c0 .696-.497 1.182-.872 1.469a.459.459 0 0 0-.115.118.113.113 0 0 0-.012.025L6.5 4.5v.003l.003.01c.004.01.014.028.036.053a.86.86 0 0 0 .27.194C7.09 4.9 7.51 5 8 5c.492 0 .912-.1 1.19-.24a.86.86 0 0 0 .271-.194.213.213 0 0 0 .036-.054l.003-.01v-.008a.112.112 0 0 0-.012-.025.459.459 0 0 0-.115-.118c-.375-.287-.872-.773-.872-1.469V2.5A.5.5 0 0 1 9 2h2.395a1.5 1.5 0 0 1 1.493 1.645L12.645 6.5h.237c.195 0 .42-.147.675-.48.21-.274.528-.52.943-.52.568 0 .947.447 1.154.862C15.877 6.807 16 7.387 16 8s-.123 1.193-.346 1.638c-.207.415-.586.862-1.154.862-.415 0-.733-.246-.943-.52-.255-.333-.48-.48-.675-.48h-.237l.243 2.855A1.5 1.5 0 0 1 11.395 14H9a.5.5 0 0 1-.5-.5v-.382c0-.696.497-1.182.872-1.469a.459.459 0 0 0 .115-.118.113.113 0 0 0 .012-.025L9.5 11.5v-.003l-.003-.01a.214.214 0 0 0-.036-.053.859.859 0 0 0-.27-.194C8.91 11.1 8.49 11 8 11c-.491 0-.912.1-1.19.24a.859.859 0 0 0-.271.194.214.214 0 0 0-.036.054l-.003.01v.002l.001.006a.113.113 0 0 0 .012.025c.016.027.05.068.115.118.375.287.872.773.872 1.469v.382a.5.5 0 0 1-.5.5H4.605a1.5 1.5 0 0 1-1.493-1.645L3.356 9.5h-.238c-.195 0-.42.147-.675.48-.21.274-.528.52-.943.52-.568 0-.947-.447-1.154-.862C.123 9.193 0 8.613 0 8s.123-1.193.346-1.638C.553 5.947.932 5.5 1.5 5.5c.415 0 .733.246.943.52.255.333.48.48.675.48h.238l-.244-2.855z"/>
                                </svg>
                            الخبرات
                            </a>
                        </li>

                    <div id="op3">
                        <li>
                            <a href="#" class="nav-link text-white" class="option">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill mx-4" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                                </svg>
                            المهارات
                            </a>
                        </li>
                    </div>

                    <div id="op4">
                        <li>
                            <a href="#" class="nav-link text-white" class="option">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb-fill mx-4" viewBox="0 0 16 16">
                                    <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            المؤهل الدراسي
                            </a>
                        </li>
                    </div>
                    
                    <li>
                        <a href="#" class="nav-link text-white" class="option">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill mx-4" viewBox="0 0 16 16">
                                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
                            </svg>
                        الدورات
                        </a>
                    </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none">
                        <img src="https://avatars.githubusercontent.com/u/80492499?v=4" alt="" width="32" height="32" class="rounded-circle mx-2">
                        <strong> Ahd </strong>
                    </a>
                    </div>
                </div>
            </section>

                
            <div class="col-8">

                    <!-- Header Nav-->
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-4 border-bottom">
                <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
                    
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-4 link-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a></li>

                    <li><a href="#" class="nav-link px-4 link-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </a></li>
                    <li><a href="#" class="nav-link px-4 link-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                    </a></li>

                    <li><a href="#" class="nav-link px-4 link-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                    </a></li>
                </ul>

                <div class=" col-2 text-end">
                <b>  <a class="navbar-brand fs-5" href="index.html" style="color: black; font-size:72px;"> <i> Jobey </i>  </a> </b>
                </div>
                </header>

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

    <script src="js/dashboard-js.js">
    </script>

</body>
</html>