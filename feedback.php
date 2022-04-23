<?php include "include/header.php"; ?>

<?php 

  // $feedback = [
  //   [
  //     'id' => '1' , 
  //     'name' => 'Majid Al-Raimi' , 
  //     'email' => 'majid@email.com' , 
  //     'body' => 'Good Student' 
  //   ] , 
  //   [
  //     'id' => '2' , 
  //     'name' => 'Waleed Al-Qurashi' , 
  //     'email' => 'waleed@email.com' , 
  //     'body' => 'The Best Student' 
  //   ] , 
  // ]

  $sql = "SELECT * FROM feedback ; " ; 
  $result = mysqli_query($connection, $sql) ; 
  $feedback = mysqli_fetch_all($result , MYSQLI_ASSOC); ; 

    

?>

      

      <?php 
        if(empty($feedback)) {
          echo "<h4>There Is No Data</h4>" ; 
        } else {
          echo "<h2>Feedback</h2>" ; 

          foreach($feedback as $feed){

          }


        }
      ?>


    <?php foreach($feedback as $feed) : ?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <?php echo $feed["body"] ; ?>
          <div class="text-secondary mt-2">
            By <?php echo $feed["name"] ; ?> 
          </div>
      </div>
      </div>
    <?php endforeach; ?>   
      
    
      <?php include "include/footer.php"; ?>
