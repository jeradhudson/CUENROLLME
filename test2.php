<?php
	$link = mysqli_connect("localhost", "cs12", "CUaDGKK8", "cs12");

	if ( !$link)
	{
		die("connection fialed".mysqli_connect_error());
	}
	else{
		printf("Host information: %s \n", mysqli_get_host_info($link));

	}

	$query = "select * from Student";
	$result = mysqli_query($link, $query);

	while($new_row = mysqli_fetch_row($result))
	{
		//print_r($new_row);
		foreach($new_row as $key => $value )
		{
			echo $value." ";
		}
		echo PHP_EOL;
	}
	mysqli_free_result($result);

	mysqli_close($link);
?>
