<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <style>
@import url("https://fonts.googleapis.com/css?family=Nunito:400,600,700");
body{
  
  font-family: Arial, Helvetica, sans-serif;
}
.absolute {
    top: 45% !important;
}


.modal-container {
  width: 100%;
  border-radius: 10px;
  transition-duration: 0.3s;
  background: #fff;
  max-width: 750px;
  margin: 50px auto; 
  padding: 20px;

}
.modal-title {
  font-size: 20px;
  margin: 0;
  font-weight: 400;
  color: #3e8da8;
  padding: 0;
}

.modal-desc {
  margin: 6px 0 30px 0;
}


.modal-button:hover {
  border-color: rgba(255, 255, 255, 0.2);
  background: rgba(255, 255, 255, 0.8);
}


.sign-up {
  margin: 60px 0 0;
  font-size: 14px;
  text-align: center;
}
.sign-up a {
  color: #3e8da8;
}

.input-button {
  padding: 8px 12px;
  outline: none;
  border: 0;
  color: #fff;
  border-radius: 4px;
  background: #3e8da8;
  font-family: "Nunito", sans-serif;
  transition: 0.3s;
  cursor: pointer;
}
.input-button:hover {
  background: black;
}

.input-label {
  font-size: 11px;
  text-transform: uppercase;
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  letter-spacing: 0.7px;
  color: #3e8da8;
  transition: 0.3s;
}

.input-block {
  display: flex;
  flex-direction: column;
  padding: 10px 10px 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-bottom: 20px;
  transition: 0.3s;
}
.input-block input {
  outline: 0;
  border: 0;
  padding: 4px 0 0;
  font-size: 14px;
  font-family: "Nunito", sans-serif;
}
.input-block input::-moz-placeholder {
  color: #ccc;
  opacity: 1;
}
.input-block input:-ms-input-placeholder {
  color: #ccc;
  opacity: 1;
}
.input-block input::placeholder {
  color: #ccc;
  opacity: 1;
}
.input-block:focus-within {
  border-color:  #3e8da8;
}


.icon-button {
  outline: 0;
  position: absolute;
  right: 10px;
  top: 12px;
  width: 32px;
  height: 32px;
  border: 0;
  background: 0;
  padding: 0;
  cursor: pointer;
}



@media (max-width: 750px) {
  .modal-container {
    width: 90%;
  }

  .modal-right {
    display: none;
  }
}



  </style>
  <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>
<body>
  <div class="absolute">
    <div class="modal-container">
      <div class="modal-left">
        <p class="modal-desc">Create Todolist</p> 
        
        <form action="{{ route('store') }}" method="POST">
          @csrf
      <div class="input-block">
          <label for="title" class="input-label">title</label>
          <input type="text" name="title" id="title" placeholder="title">
        </div>
        <div class="input-block">
          <label for="date" class="input-label">Date</label>
          <input type="date" name="date" id="date">
        </div>
          <label for="desc" class="input-label">Deskripsi</label>
        <textarea name="desc"  id="" cols="97" rows="5" class="input-block"></textarea>


      <div class="flex" style="display: flex; gap:10px;">
        <div class="modal-buttons">
          <button type="submit" class="input-button" style="background:#39a032">Submit</button>
        </div>
        <div class="modal-buttons">
          <a href="{{ url('/todo') }}"> <button type="button" class="input-button">Kembali</button></a>
         
        </div>
      </div>
      </div>
      
    </div>
  </div>
  <div class='ripple-background'>
    <div class='circle xxlarge shade1'></div>
    <div class='circle xlarge shade2'></div>
    <div class='circle large shade3'></div>
    <div class='circle mediun shade4'></div>
    <div class='circle small shade5'></div>
  </div>
  
</body>
</html>