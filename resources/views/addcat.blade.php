@extends('layout.nf')

@section('content')
    {{-- <form action="{{url('/categories')}}" method="POST"> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style> 
        #fonts {
          font-family: 'Tajawal', sans-serif;
        }
        </style> 
        
        <div id="fonts" class="mt-5"
        
         <form action="{{url('/categories')}}" method="POST">
         @csrf
        
          <div class="form-group row col-md-6">
             
                <label for="category" class="col-md-2 col-form-label text-md-right">إسم الصنف </label>
                <input id="fonts" type="text" class="form-control col-2 col-md-5 " id="category" aria-describedby="emailHelp" placeholder="إسم الصنف">
                <button id="fonts" type="submit" class="btn btn-success col-ml-1 ml-4" >موافق</button>
        
          </div>
         
               
        </form>
        
        </div>
@endsection