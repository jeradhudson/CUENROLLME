
<?php // sqltest.php
  require_once 'inc/header.php';

require_once 'logindb.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");

  if (isset($_POST['delete']) && isset($_POST['SemID']))
  {
    $id   = get_post($conn, 'SemID');
    $query  = "DELETE FROM Semester WHERE SemID='$id'";
    $result = $conn->query($query);
    if (!$result) echo "DELETE failed<br><br>";
  }

  if (isset($_POST['SemID'])   &&
      isset($_POST['SemSemester'])    &&
      isset($_POST['SemYear']) &&
      isset($_POST['SemStart'])     &&
      isset($_POST['SemEnd']))
  {
    
    $id         = get_post($conn, 'SemID');
    $semsemster   = get_post($conn, 'SemSemester');
    $semyear    = get_post($conn, 'SemYear');
    $semstart = get_post($conn, 'SemStart');
    $semend     = get_post($conn, 'SemEnd');
    
    $query    = "INSERT INTO Semester VALUES" .
      "('$id','$semsemster', '$semyear', '$semstart', '$semend')";
    $result   = $conn->query($query);
    if (!$result) echo "INSERT failed<br><br>";
  }

  echo <<<_END
  <form action="adminUser.php" method="post"><pre>
    Semester ID <input type="text" name="SemID">
     SemSemester <input type="text" name="SemSemester">
  Semester Year <input type="text" name="SemYear">
      Semester Start Date <input type="text" name="SemStart">
      Semester End Date <input type="text" name="SemEnd">
           <input type="submit" value="ADD RECORD">
  </pre></form>
_END;

  $query  = "SELECT * FROM Semester";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed");

  $rows = $result->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $row = $result->fetch_array(MYSQLI_NUM);

    $r0 = htmlspecialchars($row[0]);
    $r1 = htmlspecialchars($row[1]);
    $r2 = htmlspecialchars($row[2]);
    $r3 = htmlspecialchars($row[3]);
    $r4 = htmlspecialchars($row[4]);

    echo <<<_END
  <pre>
    Sem ID        $r0
    Semester $r1
    Semester Year  $r2
    Semester Start Date $r3
    Semester End Date   $r4
  </pre>
  <form action='adminUser.php' method='post'>
  <input type='hidden' name='delete' value='yes'>
  <input type='hidden' name='id' value='$r0'>
  <input type='submit' value='DELETE RECORD'></form>
_END;
  }

  $result->close();
  $conn->close();

  function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
?>

<?php
  include 'inc/footer.php';

  ?>

