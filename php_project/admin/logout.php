 <?php

  // Inialize session
  session_start();


	unset($_SESSION['email']);
	echo "<script>alert('logout successfully')</script>";
	echo "<script>window.location.href='index.php'</script>";

  ?>
 