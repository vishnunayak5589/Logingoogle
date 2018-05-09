<?php

session_start()

$userData = $_SESSION['userData'];

if(!empty($userData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
 }

 echo $output;
 ?>

<html>
<body>
<?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        
      $selected = mysql_select_db("logingooglee", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM users where oauth_uid = '".$userData['oauth_uid']."'");
      ?>
	  <br>
	  <br>
	  <br>
	  <br>
	   <br>
	  <br>
	  <br>
	  <br>
	<center><h2>Location deatils</h2></center><br>
      <table border="2" style= "background-color: #ccffff; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>CITY</th>
          <th>STATE</th>
          <th>ZIP CODE</th>
	<th>COUNTRY</th>

        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $conn,$result ) ){
            echo
            "<tr>
              <td>{$row['city']}</td>
              <td>{$row['state']}</td>
              <td>{$row['code']}</td>
              <td>{$row['country']}</td>
		
		
             
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
	
	<br>
	<br>
	<br>
	<br>

	
	
	
     <?php mysql_close($connector); ?>
 </body>
     </html>

