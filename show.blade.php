@include('backend.layout.header')
<br>
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
                            <img src="{{$car->photo}}" alt="{{$car->name}}"/>
                            <h5>{{$car->name}}<strong class="red"> سنة الانتاج  {{$car->pdate}}</strong></h5>
                            <span>{{$car->model}}</span><span>{{$car->cochear}}</span>
                            <a href="{{route('carbook')}}" class="btn btn-primary">احجز الان</a>
                        </div>
                    </div>
                    @endforeach
                    </div>
            
                </div>
            </div>
        </div>
@include('backend.layout.footer')