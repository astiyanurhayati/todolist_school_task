@extends('layouts.index')
@section('title', 'halaman login')
@section('content')
<style>
    .foto{
        float: right;
    }
</style>

<section class="vh-100">
    <div class="container-fluid">
        <div class="row" style="align-items: center">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4 mb-5 pb-5">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">Login</span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-4 ms-xl-4 mt-3 pt-3 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;" method="post" action="{{ route('login.auth') }}">
                        @csrf
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>@foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if(Session::get('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif

                        @if(Session::get('notAllowed'))
                        <div class="alert alert-danger">
                            {{session('notAllowed')}}
                        </div>
                        @endif

                        
                        <div class="form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control form-control-lg"/>
                            <label class="form-label" for="username" > Username </label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password"     class="form-control form-control-lg" />
                            <label class="form-label" for="password" >Password</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                        </div>


                        <p>Don't have an account? <a href="/register" class="link-info">Register here</a></p>

                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('assets/img/register.jpg') }}" alt="Login image" class=" vh-100 foto"
                    style=" widht object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>
@endsection