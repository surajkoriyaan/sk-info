<?php
session_start();
if (isset($_POST['submit'])) {
  include('db.php');
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
  $run=mysqli_query($con,$sql);
  $check=mysqli_num_rows($run);
  if ($check > 0) {
    while ($data=mysqli_fetch_assoc($run)) {
      $_SESSION['name']=$data['name'];
      $_SESSION['email']=$data['email'];
      $_SESSION['mobile']=$data['mobile'];
      $_SESSION['password']=$data['password'];
      $_SESSION['hobbies']=$data['hobbies'];
      $_SESSION['gender']=$data['gender'];
      $_SESSION['img']=$data['img'];
      ?>
      <script>
        alert('login Successfully.');
        window.location='dashboard.php';
      </script>
      <?php
    }
  }else {
    ?>
    <script>
      alert('Plese enter correct email or password.');
      window.location='index.html';
    </script>
    <?php
  }
}

?>
