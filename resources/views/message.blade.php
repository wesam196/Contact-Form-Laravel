<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

    <tr>
        <th>رقم الرسالة</th>
        <th>الاسم</th>
        <th>طريقة التواصل</th>
        <th>نص الرسالة</th>
        <th>التاريخ</th>

    </tr>
<tr>
    <th>{{$data->id}}</th>
    <th>{{$data->name}}</th>
    <th>{{$data->contactWay}}</th>
    <th>{{$data->message}}</th>
    <th>{{$data->created_at}}</th>
</tr>


    </table>
</body>
</html>