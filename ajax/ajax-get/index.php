<!DOCTYPE HTML>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("button").click(function(){
			$.get("test.txt", function(data, status){
				$("#test").html(data);
				alert(status)
			})
		})
		
		$("input").keyup(function(){
			var name = $(this).val()
			console.log(name)
			$.post("suggestions.php", {
				suggestion:name
			}, function(data, status){
				console.log(status)
				$("#test").html(data)
			});
		})
		
	})
</script>
</head>

<body>
<button>Click me to get data</button>
<input type="text" name="name">
<p id="test"></p>
</body>
</html>
