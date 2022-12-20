@extends('layouts.index')
@section('content')

<style>
   .foto{
       float: right;
    }
</style>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4 mb-5 pb-5">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Register</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-3 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" action="{{ route('register.input') }}" method="post">
            @csrf

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            
            <div class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="email">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="nama_lengkap" name="nama" class="form-control form-control-lg" />
              <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="username" name="username" class="form-control form-control-lg" />
              <label class="form-label" for="username">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" name="password" class="form-control form-control-lg" />
              <label class="form-label" for="password">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Register</button>
            </div>


            <p>Don't have an account? <a href="/login" class="link-info">Login here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="{{ asset('assets/img/register.jpg') }}" alt="Login image" class=" vh-100 foto   ">
      </div>
    </div>
  </div>
</section>

@endsection