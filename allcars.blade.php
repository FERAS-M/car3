@include('backend.layout.header')

<div class="card"  style="width:100%;">


  <div class="card-header text-center">
    <h2>عقد ايجار سيارة </h2>
  </div>
  <div class="card-body">
   @if (count($errors)>0)
   @foreach($errors->all() as $error)
  <div class="alert alert-danger">
  {{$error}}</div>
  @endforeach
   @endif
  <form dir="rtl" action="{{Route('lic.store')}}" method="Post" enctype="multipart/form-data">
  @csrf
  <div class="form-group text-center">
    <label for="carname ">اسم السيارة</label>
    <input type="text" class="form-control" id="carname" name="carname" placeholder="اسم السيارة">
    
  </div>
  <div class="form-group  text-center ">
    <label for="username">اسم المستاجر</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="اسم المستاجر">
  </div>
  <div class="form-group  text-center ">
  <label for="lictype">نوع العقد</label>
  <div>
    <input type="radio" id="lictype" name="lictype" value="يومي">
    <label for="contactChoice1">يومي</label>

    <input type="radio" id="lictype" name="lictype" value="شهري">
    <label for="contactChoice2">شهري</label>

    <input type="radio" id="lictype"  name="lictype" value="سنوي">
    <label for="contactChoice3">سنوي</label>
  </div>

</div>
  <div class="form-group  text-center ">
    <label for="licstart">تاريخ بداية العقد</label>
    <input type="date" class="form-control" id="licstart" name="licstart" placeholder="بداية العقد">
  </div>
  <div class="form-group  text-center ">
    <label for="licend">تاريخ نهاية العقد</label>
    <input type="date" class="form-control" id="licend" name="licend" placeholder="نهاية العقد">
  </div>
  <div class="form-group  text-center ">
    <label for="price">السعر</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="السعر">
  </div>
  <div class="form-group  text-center ">
  <button class="btn btn-primary ">اضافة</button>
  </div>
</form>

    
  </div>
  <div class="card-footer text-muted text-center">
    ايجــــار
  </div>
</div>

    <br>
    @include('backend.layout.footer')