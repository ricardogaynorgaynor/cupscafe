@extends('admin.adminlayout')
@section('content')
<section class="ftco-section ftco-services">
	<div class="container bg-brown m-5 mx-auto">
        <div class="col-md-8">
            <div class="row">
                <div class="col-12 col-md-4 col p-5 ftco-animate">                  
                </div>
                <div class="tab-pane" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($menus as $menu)
                            <div class="col-md-5">
                                <div class="menu-entry">
                                     <a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                                        <div class="text text-center pt-4">
                                            <h3><a href="product-single.html">{{$menu->type}}</a></h3>
                                            <p>Quantity: 5</p>
                                            <p class="price"><span>$5.90</span></p>
                                        </div>
                                <div class="row">
                                 <div class="col-6"><input class="btn btn-success text-white btn-block" role="button" onclick="window.location.href=" name="" type="submit" value="Update"></div>
                                 <div class="col-6"><input class="btn btn-danger text-white btn-block" role="button"  onclick="window.location.href="name="" type="submit" value="Delete"></div>
                            </div> 
                                </div>
                            </div>  
                            <div class="col-md-5">
                                <div class="menu-entry">
                                     <a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                                        <div class="text text-center pt-4">
                                            <h3><a href="product-single.html">Coffee Capuccino</a></h3>
                                            <p>A small river named Duden flows by their place and supplies</p>
                                            <p class="price"><span>$5.90</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                         
                    </div>  
                </div>     
         </div>
        </div>
    </div>             
    </div>                     
</section>

@endsection