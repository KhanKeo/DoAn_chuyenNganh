<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form  name="register" action="order_form_add_db.php" method="POST" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-3" align="center">
      <br>
      <h4> Add form order </h4>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Username </div>
    <div class="col-sm-3" align="left">
      <input  name="or_user" type="text" required class="form-control" id="or_user" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> Password </div>
    <div class="col-sm-3" align="left">
      <input  name="or_pass" type="password" required class="form-control" id="or_pass" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Fullname  </div>
    <div class="col-sm-4" align="left">
      <input  name="or_name" type="text" required class="form-control" id="or_name" placeholder="fullname" />
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> Email </div>
    <div class="col-sm-4" align="left">
      <input  name="or_email" type="email" class="form-control" id="or_email"   placeholder="name@hotmail.com"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Tell  </div>
    <div class="col-sm-4" align="left">
      <input  name="or_tel" type="text" class="form-control" id="or_tel"  placeholder="only number" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> address </div>
    <div class="col-sm-4" align="left">
      <textarea name="or_address" class="form-control" id="or_address" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Date  </div>
    <div class="col-sm-4" align="left">
      <input  name="date_save" type="date" class="form-control" id="date_save"  placeholder="only number" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> price  </div>
    <div class="col-sm-4" align="left">
      <input  name="or_price" type="text" class="form-control" id="or_price"  placeholder="only number" />
    </div>
  </div>
  <div class="form-group">
  <div class="col-sm-2"></div>
    <div class="col-sm-6">
    
      <button type="submit" class="btn btn-danger" id="btn"><span class="glyphicon glyphicon-saved"></span> Save  </button>
    </div>
    
  </div>
</form>