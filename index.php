<?php
	echo "<p>Working on Git</p>";
	echo "<p>Write your NIM and your name down here separated by comma:</p>"; 
	$users = array(
									/*
									 * Tulis NIN dan NAMA, 
									*/
									"10111121" => "Nadiar AS"
							 ); ?>
	<ul> <?php
	
	foreach($users as $nim => $nama) { ?>
		<li><?php echo $nim . ": " . $nama; ?></li>
	
	<?php
	} // End Foreach?>
	</ul>

	