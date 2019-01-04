@extends('admin.layouts.app')

@section('content')
<div class="col-md-4 offset-md-4">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Register Admin</h4>
            <hr>
            <form method="POST" action="{{route('admin.register.submit')}}">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Fullname</label>
                            <input type="text" name="fullname" class="form-control">
                            @if ($errors->has('fullname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fullname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Email Address</label>
                            <input type="text" name="email" class="form-control">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Confirm Password</label>
                            <input type="text" name="password_confirmation" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Super Admin</label>
                            <input type="checkbox" name="super" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-dark float-right" value="Submit" />
                        </div>
                    </div>
                </div>          
            </form> 
        </div>
    </div>
</div>
@endsection