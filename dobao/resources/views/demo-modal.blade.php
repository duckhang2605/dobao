<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The modal_op (background) */
.modal_op {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1050; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #1a1b1d8a; /* Black w/ opacity */
}

/* modal_op Content */
.modal_op-content {
  background-color: #1a1b1d;
  margin: auto;
  padding: 20px;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal_op h1 {
    color: #efb479;
    width: 100%;
    text-align: center;
}

.modal_op h3 {
    color: white;
    text-align: center;
    width: 100%;
}
.down-modal-area {
    text-align: center;
    width: 100%;
}
</style>
</head>
<body>
<div id="mymodal_op" class="modal_op">

  <!-- modal_op content -->
  <div class="modal_op-content" style="color:white;">
  <span class="close"><img src="{{asset('img/menu/x.svg')}}" alt=""></span>
    <h1>
     Tải ứng dụng của Nhạc sĩ Đỗ Bảo 
    </h1>
    <h3>Để có trải nghiệm tốt nhất trên mobile</h3>
    <div class="down-modal-area">
    @include('layouts.partials.download')
  </div>
  </div>

</div>

<script>
// Get the modal_op
var modal_op = document.getElementById("mymodal_op");

// Get the button that opens the modal_op
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal_op
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal_op 
if(screen.width<=768) {
  modal_op.style.display = "block";
}
else
{
  modal_op.style.display = "none";
}

// When the user clicks on <span> (x), close the modal_op
span.onclick = function() {
  modal_op.style.display = "none";
}

// When the user clicks anywhere outside of the modal_op, close it
window.onclick = function(event) {
  if (event.target == modal_op) {
    modal_op.style.display = "none";
  }
}
</script>

</body>
</html>
