<?php
if (isset($_COOKIE["usr"])) {
		require ('member.php');
	}
	else {
		require ('login_index.php');
	};

?>