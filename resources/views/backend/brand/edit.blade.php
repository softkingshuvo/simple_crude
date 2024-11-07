@extends('backend.index')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@lang('Edit Brand')</h4><br>

                        <form action="{{ route('brand.update',$brand) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" placeholder="Brand Name" class="form-control" name="name" required value="{{ __($brand->name) }}">
                            </div>

                            <div class="form-group">
                                <input type="file" placeholder="Brand Image" class="form-control" name="image">
                                <img src="{{ asset($brand->image) }}" style="max-height: 100px;" alt="">
                            </div>

                            <center>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </center>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

