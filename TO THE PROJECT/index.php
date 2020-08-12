<?php
//index.php
?>
<!DOCTYPE html>
<html>
 <head>
  <title>contacts</title>
  
 </head>
 <body>
  <br />
  <div class="container">
   <div class="row">
    <h2 align="center">contacts</h2>
    <br />
    <div class="col-md-9" style="margin:0 auto; float:none;">
     <span id="message"></span>
     <form method="post" id="import_form" enctype="multipart/form-data">
      <div class="form-group">
       <label>Select XML File</label>
       <input type="file" name="file" id="file" />
      </div>
      <br />
      <div class="form-group">
       <input type="submit" name="import" id="import" class="btn btn-info" value="import" />
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>




