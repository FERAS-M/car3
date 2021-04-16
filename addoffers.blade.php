@include('backend.layout.adheader')


<div class="card" style="width: 100%">


  <div class="card-header text-center">
    <h2>اضافة عروض</h2>
  </div>
  <div class="card-body">
  
  <form  action="{{route('offer.store')}}" method="POST" enctype="multipart/form-data" dir="rtl">
  @csrf
  
  <div class="form-group text-center">
    <label for="title ">العنوان</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="العنوان ">
    </div>

    <div class="form-group text-center">
                            <div class="col-md-12">
                                <textarea class="textarea" name="offers" id="offers" rows="7" cols="100" placeholder="نص الرسالة"></textarea>
                            </div>
                            </div>
    <div class="form-group  text-center ">
  <button class="btn btn-primary ">اضافة</button>
  </div>
 
</form>

    
  </div>
  <div class="card-footer text-muted text-center">
    Edit users Informations 
  </div>
</div>
<br>
@include('backend.layout.adfooter')