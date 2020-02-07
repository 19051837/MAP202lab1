 <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  
  color: white;
  text-align: center;
	  background-color: #274060;
  overflow: hidden;
}
</style>

<div class="footer">
<?php

	if (isset($_SESSION['failure'])&&$_SESSION['failure']>0)
	{
			echo"<div class='alert info'><span class='closebtn'>&times;</span><strong>Error</strong>  Unsuccessful Login attempt number  ".$_SESSION['failure']."
			</div>";
	}

?>
<p>&copy; Student ID 19051837</p>
</div>  
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
<?php
	
?>