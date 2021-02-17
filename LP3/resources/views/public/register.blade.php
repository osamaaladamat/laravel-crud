@extends('layouts.master')

@section('title')
Register
@endsection


@section('main')
@if(isset($result))

<div class="alert alert-success">
    {{$result}}
</div>

@endif
<link rel="stylesheet" href="{{URL::asset('css/form.css')}}">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <h3>Orange Coding Academy</h3>
            <img src="https://yt3.ggpht.com/ytc/AAUvwnjBlva7boycRNYO22kotgqymVIJqxjrFlC8nfwEwg=s900-c-k-c0x00ffffff-no-rj"
                alt="" />

            <input type="submit" name="" value="Login" /><br />
        </div>
        <div class="col-md-9 register-right">
            <form method="post" action="/users" enctype="multipart/form-data">
                @csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register a new account</h3>
                        <div class="row register-form">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    @error('NID')
                                    <div style="color: red; font-weight:500">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" minlength="10" placeholder="National ID *"
                                        name="NID" value="" />
                                </div>
                                <div class="form-group">
                                    @error('full_name')
                                    <div style="color: red; font-weight:500">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" placeholder="Full Name *" name="full_name"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    @error('email')
                                    <div style="color: red; font-weight:500">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" placeholder="Email *" name="email"
                                        value="" />
                                </div>
                                @error('mobile')
                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" name="mobile" class="form-control" placeholder="Phone Number *"
                                        value="" />
                                </div>
                                @error('address')
                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address *"
                                        value="" />
                                </div>
                                @error('password')
                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" name="password"
                                        value="" />
                                </div>
                                @error('password_confirmation')
                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        name="password_confirmation" value="" />
                                </div>
                                @error('image')
                                <div style="color: red; font-weight:500">{{ $message }}
                                </div>
                                @enderror
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder="" name="image" value="" />
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col text-center">
                                            <input type="submit" class="btnRegister" value="Register" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
</script>

@endsection
