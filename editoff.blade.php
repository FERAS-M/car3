@include('backend.layout.adheader')


<div class="card"  style="width: 100%">


  <div class="card-header text-center">
    <h2>تعديل العروض </h2>
  </div>
  <div class="card-body">
  
  <form  action="{{route('offerupdate',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data" dir="rtl">
  @csrf
  
  <div class="form-group text-center">
    <label for="title ">اسم المستخدم</label>
    <input type="text" class="form-control" id="title" name="title"  value="{{$data->title}}">
    </div>
    
    <div class="form-group text-center">
      <div class="col-md-12">
       <textarea class="textarea" id="offers" rows="7" cols="100" name="offers"  >{{$data->offers}}</textarea>
        </div>
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