let http = require("http");
let fs = require("fs");
function testResults1() {
  //var inputValue = form.temp.value;
  const fs = require("fs");
  tempv = document.getElementById("temp").value;
  humv = document.getElementById("hum").value;
  defv = document.getElementById("def").value;
  cov = document.getElementById("co").value;
  pipev = document.getElementById("pipe").value;
  ventv = document.getElementById("vent").value;

  temp = parseInt(document.getElementById("temp").value);
  hum = parseInt(document.getElementById("hum").value);
  def = parseInt(document.getElementById("def").value);
  co = parseInt(document.getElementById("co").value);
  pipe = parseInt(document.getElementById("pipe").value);
  vent = parseInt(document.getElementById("vent").value);
  if (temp && hum && def && co && pipe && vent) {
    data =
      tempv +
      "\n" +
      humv +
      "\n" +
      defv +
      "\n" +
      cov +
      "\n" +
      pipev +
      "\n" +
      pipev +
      "\n" +
      ventv +
      "\n";
    fs.appendFile("Air.txt", data, (err) => {
      if (err) {
        console.error("Error writing to file:", err);
      } else {
        console.log("Data appended to file successfully.");
      }
    });
  }
}
var express = require("express");
var app = express();
app.use(express.static(__dirname + "/public")); //__dir and not _dir
var port = 8000; // you can use any port
app.listen(port);
console.log("server on" + port);

http.createServer(handleRequest).listen(8000);
