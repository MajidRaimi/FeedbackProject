<?php  include "include/header.php" ?>

<?php

  $name = $email = $body = "" ; 
  $nameErr = $emailErr = $bodyErr = "" ; 


  if(isset($_POST["submit"])){

    if(empty($_POST["name"])){
      $nameErr = "Name Is Required" ; 
    } else {
      $name = filter_input(INPUT_POST , "name" , FILTER_SANITIZE_FULL_SPECIAL_CHARS ) ; 
    }
    if(empty($_POST["email"])){
      $emailErr = "Email Is Required" ; 
    } else {
      $email = filter_input(INPUT_POST , "email" , FILTER_SANITIZE_EMAIL ) ; 
    }
    if(empty($_POST["body"])){
      $bodyErr = "Body Is Required" ; 
    } else {
      $body = filter_input(INPUT_POST , "body" , FILTER_SANITIZE_FULL_SPECIAL_CHARS ) ; 
    }

    if(empty($nameErr) &&  empty($emailErr) && empty($bodyErr)){

      $sql = "INSERT INTO feedback (name , email , body) VALUES( '$name' , '$email' , '$body' ) ; " ; 
        if(mysqli_query($connection, $sql)){
          header("Location:feedback.php") ; 
        } else {
          echo "Error" ; 
        }
    }

   

  }

?>

      <img src="img/coderBoy.svg" class="w-50 mb-3" alt="">
      <h2>Feedback</h2>
      <p class="lead text-center">Leave feedback for Majid </p>
      <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-4 w-75" method = "POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control <?php echo ($nameErr == "") ? null : 'is-invalid' ?>" id="name" name="name" placeholder="Enter your name">
        </div>

          
        

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control <?php echo ($emailErr == "") ? null : 'is-invalid' ?>" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Feedback</label>
          <textarea class="form-control <?php echo ($bodyErr == "") ? null : 'is-invalid' ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        </div>
        <div class="mb-3 justify-content-center">
          <input type="submit" name="submit" value="Send" class="btn btn-dark w-100 btn-primary">
        </div>
      </form>
    </div>
  
    <?php  include "include/footer.php" ?>