<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form  name="register" action="member_form_add_db.php" method="POST" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-3" align="center">
      <br>
      <h4> Add Member </h4>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Username </div>
    <div class="col-sm-3" align="left">
      <input  name="m_user" type="text" required class="form-control" id="m_user" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> Password </div>
    <div class="col-sm-3" align="left">
      <input  name="m_pass" type="password" required class="form-control" id="m_pass" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Fullname  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_name" type="text" required class="form-control" id="m_name" placeholder="fullname" />
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> Email </div>
    <div class="col-sm-4" align="left">
      <input  name="m_email" type="email" class="form-control" id="m_email"   placeholder="name@hotmail.com"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Tell  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_tel" type="text" class="form-control" id="m_tel"  placeholder="only number" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> address </div>
    <div class="col-sm-4" align="left">
      <textarea name="m_address" class="form-control" id="m_address" required></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-danger" id="btn"><span class="glyphicon glyphicon-saved"></span> Save  </button>
    </div>
    
  </div>
</form>