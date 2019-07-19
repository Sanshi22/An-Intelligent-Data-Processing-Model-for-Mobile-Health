<?php
session_start();
echo 'Hi, ' . $_SESSION["user"] ;
?>

<html>
<head>
	<title>Yo</title>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php echo
	"<script>
	var d1=".$_POST['in'].";
	var d2=".$_POST['in2'].";
	var d3=".$_POST['in3'].";
	var d4=".$_POST['in4'].";
	var d5=".$_POST['in5'].";
	var d6=".$_POST['in6'].";
	var d7=".$_POST['in7'].";
	var d8=".$_POST['in8'].";
	var d9=".$_POST['in9'].";
	var d10=".$_POST['in10'].";
	var d11=".$_POST['in11'].";
	var d12=".$_POST['in12'].";

	var d=[d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11,d12];

    var gh;
	$.ajax({
			url: \"http://127.0.0.1:5000/output\", 
			type: \"POST\",
			data:{'inputVar': d},
			success: function( data ) { 
				console.log(data);
				data = JSON.parse(data);
				console.log(data['disease']);
				console.log(data['percentage'])
				$(\"#pan1\").append(data['disease']);
				$(\"#pan2\").append(data['percentage']);

				ok = getDataFromDB(data['disease']);
				console.log(ok);
                },
			 error: function(xhr, status, error) {
				alert(status);
				alert(xhr.responseText);
			}
		});

	    function getDataFromDB(disease){
		$.ajax({
			url:  \"calldb.php\",
			dataType:\"json\",
			type: \"GET\",
			data: {'disease': disease},
			success: function( data ) {
				var tr ='';
				 var count = 0;
				 for(var key in data)
   				 if(data.hasOwnProperty(key))
        			count++;
				 console.log(count);
				 for(i=0;i<count;i++)
				 	{
				 		console.log(data[i].name);
				 		tr += '<input type=\"checkbox\" name=\"doctorname\" value='+data[i].name+'>'+data[i].name + '<br>' ;
       				}
       			$('#ps').append(tr);
       			 
			},
			error: function(xhr, status, error) {
				alert(status);
				alert(xhr.responseText);
			}
		});
	}

	</script>
";
// echo  $_SESSION['sid'];
?>

<section id="banner" class="banner">

<div class="bg-color">
<br>
<br>
<br>
<div class="container">
  <div class="panel panel-default" div class="banner-text text-center" >
    <div class="panel-heading" ><centre>Disease Predicted</centre> </div>
    <div class="panel-body" id="pan1"> </div>
  </div>

  <div class="panel panel-default" div class="banner-text text-center" >
    <div class="panel-heading"><centre>Diagnosed Percentage  </centre> </div>
    <div class="panel-body" id="pan2"> </div>
  </div>
</div>

<div class="container">

  <div class="panel panel-default" div class="banner-text text-center" >
    <div class="panel-heading"><centre>RECOMMENDED DOCTORS</centre> </div>
    <div class="panel-body">
    	<form action="check.php" >
	 		<div  id = "ps" >
			</div>
		<input type="submit">
		</form>

    </div>
  </div>
</div>
</div>
</section>




</body>
</html>