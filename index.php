<?php 
include "cont.php";
include $temp . "/" . "head.php"; 
include $temp . "/" . "nav.php";
?>


<form>
  <div class="mb-3">
    <label for="exampleInputFname" class="form-label">الاسم الاول</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     
  </div>
  <div class="mb-3">
    <label for="exampleInputLname" class="form-label">الاسم الثاني</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     
  </div>  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">عنوان البريد الالكترونى</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">انشاء حساب جديد</button>
</form>



<?php 
	include $temp . "/" . "footer.php";
?>