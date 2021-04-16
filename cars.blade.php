
@include('backend.layout.header')


   
    <!-- about -->
    <div id="about"  class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="http://localhost/mah-cars/images/33.png" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <h3>مـن نحـن</h3>
                        <span>Our Cars Rental</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the </p>

                    </div>
               
            </div>
        </div>
    </div>
    </div>
    <!-- end about -->

    <!-- brand -->
    <div  id="brand" class="brand">
        <div class="container">
            <div class="row">
           
                <div class="col-md-12">
                    <div class="titlepage text-right">
                        <h2>كافـة الموديـلات</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                @foreach($cars as $car)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{$car->photo}}" alt="{{$car->name}}" />
                            <h5>{{$car->name}}<strong class="red"> سنة الانتاج {{$car->pdate}}</strong></h5>
                            <span>{{$car->model}}</span><span>{{$car->cochear}}</span>
                            <a href="{{route('carbook')}}" class="btn btn-primary">احجز الان</a>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
    
     

    <!-- end brand -->
    <!-- clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text-right">
                        <h2> العــروض المتــاحة </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
        @foreach($contacts as $contact)
        <br>
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <br>
                <br>
                <div class="carousel-inner">
                
                    <div class="carousel-item">
                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>{{$contact->title}}<br><strong class="ornage_color">{{$contact->id}}</strong></h3>
                                    <p>{{$contact->offers}}</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="http://localhost/mah-cars/icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>{{$contact->title}}<br><strong class="ornage_color">{{$contact->id}}</strong></h3>
                                    <p>{{$contact->offers}}</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="http://localhost/mah-cars/icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>{{$contact->title}}<br><strong class="ornage_color"></strong>{{$contact->id}}</h3>
                                    <p>{{$contact->offers}}</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="http://localhost/mah-cars/icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <br>
                </div>

            </div>
            @endforeach
            <br>
        </div>
    </div>

@include('backend.layout.footer')

