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

  
      <td >الرقم</td>
      <td >اسم السيارة</td>
      <td >اسم المستأجر</td>
      <td >نوع العقد </td>
      <td > بداية العقد</td>
      <td >نهاية العقد</td>
      <td >السعر</td>
      <td >تعديل</td>
      <td >حذف</td>
     
    </tr>
    </thead>
        <tbody>
    @foreach($feras as $fer)
    <tr>
      <th>{{$fer->id}}</th>
      <th>{{$fer->carname}}</th>
      <th>{{$fer->username}}</th>
      <th>{{$fer->lictype}}</th>
      
      <th>{{$fer->licstart}}</th>
      <th>{{$fer->licend}}</th>
      <th>{{$fer->price}}</th>
      
      <th> <a href="{{route('licedit',['id'=>$fer->id])}}"  class="far fa-edit">تعديل</a></th>
      <th> <a href="{{route('deletelic',['id'=>$fer->id])}}"  class="far fa-delete" >حذف</a></th>
           
    </tr>
    @endforeach
    
    </tbody>
</table>

            </div>
            </div>
            </div>
  
 
@include('backend.layout.adfooter')