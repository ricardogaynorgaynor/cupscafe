@extends('admin.adminlayout')

@section('content')
<section class="ftco-section contact-section">
    <div class="container">
		<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-8 col-sm-12 col p-3 text-center ftco-animate">
                    <h1>Add New Item</h1>           
            </div>  
        </div> 
    </div> 

    <div class="container bg-gray align-items-center">

        <div class="row">
			<div class="col-lg-1"></div>
                <div class="col-lg-6">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        @if(Session::has('error'))
                            <div class="alert alert-error">
                                <p>{{ Session::get('error') }}</p>
                            </div>
                        @endif

                    <form action="{{route('admin.create.item')}}" class="item-form" method="POST" enctype="multipart/form-data" >

                        {{csrf_field()}}

                        <div class="row">

                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="emp_name" placeholder="Employer Name" required>
                            </div>

                            <div class="col-lg-6 form-group">                            
                                <input type="text" class="form-control" name="name" placeholder="Item Name" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="quantity" placeholder="Stock Quantity" required>
                            </div>

                            <div class="col-lg-6 form-group">
                                <input type="number" class="form-control" name="cost" placeholder="Cost" required>
                            </div>

                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="digital_id" placeholder="Item Digital ID" required>
                            </div>

                            <div class="col-lg-6 form-group">
                                    <select name="category" required class="col-lg-6 form-control" data-style="btn-light" data-width="100%" name="category" title="Select Category">
                                        <option>Category</option>
                                        <option value="beverage">Beverage</option>
                                        <option value="snack">Snack</option>
                                        <option value="daily-surprise">Daily Surprise</option>
                                    </select>
                            </div>
                        </div>
                            <div class="col-lg-6 form-group">
                                <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="digital_photo" id="inputGroupFile01">
                                            <label class="form-control custom-file-label text-black" for="inputGroupFile01">Choose Image</label>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_img2" id="inputGroupFile02">
                                        <label class="form-control custom-file-label text-black" for="inputGroupFile02">ASL Image</label>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="custom-file ">
                                        <input type="file" class="custom-file-input" name="disability_audio" id="inputGroupFile03">
                                        <label class="form-control custom-file-label text-black" for="inputGroupFile03">Upload Audio</label>
                                </div>
                            </div>   
                        <div class="form-group d-flex justify-content-center" style="padding: 20px;">                      
                            <input type="Submit" value="Submit" class="btn btn-primary py-3 px-5">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
