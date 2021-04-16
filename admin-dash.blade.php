<!DOCTYPE html>
<html lang="en">
   <head>

  

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>تأجير سيارات حديثة</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="http://localhost/mah-cars/mah/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="http://localhost/mah-cars/mah/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="http://localhost/mah-cars/mah/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="http://localhost/mah-cars/mah/css/jquery.mCustomScrollbar.min.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>

      
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'مشاهدات', 'تسجيل نظام'],
          ['يناير',  1000,      400],
          ['فبراير',  1170,      460],
          ['مارس',  660,       1120],
          ['ابريل',  1030,      540],
          ['مايو',  1030,      540],
          ['يونيو',  1030,      400],
          ['يوليو',  1030,      540],
          ['اغسطس',  1030,      400],
          ['سبتمبر',  660,      540],
          ['اكتوبر',  1030,      540],
          ['نوفمبر',  660,      400],
          ['ديسمبر',  1030,      540]
        ]);

        var options = {
          title: 'عدد مشاهدات الموقع',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>




      <style>
    #map1 {
        width:100%;
        height:400px ;

    }
    .card1 {
      background-image: url('http://localhost/mah-cars/images/green.jpg');
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
    }
    .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
    }
    .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}

    </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="http://localhost/mah-cars/mah/images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
   
   <div class="wrapper" dir="rtl">

      <div class="sidebar" dir="rtl">
         <!-- Sidebar  -->
        <nav id="sidebar" >

            <div id="dismiss">
                <i class="fa fa-arrow-right"></i>
            </div>

            <ul class="list-unstyled components" dir="rtl">
                
            <li class="active">
                    <a  href="#"></a>
                </li>
                <li >
                    <a  href="#"></a>
                </li>
                <li >
                    <a href="{{route('admin.dash')}}">الرئيسية</a>
                </li>
                <li >
                    <a  href="#"></a>
                </li>
                <li >
                    <a href="{{route('caradd')}}">اضافة سيارة جديدة</a>
                </li>
                <li >
                    <a  href="#"></a>
                </li>
                <li>
                    <a href="{{route('seecars')}}">ادارة جدول السيارات</a>
                    
                </li>
                <li >
                    <a  href="#"></a>
                </li>
                <li>
                    <a href="{{route('seeusers')}}">ادارة المستخدمين</a>
                </li>
                <li >
                    <a  href="#"></a>
                </li>

                <li>
                    <a href="{{route('seelic')}}">ادارة عقود الايجار</a>
                </li>
                <li >
                    <a  href="#"></a>
                </li>
                <li>
                    <a href="{{route('addoffers')}}">اضافة عروض</a>
                </li>
                <li >
                    <a  href="#"></a>
                </li>
                <li>
                    <a href="{{route('seeoffer')}}">ادارة العروض</a>
                </li>
                <li >
                    <a  href="#"></a>
                </li>
                <li>
                    <a href="#contact">من نحن</a>
                </li>
            </ul>
            </ul>
            </ul>

        </nav>
      </div>


      <div id="content">


      <!-- section -->
      <section id="home" class="top_section">
         <div class="row">
            <div class="col-lg-12">
               <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                     <button type="button" id="sidebarCollapse" style="color:red">
                              <img  src="http://localhost/mah-cars/mah/images/mi.png" alt="#" />
                           </button>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="right_header_info">
                     <ul>

                     
                   
                     <li><a></a></li>
                     
                         <li>
                        
                             
                           </a>
                        </li>
                        <li><a></a> </li>
                        <li><a></a> </li>
                        <li><a></a> </li>
                        <li><a></a> </li>
                        <li><a></a> </li>
                        <li><a></a> </li>
                        <li ><a class="active" style="color:red" href="{{route('exite.user')}}">خروج</a></li>
                        <li><a></a> </li>
                        <li><a class="active" style="color:red" href="#">مرحبا  {{Auth::user()->name}}</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <section>
         <div class="container-fluid">
            <div class="row">
            <div id="curve_chart" style="width: 1400px; height: 600px;"></div>
              
               
               
               <div class="col-md-7">
                 <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                     
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                          
                        </div>
                       
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
        
      </section>
      <!-- end header -->
            </div>
         </div>
      </section>

      
      <!-- end section -->
      
      <!-- section --> 
      
      <!-- end section -->

       <!-- section -->
     
                     <!-- The slideshow -->
                     
      <!-- end section -->

      <!-- section -->
      
      <!-- end section -->

      <!-- footer -->
   
      <!-- end footer -->

      <!-- copyright -->
<br>
<br>
<br>
<br>      
      <div class="row m-t-25">
      <div class="col-sm-6 col-lg-3">
      <div class="card1 text-right" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">العقود</h5>
    <h6 class="card-subtitle mb-2 text-muted">العقود الجديدة خلال </h6>
    <p class="card-text text-center">الشهري : {{   $uuser   }} 
    
   
    اليوم :  {{  $uuserd  }} 
    
    الامس :  {{  $uusery  }} 
    
    </p>
   
  </div>
</div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                            <div class="card1 text-right" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">السيارات</h5>
    <h6 class="card-subtitle mb-2 text-muted">السيارات الجديدة المضافة خلال الشهر</h6>
    <p class="card-text text-center">الشهري : {{   $car   }} 
    
   
    اليوم :  {{  $card  }} 
    
    الامس :  {{  $cary  }} 
    
    
    
    
    </p>
   
  </div>
</div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                            <div class="card1 text-right" style="width: 18rem;">
  <div class="card-body" >
    <h5 class="card-title">العروض</h5>
    <h6 class="card-subtitle mb-2 text-muted">العروض الجديدة خلال الشهر</h6>
    <p class="card-text text-center">الشهري : {{   $con   }} 
    
   
    اليوم :  {{  $cond  }} 
    
    الامس :  {{  $cony  }} </p>
   
  </div>
</div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                            <div class="card1 text-right" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">المستخدمين</h5>
    <h6 class="card-subtitle mb-2 text-muted">المستخدمين الجدد المسجلين خلال الشهر</h6>
    <p class="card-text text-center">الشهري : {{   $sum   }} 
    
   
    اليوم :  {{  $sumd  }} 
    
    الامس :  {{  $sumy  }} 
    
    
    
     </p>
   
  </div>
</div>
                            </div>
                           
                        </div>

                        <div class="cpy_right">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <p>© 2021 All Rights Reserved. Design by <a href="https://html.design">ABU-FERAS EL HINDY</a></p>
                     </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- right copyright -->
      



   </div>
</div>

   <div class="overlay"></div>
      
      <!-- Javascript files-->
     
    <!-- javascript -->

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>
      <script src="http://localhost/mah-cars/mah/js/jquery.min.js"></script>
      <script src="http://localhost/mah-cars/mah/js/popper.min.js"></script>
      <script src="http://localhost/mah-cars/mah/js/bootstrap.bundle.min.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="http://localhost/mah-cars/mah/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="http://localhost/mah-cars/mah/js/custom.js"></script>
      <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>
    
      <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 31.52333, lng: 34.43347},
          });

        var image = 'images/location_point.png';
          var beachMarker = new google.maps.Marker({
             position: {lat: 31.52333, lng: 34.43347},
             map: map,
             icon: image
          });
        }
        </script>
        <!-- google map js -->
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
        <!-- end google map js -->



       

   </body>
</html>
       
                
           
   