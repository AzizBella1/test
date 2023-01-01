<?php
  if (isset($_GET['q'])) {
    if ($_GET['q'] == 'signin') {
   
?>  


<div id="realBody" class="cnt">
  <div class="login-form">
    <form action="" method="get">
      <div class="form-group col-md-7">
        <label for="nom"> Nom</label>
        <input type="text" class="form-control" placeholder="Entrer Nom">
      </div><br>
      <div class="form-group col-md-7">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
        
      </div><br>
      <div class="form-group col-md-7">
        <label for="password">Password</label>
        <input type="password" class="form-control" placeholder="Password">
      </div><br>
      <div class="form-group col-md-7">
        <label for="password">confirme Password</label>
        <input type="password" class="form-control" placeholder="Password">
      </div><br>
      <button type="" class="btn btn-primary" name="creer">Creer</button>
    </form>
  </div>
  
</div>
<?php
  
}
}
?>
