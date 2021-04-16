@include('backend.layout.adheader')


<div class="card" style="width: 100%">


  <div class="card-header text-center">
    <h2>تعديل بيانات العقد</h2>
  </div>
  <div class="card-body">
  
  
  <form dir="rtl" action="{{Route('licupdate',['id'=>$data->id])}}" method="Post" enctype="multipart/form-data">
  @csrf
  <div class="form-group text-center">
    <label for="carname ">اسم السيارة</label>
    <input type="text" class="form-control" id="carname" name="carname" value="{{$data->carname}}">
    
  </div>
  <div class="form-group  text-center ">
    <label for="username">اسم المستاجر</label>
    <input type="text" class="form-control" id="username" name="username" value="{{$data->username}}">
  </div>
 
  <div  class="form-group text-center">
  <label for="lictype">نوع العقد</label>

<select name="lictype" id="lictype" value="{{$data->lictype}}">
  <option value="يومي">يومي</option>
  <option value="شهري">شهري</option>
  <option value="سنوي">سنوي</option>
 
</select>

</div>
  <div class="form-group  text-center ">
    <label for="licstart">تاريخ بداية العقد</label>
    <input type="date" class="form-control" id="licstart" name="licstart" value="{{$data->licstart}}">
  </div>
  <div class="form-group  text-center ">
    <label for="licend">تاريخ نهاية العقد</label>
    <input type="date" class="form-control" id="licend" name="licend" value="{{$data->licend}}">
  </div>
  <div class="form-group  text-center ">
    <label for="price">السعر</label>
    <input type="text" class="form-control" id="price" name="price" value="{{$data->price}}">
  </div>
  <div class="form-group  text-center ">
  <button class="btn btn-primary ">تعديل</button>
  </div>
</form>

    
  </div>
  <div class="card-footer text-muted text-center">
    Edit lices Informations 
  </div>
</div>
<br>
@include('backend.layout.adfooter')