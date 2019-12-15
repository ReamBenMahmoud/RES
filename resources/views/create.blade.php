<form action="{{url('/categories')}}" method="POST">

@csrf

<input type="name" name="name">
<br>
<input type="submit" name="submit" value="موافق">

</form>
