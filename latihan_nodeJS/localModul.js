//deklarasi function
function sum (a,b){
  return a + b;
}
//eksport modul
module.exports = sum;
//export menggunakan exports
exports.sum = function (a,b){
  return a + b;
};
const result = sum(1,2)
console.log(result)