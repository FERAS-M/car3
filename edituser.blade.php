@include('backend.layout.adheader')


<div class="card"  style="width: 1400px; height: 600px;">


  <div class="card-header text-center">
    <h2>تعديل بيانات المستخدمين</h2>
  </div>
  <div class="card-body">
  
  <form  action="{{route('usersupdate',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data" dir="rtl">
  @csrf
  
  <div class="form-group text-center">
    <label for="name ">اسم المستخدم</label>
    <input type="text" class="form-control" id="name" name="name"  value="{{$data->name}}">
    
  </div>
  <div class="form-group  text-center ">
    <label for="email">البريد الالكتروني</label>
    <input type="email" class="form-control" id="email" name="email"  value="{{$data->email}}">
  </div>
  <div class="form-group  text-center ">
    <label for="created_at"> تاريخ التسجيل</label>
    <input type="timestamp" class="form-control" id="created_at" name="created_at"  value="{{$data->created_at}}">
  </div>

  <div class="form-group text-center">
    <label for="rol3"> الصلاحيات (0 مستخدم , 1 أدمن) </label>
    <input type="text" class="form-control" id="rol3" name="rol3"  value="{{$data->rol3}}">
   </div>
  
  <div class="form-group  text-center ">
  <button class="btn btn-primary ">تعديل</button>
  </div>
</form>

    
  </div>
  <div class="card-footer text-muted text-center">
    Edit users Informations 
  </div>
</div>
<br>
@include('backend.layout.adfooter')