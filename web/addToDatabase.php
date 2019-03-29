      <!DOCTYPE html>
      <html>
      <head>
         <title>Add To Database</title>
      </head>
      <body>
          <?php
         if(isset($_POST['add'])) 
         {
            $dbhost = 'localhost:3036';
            $dbuser = 'PlaceFinderUser';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) 
            {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $nameVal= addslashes ($_POST['nameVal']);
               $latVal = addslashes($_POST['latVal'])
               $lngVal = addslashes($_POST['lngVal'])
            }
            else 
            {
               $nameVal= $_POST['nameVal']);
               $latVal = $_POST['latVal'])
               $lngVal = $_POST['lngVal'])
            }
                        
            $sql = "INSERT INTO places(locationName, longitude, latitude) VALUES('$locationName','$longitude',$latitude)";
               
            mysql_select_db('MyPlaces');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }
         else {
         }
      ?>
      </body>
      </html>
     