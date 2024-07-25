<?php

require "./monitor.php";

$baseIp = "192.168.2.31";

?>
<html>
    <head>
        <link href="/main.css" rel="stylesheet">
        <title>RTL SDR PLATFORM</title>
    </head>
    <body>
        <h1>RTL SDR PLATFORM</h1>
        <div class="row">
          <div class="column">
            <h2>Monitoring</h2>
            <?php echo $data; ?>
          </div>
          <div class="column">
            <h2>Links</h2>
            <table>
              <tr>
                <td>Feeder</td>
                <td><a href="http://<?php echo $baseIp; ?>:8082/">View</a></td>
              </tr>
              <tr>
                <td>Planefinder</td>
                <td><a href="http://<?php echo $baseIp; ?>:30053/">View</a></td>
              </tr>
              <tr>
                <td>Flightradar24</td>
                <td><a href="http://<?php echo $baseIp; ?>:8755/">View</a></td>
              </tr>
              <tr>
                <td>FlightAware</td>
                <td><a href="http://<?php echo $baseIp; ?>:8081/">View</a></td>
              </tr>
              <tr>
                <td>Gatus</td>
                <td><a href="http://<?php echo $baseIp; ?>:9092/">View</a></td>
              </tr>
            </table>
          </div>
        </div>
    </body>
</html>