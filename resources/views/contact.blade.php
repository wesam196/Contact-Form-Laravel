<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{url('addMessage')}}" method="post">

    @csrf

    <label for="name">الاسم</label><br>
    <input type="text" name="name">
<br><br>
    <label for="ContactWay">وسيلة الاتصل</label><br>
    <input type="text" name="ContactWay">
    <br><br>

    <label for="Message">الرسالة</label><br>
    <input type="text" name="Message">
    <br><br>
    <label for="type">نوع التواصل</label>
    <select name="type" id="">
        <option value="0">تواصل</option>
        <option value="1">اقتراح</option>
    </select>
<input type="submit">
</form>
</body>
</html>