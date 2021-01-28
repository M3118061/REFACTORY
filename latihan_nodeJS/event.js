//event modul
const {EventEmitter} = require('events')
const event = new EventEmitter();
event.on("data", (data) => {
  console.log(`data ${data}`)
})
event.on("data", (data) => {
  console.log(`data lagi ${data}`)
})
module.exports = event

//fs modul
const fs = require('fs')
fs.writeFile('./hello.js', 'utf8', (err) => {
  if (err) {
    return err
  }
})