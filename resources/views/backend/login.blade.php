
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login</title>

    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">

<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center"> <h4>@lang('Admin Login')</h4></a>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('admin.login') }}"  method="post" action="" class="mt-5 mb-5 login-input">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn login-form__btn submit w-100">@lang('Sign In')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--**********************************
    Scripts
***********************************-->
<script src="{{ asset('assets/backend/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/custom.min.js')}}"></script>
<script src="{{ asset('assets/backend/js/settings.js')}}"></script>
<script src="{{ asset('assets/backend/js/gleek.js')}}"></script>
<script src="{{ asset('assets/backend/js/styleSwitcher.js')}}"></script>
</body>
</html>





