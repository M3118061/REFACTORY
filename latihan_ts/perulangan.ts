for (let i = 0; i < 3; i++) {
  console.log (i) // 0, 1, 2
}

const hari = ['senin','selasa','rabu','kamis','jumat','sabtu']

for (let value of hari) {
  console.log (value) 
}

const numbers = [10, 20, 30, 40]

for (let index in numbers) {
  console.log (index) // 0, 1, 2, 3
  
  console.log(numbers[index]) // 10, 20, 30, 40
}