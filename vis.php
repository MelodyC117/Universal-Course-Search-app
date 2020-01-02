 <?php
 require_once 'connect.php';

 try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
  catch(PDOException $z){

		die($z->getMessage());
	}

	$sql = "SELECT T.Topic,
                 COUNT(*) as Num_Courses
          FROM TOPIC AS T
          RIGHT JOIN COURSE AS C
          ON T.Course_ID = C.Course_ID
          GROUP BY T.Topic
          ORDER BY Num_Courses DESC
          LIMIT 3";

    $array = $db->query($sql);

    while ($row = $array->fetch(PDO::FETCH_ASSOC)){
      $result[] = $row;
    };
    $jsonTable = json_encode($result);
    echo $jsonTable;

?>
