let cities: string[]

cities = ['Bandung', 'Jakarta', 'Jogja']

cities[1] = 'Solo'

cities.push('Medan')

console.log(cities) // Bandung, Solo, Jogja, Medan


const primes: number[] = [2, 3, 5, 7, 11, 13]

console.log(primes[3]) // 7


const answers: boolean[] = [true, false, true, true]

console.log(answers[2]) // true


const scores: Array<string|number> = ['A', 100, 80, 'B+']

console.log(scores[1]) // 100
console.log(scores[3]) // B+