@extends('backend.index')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@lang('All Categories')</h4>
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">@lang('Add Category')</button>
                      <form method="get" action="">
                          <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search here...">
                      </form>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>@lang('SL')</th>
                                    <th>@lang('Category')</th>
                                    <th>@lang('Status')</th>
                                    <th>@lang('Added By')</th>
                                    <th>@lang('Action')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($categories as $key=>$item)
                                    <tr>
                                        <td>
                                            @serial
                                        </td>
                                        <td>{{ __($item->name) }}</td>
                                        <td>
                                            @if($item->status == 1)
                                                <span class="btn btn-success btn-sm text-white">@lang('Active')</span>
                                            @else
                                                <span class="btn btn-danger btn-sm text-white">@lang('Inactive')</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ __($item->admin->name) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('category.edit',$item->id) }}" class="btn btn-info btn-sm">@lang('Edit')</a>
                                            <form method="post" action="{{ route('category.destroy',$item->id) }}">
                                                @csrf


                                                <button type="submit" class="btn btn-danger btn-sm">@lang('Delete')</button>

                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                @endforelse


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="basicModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Add New')</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('category.store') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Category Name" class="form-control" name="name" required>
                        </div>
                      <center>  <button type="submit" class="btn btn-primary">@lang('Save')</button></center>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
