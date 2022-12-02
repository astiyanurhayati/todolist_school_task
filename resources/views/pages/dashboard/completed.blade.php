
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <title>Todo App</title>
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

</head>
<body>
@include('layouts.bisa')
{{-- <div class="absolute"> --}}
    <div class="wrapper bg-white" style="margin-top:100px">
        @if(Session::get('notAllowed'))
        <div class="alert alert-danger">
            {{session('notAllowed')}}
        </div>
        @endif
        @if(Session::get('succesadd'))
        <div class="alert alert-success">
            {{session('succesadd')}}
        </div>
        @endif
        @if(Session::get('successupdate'))
        <div class="alert alert-success">
            {{session('successupdate')}}
        </div>
        @endif
        @if(Session::get('done'))
        <div class="alert alert-success">
            {{session('done')}}
        </div>
        @endif

        @if(Session::get('deleted'))
        <div class="alert alert-success">
            {{session('deleted')}}
        </div>
        @endif
        <div class="d-flex align-items-start justify-content-between mt-5">
            <div class="d-flex flex-column">
                <div class="h5">My Todo's</div>
                <p class="text-muted text-justify">
                    Here's a list of activities you have to do
                </p>
                <br>
                <span>
                    <a href="{{ url('todo/create') }}" class="text-success">Create</a>  <a href="">Complated</a>
                </span>
            </div>
            <div class="info btn ml-md-4 ml-0">
                <span class="fas fa-info" title="Info"></span>
            </div>
        </div>
        <div class="work border-bottom pt-3">
            <div class="d-flex align-items-center py-2 mt-1">
                <div>
                    <span class="text-muted fas fa-comment btn"></span>
                </div>
                <div class="text-muted"> todos</div>
               
                <button class="ml-auto btn bg-white text-muted fas fa-angle-down" type="button" data-toggle="collapse"
                    data-target="#comments" aria-expanded="false" aria-controls="comments"></button>
            </div>
        </div>
        <div id="comments" class="mt-1">
         {{-- @foreach ($data as $item ) --}}
            <div class="comment d-flex align-items-start justify-content-between border-bottom" style="border-radius: none;">
                <div class="mr-2">
                    {{-- <label class="option">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label> --}}

                    <form action="" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="fas fa-circle-check text-primary btn"> </button>

                    </form>
                </div>
                <div class="d-flex flex-column">

                    <a href="" class="text-justify">
              title
                    </a>

                    <p class="mb-0">Deskripsi</p>


                    <p class="text-muted"> <span class="date"></span></p>
                </div>
                
                <div class="ml-md-4 ml-0">
                    <form action="" method="POST" >
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="fa-solid fa-trash-can menghover" style="color: red; border:none;"></button>

                </form>
                  
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
{{-- </div> --}}
    <div class='ripple-background'>
        <div class='circle xxlarge shade1'></div>
        <div class='circle xlarge shade2'></div>
        <div class='circle large shade3'></div>
        <div class='circle mediun shade4'></div>
        <div class='circle small shade5'></div>
      </div>
      

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>