
  <?php
      $db = new mysqli('p3nlmysql13plsk.secureserver.net', 'brycemartin', 'Bison5121bm#', 'brycemartin');
      if (mysqli_connect_errno()) {
      echo '<p>Error: Could not connect to database.<br/>
      Please try again later.</p>';
      exit;
      }

      $query = "SELECT Title, Content, noteID FROM notes";
      $stmt = $db->prepare($query);
      $stmt->execute();
      $stmt->store_result();

      $stmt->bind_result($Title, $Content, $noteID);

      while($stmt->fetch()) {
      echo "
      <div class='container'>
        <div class='row'>
          <div class='col'><h5><strong>".$Title."</strong></h5> <p style='font-weight: lighter;' >ID:".$noteID."</p></div>
          <div class='w-100'></div>
          <div class='col'>".$Content."</div> <br />
        </div>
        <br/>
      </div>
      ";
      }

      $stmt->free_result();
      $db->close();

      exit;
  ?>
