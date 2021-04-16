@include('backend.layout.adheader')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>ادارة المستخدمين</strong></h3>
                </div>
            </div>
            <table id="example" class="table table-bordered data-table text-right" style="width:100%" dir="rtl" >
        <thead>
            <tr>
            <td >الرقم</td>
      <td >الاسم </td>
      <td > البريد الالكتروني </td>
      <td > تاريخ التسجيل </td>
      <td > الصلاحيات </td>
      <td > تعديل </td>
      <td > حذف </td>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
      <th>{{$user->id}}</th>
      <th>{{$user->name}}</th>
      <th>{{$user->email}}</th>
      <th>{{$user->created_at}}</th>
      <th>{{$user->rol3}}</th>
      
      
     
      <th> <a href="{{route('usersedit',['id'=>$user->id])}}"  class="far fa-edit">تعديل</a></th>
      <th> <a href="{{route('userdestroy',['id'=>$user->id])}}"  class="far fa-delete" >حذف</a></th>
                 
            </tr>
            @endforeach
            
        </tbody>
        <
    </table>
        </div>
    </div>
</div>
@include('backend.layout.adfooter')