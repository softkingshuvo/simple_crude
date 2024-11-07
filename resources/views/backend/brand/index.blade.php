@extends('backend.index')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@lang('All Brands')</h4>
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#basicModal">@lang('Add Brand')</button>
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">@lang('Add New')</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="brandForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="Brand Name" class="form-control"
                                                       name="name" required>
                                            </div>

                                            <div class="form-group">
                                                <input type="file" placeholder="Brand Image" class="form-control"
                                                       name="image" required>
                                            </div>

                                            <center>
                                                <button type="submit" class="btn btn-primary">@lang('Save')</button>
                                            </center>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <br><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>@lang('SL')</th>
                                    <th>@lang('Brand')</th>
                                    <th>@lang('Status')</th>
                                    <th>@lang('Action')</th>
                                </tr>
                                </thead>
                                <tbody id="showBrands">


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>


    $(document).ready(function () {

        $('#brandForm').on('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '{{ route('brand.store') }}',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#brandForm')[0].reset();
                    $('#basicModal').modal('hide');
                    getBrands();

                },
                error: function () {


                }
            });
        });

        function getBrands() {

            $.ajax({
                type: 'GET',
                url: '{{ route('brand.datatable') }}',
                success: function (response) {

                    $("#showBrands").html(response);
                },
                error: function () {
                    alert("errors")
                }
            });
        }

        getBrands();

    });


</script>
