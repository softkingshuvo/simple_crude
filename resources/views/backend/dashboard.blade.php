@extends('backend.index')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Products Category</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ count($category) }}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Products Brands</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ count($brand) }}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white"> Admins</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ count($admin) }}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                    </div>
                </div>
            </div>




        </div>
    </div>

@endsection
