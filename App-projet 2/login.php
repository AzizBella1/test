<?php
  if (isset($_GET['q'])) {
    if ($_GET['q'] == 'login') {
    
?>

<div id="realBody" class="cnt">
  <div class="login-form">
    <form>
      <div class="form-group col-md-7">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        
      </div><br>
      <div class="form-group col-md-7">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div><br>
      <button type="submit" class="btn btn-primary">Submit</button>
      <small id="emailHelp" class="form-text text-muted"><a href="index.php?q=signin">Sign In?</a></small>
    </form>
  </div>
  
</div>
<?php
  
    }
  }
?>


