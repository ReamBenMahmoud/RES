<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style> 
#fonts {
  font-family: 'Tajawal', sans-serif;
}
</style> 
<div class="container">
    <h2 id="fonts" class="ml-3">إضافة وجبة جديدة</h2>

    <form class="form-group col-md-4 col-form-label text-md-right" action="{{ url('/meals/store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row form-group">
            <label  id="fonts" class="col-2 col-form-label">الإسم</label>

            <div class="col-10">
                <input type="text" name="name" class="form-control">
            </div>
        </div>

        <div class="row form-group">
            <label  id="fonts" class="col-2 col-form-label">السعر</label>

            <div class="col-10">
                <input type="number" name="price" class="form-control">
            </div>
        </div>

        <div class="row form-group">
            <label id="fonts" class="col-2.5 col-form-label">التفاصيل</label>

            <div class="col-10">
                <textarea name="details" class="form-control"></textarea>
            </div>
        </div>

        <div class="row form-group">
            <label id="fonts" class="col-2 col-form-label">الصنف</label>

            <div id="fonts" class="col-10">
                <select name="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
  <div id="fonts" class="col-10">
  صورة
                <input type="file" name="image" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <input type="submit" value="Add" class="btn btn-success offset-2">
        </div>
    </form>
</div>
