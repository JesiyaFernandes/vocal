<html>
<head>
<style>
.frm{
	margin:auto;
}
</style>
</head>
<?php
include 'header.html';
?>

<div class="block p-6 rounded-lg shadow-lg bg-white max-w-md frm">
  <form  method="post">
    <div class="form-group mb-6">
      <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
        bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
        placeholder="Name" name="name">
    </div>
    <div class="form-group mb-6">
      <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
        bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out
        m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
        placeholder="Email address" name="email">
    </div>
    <div class="form-group mb-6">
      <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlTextarea13" rows="3" placeholder="Message" name="msg"></textarea>
    </div>
    <div class="form-group form-check text-center mb-6">
      <!-- <input type="checkbox"
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
        id="exampleCheck87" checked> -->
      <!-- <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of this message</label> -->
    </div>
    <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight
      uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150
      ease-in-out" name="submit">Send</button>
  </form>
</div>
<div>
</br></br></br></br>
</br></br>
</br></br>

</div>
<?php
include 'footer.html';
include 'db.php';

if(isset($_POST['submit'])){
  $username=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['msg'];
  $sql="INSERT INTO `message` (`name`, `email`, `msg`) VALUES ('$username ', '$email', '$message')";
      if(mysqli_query($con,$sql)){
        echo "<script>alert ('Your message is successfully sent!!');</script>";
      }
      else{
        echo "<script>alert ('error sending message!!');</script>";

      }
    }
?>