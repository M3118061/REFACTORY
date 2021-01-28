console.log("Hello World!");

//os modul
const os = require('os')
const osPlatform = os.arch()
console.log(osPlatform)

//path modul
const path = require('path')
const pathParse = path.parse('/users/test.txt')
console.log(pathParse)

//event modul
const event = require("./eventModul")
const fs = require("fs")
fs.readdir("./", (err,data) => {
  if(err) throw Error(err)
  event.emit("data",data)
})
