const book = {
  title: 'Sesuatu',
  author: 'Someone',
  year: 1900,
}

const room = {
  bed: true,
  toilet: true,
  ac: true,
}

function save<T>(item: T): T { //<T><K><V><E><APAPUN>
  return item
}

const item = save(book)

console.log(item.author) // Someone