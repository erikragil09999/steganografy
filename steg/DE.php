<html>
<head>
    
<title>DE</title>
</head>
<body>

<br>
<form name="frmImage" action="" method="post" enctype="multipart/form-data">
<input type="file" name="myImage" /> 
<input type="submit" name="submit" value="Submit" />

<br> 
<span >
    <?php
		if(isset($_POST["submit"])) 
		{

			if(is_array($_FILES)) {
			$image_properties = getimagesize($_FILES['myImage']['tmp_name']);
			print "<PRE>";
			print_r($image_properties);
			print "</PRE>";

					$l = $image_properties['0']+$image_properties['1']/2;
					$h = $image_properties['0']-$image_properties['1'];
					$Haksen = 2 * $h + $image_properties['bits'] ;
					$Xaksen = $l + ($Haksen+1/2);
					$Yaksen = $l - ($Haksen/2);
					
					
						if ($Haksen < 2*(255-$l) || $Haksen < 2*$l+1 ) {
							print"<PRE>";
							echo "hasil x aksen: ";
							print_r($Xaksen);

							print"<PRE>";
							echo "hasil y aksen: ";
							print_r($Yaksen);
							print"<PRE>";
						
					}
					
			if (isset($_FILES['myImage'])) {
			    $aExtraInfo = getimagesize($_FILES['myImage']['tmp_name']);
			    $sImage = "data:" . $aExtraInfo["mime"] . "; base64," . base64_encode(file_get_contents($_FILES['myImage']['tmp_name']));
			    echo '<p>Preview :</p><img src="'. $sImage .'" alt="your image" ';
					}
				}
			}
		?>
		<table class="table responsive">
			<th>
				<td></td>
			</th>

		</table>
</span>
</form>
	
</body>
</html>