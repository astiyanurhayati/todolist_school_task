

@include('layouts.bisa')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 100px">
        <div class="card mt-5">
            <div class="card-header">
         Edit Foto
            </div>
            <div class="card-body">
             <form action="{{route('store.profile')}}" method="POST" enctype="multipart/form-data">
                @csrf
              
                <div class="mb-3">
                    <label for="image" class="form-label">Edit profile</label>
                    <input class="form-control" type="file"  name="image_profile" id="image">
                    <img id="showImage" src="{{asset('assets/img/foto.png')}}" width="100px" style="margin-top: 20px" alt="">
                  </div>
                <button class="btn btn-success" type="submit" >Submit</button>
             </form>
          </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  <script>
    $(document).ready(function(){
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });
    });
  </script>
</html>