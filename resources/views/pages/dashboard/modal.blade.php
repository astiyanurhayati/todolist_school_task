
<style>
    h1{
        background: rgb(255, 244, 244);
        padding: 20px 10px;
        text-align: center;
        border-radius: 10px;
        margin: 100px 200px;
    }
   .masuk{
   
   }


</style>
@include('layouts.bisa')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
<h1>Selamat Datang {{ Auth::user()->username }}</h1>


  <div class="modal px-10">

    <div class="modal-container">
      <div class="masuk">
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
        <textarea name="desc"  id="" cols="95" rows="5" class="input-block"></textarea>


        <div class="modal-buttons">
          <button type="submit" class="input-button">Submit</button>
        </div>
      </div>
      
      <button class="icon-button close-button">
        <i class="fa-solid fa-xmark" style="font-size: 20px"></i>
        </button>
      </div>
      </form>
  </div>
    <button class="modal-button">Click here to make Todolist</button>
  </div>


<script>
const body = document.querySelector("body");
const modal = document.querySelector(".modal");
const modalButton = document.querySelector(".modal-button");
const closeButton = document.querySelector(".close-button");
const scrollDown = document.querySelector(".scroll-down");
let isOpened = false;

const openModal = () => {
  modal.classList.add("is-open");
  body.style.overflow = "hidden";
};

const closeModal = () => {
  modal.classList.remove("is-open");
  body.style.overflow = "initial";
};

window.addEventListener("scroll", () => {
  if (window.scrollY > window.innerHeight / 3 && !isOpened) {
    isOpened = true;
    scrollDown.style.display = "none";
    openModal();
  }
});

modalButton.addEventListener("click", openModal);
closeButton.addEventListener("click", closeModal);

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeModal() : false;
};
</script>