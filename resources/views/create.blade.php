{{-- <form action="{{url('/categories')}}" method="POST"> --}}


 <form action="{{url('/categories')}}" method="POST">
 @csrf
  <div class="form-group">
    <label for="category">إسم الصنف </label>
    <input type="text" class="form-control" id="category" aria-describedby="emailHelp" placeholder="إسم الصنف">
    
  </div>
   
   
  <button type="submit" class="btn btn-primary" >موافق</button>
</form>
