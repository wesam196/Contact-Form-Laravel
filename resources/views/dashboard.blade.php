<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>this is dashboard</h1>

<table class='table' >
<tr>
    <th>رقم الرسالة</th>
    <th>الاسم</th>
    <th>نوع الرسالة</th>
    <th>الحالة</th>
    <th>تغيير الحالة</th>
    <th>فتح الرسالة</th>
  </tr>

  @foreach($data as $item)
  <tr>
    <th>{{$item->id}}</th>
    <th>{{$item->name}}</th>

    @if($item->type == 0)
    <th>تواصل</th>
    
    @elseif($item->type==1)
        <th>اقتراح</th>
    
    @endif


    @if($item->read==0)
    <th>غير مقروؤة</th>
    @else
    <th>مقروؤة</th>
    @endif
    <th>
    <a href="changeStatus/{{$item->id}}">تغيير حالة الرسالة</a>
    </th>

    <th>

    <a href="message/{{$item->id}}">فتح الرسالة</a>
    </th>
  </tr>
@endforeach


</table>
</body>
</html>
