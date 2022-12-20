

@include('layouts.bisa')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 100px">
        <div class="card mt-5">
            <div class="card-header">
            My Profile
            </div>
            <div class="card-body">
                <table class="table">
                  
                    <tbody>

                        <tr>
                          <th scope="row">Foto</th>
                          <td>
                              @if(is_null($user['image_profile']))
                              <img src="{{asset('upload/user_images/no_image.png')}}" style="width: 100px" alt="">
                              @else
                              <img src="{{URL::asset("upload/user_images/".$user['image_profile'])}}" alt="">
                            @endif
                            </td>
                            


                            {{-- <th>Foto</th> --}}
                            {{-- <td><img src="{{(!empty($user->image_profile))? url('upload/user_images/'.$user->image_profile):url('upload/user_images/no_image.png')}}" alt=""></td> --}}
                          </tr>  
                          <tr>
                      
                        
                        <tr>
                      
                            <th scope="row">Nama</th>
                            <td>{{$user->name}}</td>
                          </tr>  
                          <tr>
                      
                            <th scope="row">Username</th>
                            <td>{{$user->username}}</td>
                          </tr> 
                          <tr>
                      
                            <th scope="row">Email</th>
                            <td>{{$user->email}}</td>
                          </tr>   
                       
                      
                    
                    </tbody>
                  </table>
            </div>
          </div>
          <a href="{{route('profile.edit')}}"><button class="btn mt-5 btn-primary">Edit Foto</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>