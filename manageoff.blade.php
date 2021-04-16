@include('backend.layout.adheader')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>ادارة جدول العروض</strong></h3>
                </div>
            </div>

 
  <table  id="example" class="table table-bordered data-table text-right" style="width:100%" dir="rtl">
  <thead>
    <tr>
      <td >الرقم</td>
      <td >العنوان</td>
      <td >نص الرسالة </td>
      <td >تعديل</td>
      <td >حذف</td>
    </tr>
    </thead>
        <tbody>
        @foreach($contacts as $contact)
    <tr>
      <th>{{$contact->id}}</th>
      <th>{{$contact->title}}</th>
      <th>{{$contact->offers}}</th>
     
      
     
      
      <th> <a href="{{route('offeredit',['id'=>$contact->id])}}"  class="far fa-edit">تعديل</a></th>
      <th> <a href="{{route('offerdestroy',['id'=>$contact->id])}}"  class="far fa-delete" >حذف</a></th>
     
    </tr>
    @endforeach
    </tbody>
</table>

            </div>
            </div>
            </div>
 
@include('backend.layout.adfooter')
