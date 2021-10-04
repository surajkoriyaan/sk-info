<?php
if (isset($_POST['submit'])) {
  include('db.php');
 $name=$_POST['name'];
 $mlength=strlen($_POST['mobile']);
 $email=$_POST['email'];
 $password=$_POST['password'];
 $img=$_FILES['img']['name'];
  $img_tmp=$_FILES['img']['tmp_name'];
 $ph="img/";
 $path=$ph.$img;
 $imageFileType=strtolower(pathinfo($path,PATHINFO_EXTENSION));
$a=0;
$b=0;
$c=0;
$d=0;
if ($mlength==10) {
    $mobile=$_POST['mobile'];
    $a=1;
}else {
  $a=0;
  ?>
  <script>
    alert('Mobile number should be 10 digit');
    window.location='registration.html';
  </script>
  <?php
}

$hb="";
if (empty($_POST['hobby'])) {
  $b=0;
  ?>
  <script>
    alert('please select hobbies.');
    window.location='registration.html';
  </script>
  <?php
}
else {
  $b=1;
  foreach ($_POST['hobby'] as $value) {
    $hb.=$value.",";
  }
}


if (empty($_POST['gender'])) {
$c=0;
  ?>
  <script>
    alert('please select gender.');
    window.location='registration.html';
  </script>
  <?php
}else {
  $c=1;
  $gender=$_POST['gender'];
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
 $d=0;
  ?>
  <script>
    alert('image should be jpg , jpeg and png type');
    window.location='registration.html';
  </script>
  <?php
}else {
  $d=1;
}
if ($a==1 && $b==1 && $c==1 && $d==1) {
  $check=" SELECT * FROM users WHERE email='$email'";
  $ch=mysqli_query($con,$check);
  $num=mysqli_num_rows($ch);
  if ($num>0) {
    ?>
    <script>
      alert('email id already exists insert another email !');
      window.location='registration.html';
    </script>
    <?php
  }else
  {
    $sql="INSERT INTO users(name,email,mobile,password,hobbies,gender,img) VALUES('$name','$email','$mobile','$password','$hb','$gender','$img')";
    $run=mysqli_query($con,$sql);
    if ($run==TRUE) {
    move_uploaded_file($img_tmp, $path);
    ?>
    <script>
      alert('Registration Successfull.');
      window.location='registration.html';
    </script>
    <?php
    }else {
      ?>
      <script>
        alert('please fill the form properly.');
        window.location='registration.html';
      </script>
      <?php
    }
  }
}
}
?>
