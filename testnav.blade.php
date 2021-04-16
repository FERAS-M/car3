@include('backend.layout.adheader')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>ادارة جدول السيارات</strong></h3>
                </div>
            </div>

 
  <table  id="example" class="table table-bordered data-table text-right" style="width:100%" dir="rtl">
  <thead>
    <tr>
      <td >الرقم</td>
      <td >اسم السيارة</td>
      <td >الموديل</td>
      <td >سنة الانتاج</td>
      <td >عدد المقاعد</td>
      <td >الصورة</td>
      <td >تعديل</td>
      <td >حذف</td>
    </tr>
    </thead>
        <tbody>
    @foreach($cars as $car)

    <tr>
      <th>{{$car->id}}</th>
      <th>{{$car->name}}</th>
      <th>{{$car->model}}</th>
      <th>{{$car->pdate}}</th>
      
      <th>{{$car->cochear}}</th>
      <th>{{$car->photo}}</th>
      
      <th> <a href="{{route('carsedit',['id'=>$car->id])}}"  class="far fa-edit">تعديل</a></th>
      <th> <a href="{{route('cardestroy',['id'=>$car->id])}}"  class="far fa-delete" >حذف</a></th>
     
    </tr>
    @endforeach
    </tbody>
</table>

            </div>
            </div>
            </div>
 
@include('backend.layout.adfooter')