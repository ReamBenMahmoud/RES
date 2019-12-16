{{-- reservation --}}

 @extends('layout.nf')

 @section('content')
 
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">إحجز طاولة</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">الرئيسية <i class="ion-ios-arrow-forward"></i></a></span> <span>حجوزات <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5">
		          	<span class="subheading"> إحجز طاولة</span> <br>
		            <h2 class="mb-4">قم بحجزك</h2>
		          </div>
	            <form action="#">
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group text-right">
	                    <label for="">الإيميل</label>
	                    <input type="text" class="form-control text-right" placeholder="إيميلك">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group text-right">
	                    <label for="">الإسم</label>
	                    <input type="text" class="form-control text-right" placeholder="إسمك">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group text-right">
	                    <label for="">رقم الهاتف </label>
	                    <input type="text" class="form-control text-right" placeholder="رقمك">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group text-right">
	                    <label for="">التاريخ </label>
	                    <input type="text" class="form-control text-right" id="book_date" placeholder="التاريخ">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group text-right">
	                    <label for="">الوقت</label>
	                    <input type="text" class="form-control text-right" id="book_time" placeholder="الوقت">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group text-right ">
	                    <label for="">عدد الاشخاص</label>
	                    <div class="select-wrap one-third">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control text-right">
	                        <option value="">عدد الاشخاص</option>
	                        <option value="">1</option>
	                        <option value="">2</option>
	                        <option value="">3</option>
	                        <option value="">4+</option>
	                      </select>
	                    </div>
	                  </div>
	                </div>
	                <div class="col-md-12 mt-3">
	                  <div class="form-group text-right">
	                    <input type="submit" value="قم بحجزك " class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
	              </div>
	            </form>
	          </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
						<div id="map"></div>
					</div>
        </div>
			</div>
		</section>

    
@endsection        

