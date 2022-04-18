<script type="text/javascript" src="jquery.min.js"></script>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Tugas RPL</title>
  </head>

  <body>
  <div class="container">
  <h1 style="color: white;">Pengujian Perangkat Lunak</h1>
  </div>
  
    <div class="container">
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>01</h2>
              <h3>Shortcut Icon to HomeScreen</h3>
              <a class="btn btn-outline-light" role="button">None</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>02</h2>
              <h3>Notification</h3>
              <p>Current permission status is <b id="status">unavailable</b>.</p>
              <a class="btn btn-outline-light" onclick="requestPermission()" role="button">Check it out!</a>
              <script src="notif.js"></script>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>03</h2>
              <h3>Special Notification</h3>
              <a class="btn btn-outline-light" role="button">None</a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="box">
            <div class="content">
              <h2>04</h2>
              <h3>Geo-Location</h3>
              <a class="btn btn-outline-light" id="askButton" role="button">Check it out!</a>
              <p><div id="target"></div></p>
              <script src="geoloc.js"></script>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>05</h2>
              <h3>Camera Access</h3>
              <a class="btn btn-outline-light" href="cam/index.html" role="button">Check it out!</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>06</h2>
              <h3>Speaker Access</h3>
              <a class="btn btn-outline-light" onclick="myFunction()" role="button">Belom Bener</a><br>
              <video id="myVideo" width="250" height="176" controls></video>
              <source src="media/video.mp4" type="video/mp4">
              <source src="mov_bbb.ogg" type="video/ogg">Your browser does not support HTML5 video.</video>
              <script>
                var vid = document.getElementById("myVideo");
                function myFunction() {
                  alert(vid.audioTracks.length);
                }
              </script>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="box">
            <div class="content">
              <h2>07</h2>
              <h3>Microphone Access</h3>
              <a class="btn btn-outline-light" onclick="getStream('audio')" role="button">Check it out!</a><br>
              <div class=" container col" style="width: 250px;">
                <audio controls></audio> 
              </div>
              <script src="mic.js"></script>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>08</h2>
              <h3>Contact Book/List Access</h3>
              <a class="btn btn-outline-light" onclick="readContacts()" role="button">Check it out!</a>
              <script src="contact.js"></script>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>09</h2>
              <h3>Fingerprint Access</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a class="btn btn-outline-light" role="button">Belom Bener</a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="box">
            <div class="content">
              <h2>10</h2>
              <h3>Face Detection Access</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a class="btn btn-outline-light" role="button">Belom Bener</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>11</h2>
              <h3>Cellular Access</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a class="btn btn-outline-light" role="button">Harus Diskusi</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>12</h2>
              <h3>Wi-Fi Access</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a class="btn btn-outline-light" role="button">Harus Diskusi</a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="box">
            <div class="content">
              <h2>13</h2>
              <h3>Bluetooth Access</h3>
              <a class="btn btn-outline-light" onclick="readBatteryLevel()" role="button">Check it out!</a>
              <p id="target"></p>
              <script src="bluetooth.js"></script>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>14</h2>
              <h3>Infrared Access</h3>
              <a class="btn btn-outline-light" role="button">None</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>15</h2>
              <h3>Near Field Communication Access</h3>
              <a class="btn btn-outline-light" onclick="readTag()" role="button">Read NFC!</a>
              <a class="btn btn-outline-light" onclick="writeTag()" role="button">Write NFC!</a>
              <script src="nfc.js"></script>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="box">
            <div class="content">
              <h2>16</h2>
              <h3>Accelerometer Access</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a class="btn btn-outline-light" role="button">Harus Diskusi</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>17</h2>
              <h3>Magnetometer Access</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a class="btn btn-outline-light" role="button">Harus Diskusi</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>18</h2>
              <h3>Gyroscope Access</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a class="btn btn-outline-light" role="button">Harus Diskusi</a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="box">
            <div class="content">
              <h2>19</h2>
              <h3>Access to Cellular Phone Number</h3>
              <a class="btn btn-outline-light" role="button">None</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>20</h2>
              <h3>Access to Device Serial Number</h3>
              <a class="btn btn-outline-light" role="button">None</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>21</h2>
              <h3>Access to Device IMEI Number</h3>
              <a class="btn btn-outline-light" role="button">None</a>
            </div>
          </div>
        </div>

      </div>

  </body>

</html>