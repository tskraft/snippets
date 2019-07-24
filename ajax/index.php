<?php
	include 'dbh.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		var commentCount = 2;
		$("button").click(function(){
			commentCount = commentCount + 2;
			$("#comments").load("load-comments.php",{
				commentNewCount: commentCount
			},);
		})
	})
</script>
</head>

<body>
<div id="comments">
	<?php
		$sql = "select * from comments limit 2";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) >0 ){
			while ($row = mysqli_fetch_assoc($result)){
				echo '<p>';
				echo $row['author'];
				echo '<br>';
				echo $row['message'];
				echo '</p>';
			}
			
		}else{
			echo 'There are no comments.';
		}
	?>
</div>
<button>Show more comments</button>
</body>
</html>
