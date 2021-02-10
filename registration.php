<html>
<head>
  <title>Add Person</title>
  <link rel="stylesheet" href="styles.css">
  </head>
  <body>
      <br>

  <h1 align="center">Add Person</h1><br>

<div class="containerlargerforms">
  <br>
  <br>

  <form class="" id="registerform" action="register.php" method="post" enctype="multipart/form-data">
    <div class="row">
    <div class="col-25">
      <label>FIRST NAME:</label>
    </div>
    <div class="col-75">
    <input type="text" name="fname" value="" required>
  </div>
</div>
<div class="row">
<div class="col-25">
  <label>LAST NAME:</label>
</div>
<div class="col-75">
<input type="text" name="lname" value="" required>
</div>
</div>
  <div class="row">
  <div class="col-25">
    <label>DATE OF BIRTH:</label>
  </div>
    <div class="col-75">
      <input type="date" name="dob" value="" required>
    </div>
  </div>
  <div class="row">
  <div class="col-25">
    <label>IMAGE:</label>
  </div>
    <div class="col-75">
      <input type="file" name="file" accept=".png, .jpg, .jpeg, .gif" required>
    </div>
  </div>
  <div class="row">
  <div class="col-25">
    <label>ADDRESS:</label>
  </div>
  <div class="col-75">
  <input type="text" name="address" value="" required>
</div>
</div>
<div class="row">
<div class="col-25">
  <label>GENDER:</label>
</div>
    <div class="col-75"><input type="radio" name="gender" value="true" checked> Male
                 <input type="radio" name="gender" value="false"> Female
                 <br>
               </div>
             </div>
             <div class="row">
             <div class="col-25">
               <label>EMAIL:</label>
             </div>
             <div class="col-75">
             <input type="text" name="email" value="" required>
           </div>
           </div>
           <div class="row">
           <div class="col-25">
             <label>PHONE:</label>
           </div>
           <div class="col-75">
           <input type="text" name="phone" value="" required>
         </div>
         </div>
             <br>
             <br>
    <div class="row">
        <input type="submit" name="register" value="register">
      </div>
  </form>


  </div>

</body>
</html>
