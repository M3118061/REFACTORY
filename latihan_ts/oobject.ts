interface IProduct {
  name: string,
  price: number,
  onSale?: boolean, //opsional
}

const Product: IProduct = {
  name: 'Banana',
  price: 4000,
  // onSale: false,
}


console.log(Product) // { name: 'Banana', price: 4000 }