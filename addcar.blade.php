@include('backend.layout.adheader')

<div class="card"  style="width: 100%; ">


  <div class="card-header text-center">
    <h2>اضافة سيارة جديدة</h2>
  </div>
  <div class="card-body">
   
  <form dir="rtl" action="{{Route('car.store')}}" method="Post" enctype="multipart/form-data">
  @csrf
  <div class="form-group text-center">
    <label for="name ">اسم السيارة</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Car Name">
    
  </div>
  <div class="form-group  text-center ">
    <label for="model">الموديل</label>
    <input type="text" class="form-control" id="model" name="model" placeholder="Car Model">
  </div>
  <div class="form-group  text-center ">
    <label for="cochear">عدد المقاعد</label>
    <input type="text" class="form-control" id="cochear" name="cochear" placeholder="Count Chears">
  </div>
  <div class="form-group  text-center ">
    <label for="pdate">سنة الانتاج</label>
    <input type="date" class="form-control" id="pdate" name="pdate" placeholder="P-Date">
  </div>
  <div class="form-group  text-center ">
    <label for="photo">الصورة</label>
    <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo Car">
  </div>
  <div class="form-group  text-center ">
  <button class="btn btn-primary ">اضافة</button>
  </div>
</form>

    
  </div>
  <div class="card-footer text-muted text-center">
    Add New Cars
  </div>
</div>

<br>
@include('backend.layout.adfooter')