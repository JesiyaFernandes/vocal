<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

.fa ,.fas{
	font-size:20px;
}
li{
	margin:10px;
	border-bottom:1px solid red;
}
li a i{
	margin:10px;
}
</style>
</head>
<body>
<?php

include 'header.html';
?>
      

      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Contact Local Services
              <br class="hidden lg:inline-block">As per your need
            </h1>
            <p class="mb-8 leading-relaxed">This website provides contact details of various local service providers.People who need any kind of service can search for the service provider near their.Also the local service provider can register them selves according to their category of service.</p>
            <div class="flex justify-center">
              <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"><a href="search.php">Search</a></button>
              <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg"><a href="register.php">Register</a></button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="images/services.png">
          </div>
        </div>
      </section>
<?php
include 'db.php';
$sql="select count(*)as count from services where service='mechanic'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_mech=$row['count'];
}

$sql="select count(*)as count from services where service='plumber'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_plumb=$row['count'];
}

$sql="select count(*)as count from services where service='doctor'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_doc=$row['count'];
}

$sql="select count(*)as count from services where service='mechanic'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_mech=$row['count'];
}

$sql="select count(*)as count from services where service='cook'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_cook=$row['count'];
}

$sql="select count(*)as count from services where service='maid'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_maid=$row['count'];
}

$sql="select count(*)as count from services where service='tuition teacher'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_teacher=$row['count'];
}

$sql="select count(*)as count from services where service='electrician'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_elect=$row['count'];
}

$sql="select count(*)as count from services where service='carpenter'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_carp=$row['count'];
}

$sql="select count(*)as count from services where service='photographer'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_photo=$row['count'];
}

$sql="select count(*)as count from services where service='gym instructor'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_gym=$row['count'];
}

$sql="select count(*)as count from services where service='driver'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_driver=$row['count'];
}

$sql="select count(*)as count from services where service='vehicle washing'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count_wash=$row['count'];
}

?>


      <div class="dropdown" style="margin:auto;width:70vw;background-color:indianred;">
  <label tabindex="0" class="btn m-1" style="width:70vw;"><h2 align="center" style="font-weight:bold;font-size:20px;" >Categories</h2></label>
  <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52" style="width:70vw;background-color:lightblue;">
  
  			 <?php
		  $sql="select * from category";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$service=$row['name'];

$s="select count(*)as count from services where service='$service'";
$r=mysqli_query($con,$s);
while($ro=mysqli_fetch_array($r)){
$countc=$ro['count'];
}
?>

<li ><a href="service.php?service=<?php echo $service;?>"><?php echo $service;?> <?php echo "( ".$countc." )";?></a></li>
<?php
}
		  ?>
  

  
   
  </ul>
</div>

      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Here are some data of our website till now</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Our main aim to help both customer and service providers so that they will directly contact each other</p>
          </div>
		  <?php
		  $sql="select count(distinct(service))as count from services";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$count=$row['count'];
}
		  ?>
          <div class="flex flex-wrap -m-4 text-center">
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <img src="images/user.png" class="text-indigo-500 w-12 h-12 mb-3 inline-block"/>
                <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $count;?></h2>
                <p class="leading-relaxed">Services Providers</p>
              </div>
            </div>
			 <?php
		  $sql="select count(*)as count from services";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$counts=$row['count'];
}
		  ?>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                <img src="images/service.png" class="text-indigo-500 w-12 h-12 mb-3 inline-block"/>
                <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $counts;?></h2>
                <p class="leading-relaxed">Services</p>
              </div>
            </div>
			 <?php
		  $sql="select count(*)as count from category";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$counts=$row['count'];
}
		  ?>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <img src="images/category.png" class="text-indigo-500 w-12 h-12 mb-3 inline-block"/>
                <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $counts;?></h2>
                <p class="leading-relaxed">Categories</p>
              </div>
            </div>
			 <?php
		  $sql="select count(distinct(location))as count from services";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
$countl=$row['count'];
}
		  ?>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <img src="images/location.png" class="text-indigo-500 w-12 h-12 mb-3 inline-block"/>
                <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $countl;?></h2>
                <p class="leading-relaxed">Locations</p>
              </div>
            </div>
          </div>
        </div>
      </section>
  

      <?php

include 'footer.html';
?>
      
</body>
</html>