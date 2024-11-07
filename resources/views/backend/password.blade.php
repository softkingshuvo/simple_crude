@extends('backend.index')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Password Change</h4><br>

                        <form action="{{ route('admin.password.update') }}" method="post">
                            @csrf


                            <div class="form-group">
                                <input type="password" placeholder="Old Password" class="form-control" name="current_password" required>
                            </div>


                            <div class="form-group">
                                <input type="password" placeholder="New Password" class="form-control" name="new_password" required>
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

