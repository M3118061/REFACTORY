//http modul
const http = require("http")
const server = http.createServer((req, res) => {
  res.write(JSON.stringify({hello : "world"}));
  res.end();
})
server.listen(5000, () => {
  console.log("running on port 5000")
})