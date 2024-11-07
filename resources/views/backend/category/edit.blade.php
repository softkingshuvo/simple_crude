@extends('backend.index')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@lang('Edit Category')</h4>

                        <form method="post" action="{{ route('category.update',$category->id) }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" placeholder="Category Name" class="form-control" name="name" value="{{ __($category->name) }}" required>
                            </div>
                            <center>  <button type="submit" class="btn btn-primary">@lang('Save')</button></center>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
