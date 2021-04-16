@include('backend.layout.adheader')


<div class="card"  style="width: 100%;">


  <div class="card-header text-center">
    <h2>تعديل بيانات السيارة</h2>
  </div>
  <div class="card-body">
  
  <form  action="{{route('carsupdate',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data" dir="rtl">
  @csrf
  
  <div class="form-group text-center">
    <label for="name ">اسم السيارة</label>
    <input type="text" class="form-control" id="name" name="name"  value="{{$data->name}}">
    
  </div>
  <div class="form-group  text-center ">
    <label for="model">الموديل</label>
    <input type="text" class="form-control" id="model" name="model"  value="{{$data->model}}">
  </div>
  <div class="form-group  text-center ">
    <label for="cochear">عدد المقاعد</label>
    <input type="text" class="form-control" id="cochear" name="cochear"  value="{{$data->cochear}}">
  </div>
  <div class="form-group  text-center ">
    <label for="pdate">الموديل</label>
    <input type="date" class="form-control" id="pdate" name="pdate"  value="{{$data->pdate}}">
  </div>
  <div class="form-group  text-center ">
    <label for="photo">الموديل</label>
    <input type="file" class="form-control" id="photo" name="photo">
  </div>
  <div class="form-group  text-center ">
  <button class="btn btn-primary ">تعديل</button>
  </div>
</form>

    
  </div>
  <div class="card-footer text-muted text-center">
    Edit Cars Informations 
  </div>
</div>
<br>
@include('backend.layout.adfooter')