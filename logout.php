<?php
session_start();
if (isset($_SESSION['email'])) {
  session_unset();
  session_destroy();
  ?>
  <script>
    alert('logout Successfully.');
    window.location='index.html';
  </script>
  <?php
}
?>
