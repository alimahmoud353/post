<?php 
$cont = include "cont.php";
if(isset($_POST['sub'])){include "cont.php"; $desc = $_POST['desc']; $myfile = $_FILES['file']; $file=$myfile['name'];
$stmt=$db->prepare("INSERT INTO post(describtion, img, date) VALUES('$desc','$file', now())");
$sql = "SELECT * FROM `post` ORDER BY `id` DESC"; if($result = $db->query($sql)){if($result->rowCount() > 0){if($row = $result->fetch()){$id = $row['id']+1;}}}
copy($myfile['tmp_name'],"img/". $id .$file);if($stmt->execute()){echo 'done';}else{echo 'noo';}} 
include $temp . "/" . "head.php"; 
include $temp . "/" . "nav.php";
$webhost = "OVfbYXwzr7gcTHEFonnd";
?>

<!--Input Text, File-->
 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post"enctype="multipart/form-data">
<div class="mb-3">
  
  <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" placeholder="ماذا تريد نشره"></textarea>
</div>
<div class="mb-3">
  <input name="file" class="form-control" type="file" id="formFile">
  <label>choose a file</label>
</div>
<div class="col-12">
	<button name="sub" type="submit" class="btn btn-primary">Submit</button>
</div>
</form>


<!-------Input File
<button type="button" onclick="call()"> Click me to display Date and Time.</button>
<p id="demo"></p>
<label class="label">
  <input type="file" required/>
  <span><i class="fas fa-photo-video"></i></span>
</label>
----------->

<!--POST-->
<?php include'cont.php';$sql = "SELECT * FROM `post` ORDER BY `id` DESC";
if($result = $db->query($sql)){if($result->rowCount() > 0){while($row = $result->fetch()){?>

<div class="card mb-4 center" style="width: 40rem;">
	<div class="t_user">
	   <div><img class="u-photo rounded-circle" src="https://icons.iconarchive.com/icons/chanut/role-playing/64/King-icon.png" alt="..."></div>
	   <div class="user-name_date"><p>this is root</p><p><?php echo $row['date']; ?></p></div>
	</div>
	<div><img style="height: 40rem;" src="img/<?php echo $row['id'].$row['img']; ?>" class="card-img-top" alt="..."></div>
	<div class="card-body">
		<p class="card-text"><?php echo $row['describtion']; ?></p>
		
		<span class="lordis"><i class="fas fa-thumbs-up"></i></span>
		<span class="comment">comment</span>
		<span class="share"><a href="#">share</a></span>
	</div>
	<div class="container mt-3">
	  <div class="media border p-3">
		<img class="u-photo rounded-circle" src="https://icons.iconarchive.com/icons/chanut/role-playing/64/King-icon.png" alt="...">
		<div class="media-body">
		  <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>      
		</div>
	  </div>
	</div>
</div>
	



<?php }}} include $temp . "/" . "footer.php"; ?>
