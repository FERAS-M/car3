@extends('backend.layout.main')
@section('content')
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
                <br>  <br>
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
                   
                </div>

            </div>
            <br>
            @endforeach
        </div>
    </div>

@endsection