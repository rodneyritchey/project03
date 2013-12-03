<?php 
	session_start();

	require_once('db_connect.php');

	$usr=$_COOKIE['usr'];

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr='".$usr."'");
	//$progress = mysqli_query($con,"SELECT progress FROM user WHERE usr = '".$usr."'");

while($row = mysqli_fetch_array($result)) {
	$prog = $row['progress'];
	
	  	if ($prog == 1 && !empty($row['comment01'])) {
	  		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='comment_pic'><img src='" .$row['usr_pic']. "' /></div><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment01']. "&quot;</div></div>";
	  	}
	  	else if ($prog == 2 && !empty($row['comment02'])) {
	  		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='comment_pic'><img src='" .$row['usr_pic']. "' /></div><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment02']. "&quot;</div></div>";
	  	}
	  	else if ($prog == 3 && !empty($row['comment03'])) {
	  		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='comment_pic'><img src='" .$row['usr_pic']. "' /></div><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment03']. "&quot;</div></div>";
	  	}
	  	else if ($prog == 4 && !empty($row['comment04'])) {
	  		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='comment_pic'><img src='" .$row['usr_pic']. "' /></div><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment04']. "&quot;</div></div>";
	  	}
	  	else if ($prog == 5 && !empty($row['comment05'])) {
	  		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='comment_pic'><img src='" .$row['usr_pic']. "' /></div><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment05']. "&quot;</div></div>";
	  	}
	  	else {
	  		echo "
	  		<div class='comment_post' id='comment_post'>
				<form id='com_post' method='post' onsubmit='' action='scripts/comment_post.php'>
					<fieldset>
						<legend><div class='comment_pic'><img src='" .$row['usr_pic']. "' /></div>
							<textarea name='post_area' id='post_area' form='com_post' placeholder='Enter comment here.''></textarea>
							<input type='submit' id='submit' value='SUBMIT' />
						</legend>
					</fieldset>
				</form>
			</div>";
	  	}
	  }
 ?> 