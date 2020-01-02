<?php
require_once 'connect.php';

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = 'SELECT * FROM FOCUS';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FOCUS RELATION</title>
        <style>
        @font-face {
          font-family: 'Rancho';
          font-style: normal;
          font-weight: 400;
          src: local('Rancho Regular'), local('Rancho-Regular'), url(https://fonts.gstatic.com/s/rancho/v10/46kulbzmXjLaqZRVam_h.woff2) format('woff2');
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        .font-effect-stonewash {
          -webkit-mask-image: url(//themes.googleusercontent.com/static/patterns/stonewash.png);
          color: #343956;
        }
        .font-effect-3d-float {
          text-shadow: 0 0.032em 0 #b0b0b0, 0px 0.15em 0.11em rgba(0,0,0,0.15), 0px 0.25em 0.021em rgba(0,0,0,0.1), 0px 0.32em 0.32em rgba(0,0,0,0.1);
          color: #fff;
        }

        a, a:visited {
            text-decoration:none;
            color:skyblue;
            }

        h1 {
          font-family: 'Rancho';
          color: white;
          font-size: 65px;
          margin-left: 20px;
          float: left;
          position: relative;
        }

        .cloud_img {
          width: 100px;
          height:200%;
          float:left;
          padding-left: 350px;
          position: relative;
        }

        #wrap {
          background: none repeat scroll 0 0 #3498DB;
          overflow: hidden;
          width: 100%;
          height: 80px;
          opacity: 0.75;
          border-radius: 15px 15px;
        }

        .author {
          color: black;
          /* opacity: 0.35; */
          font-style: italic;
          font-size: 15px;
          font-family: "Rancho";
        }

        .cloud {
          float: left;
          width: 50%;
          height: 50%;
        }

        .header {
          float: left;
          margin-left: -272px;
          margin-top: -45px;
        }

        a:hover {
          color: white;
        }

        .go_back {
          float: left;
          opacity: 0.75;
        }

        #bu {
          background-color: black;
          color: white;
          height: 25px;
          font-size: 15px;
          width: 100px;
          border: 2px;
          font-weight: bold;
          border-color: white;
          border-style: double;
        }

        #bu:hover {
          background-color: skyblue;
          color: black;
          font-family: "Rancho";
        }

        h4 {
          font-size: 32px;
          color: black;
          opacity: 0.55;
        }

        #aur {
          color: black;
          opacity: 0.55;
        }

        #aur:hover {
          color: #3498DB;
        }
        </style>
    </head>
    <body bgcolor="#D6EAF8">
      <!-- author info -->
      <div class="author"> <a id="aur" href="https://www.linkedin.com/in/melodylchen/" target="_blank">Author @ Melody Chen</a><div>

    <!-- div block header --------------------------------------------------------------------------->
    <div id="wrap">
      <!-- go back button -->
      <div class="go_back">
        <a href="soup.html"><button type="button" id="bu"> GO BACK </button></a>
      </div>

      <!-- cloud search image -->
      <div class="cloud">
        <img src="cloud.gif" class="cloud_img">
      </div>

      <!-- headline: app name -->
      <div class="header">
        <h1> Universal Course Search </h1>
      </div>

    </div>
    <!-- div block header --------------------------------------------------------------------------->
        <div id="container">
            <h4>Focus</h4>
            <table style="width: 100%;background-color: black; opacity: 0.55; font-style:normal; margin-top: -10px; color: white;" border="1" cellspacing="5" cellpadding="5">
                <thead>
                    <tr>
                      <th align="left">Focus ID</th>
                      <th align="left">Focus Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td align="left"><?php echo htmlspecialchars($row['Focus_ID']); ?></td>
                            <td align="left"><?php echo htmlspecialchars($row['Focus_Name']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>
