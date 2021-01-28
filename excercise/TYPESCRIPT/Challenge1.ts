var cart = [];
var Item = function(item_id, price, quantity){
    this.item_id = item_id
    this.price = price
    this.quantity = quantity
};

function addItem (item_id, price, quantity){
    for (var i in cart){
        if (cart[i].item_id === item_id){
            cart[i].quantity += quantity;
            return;
        }
    }
    var item = new Item(item_id, price, quantity);
    cart.push(item);
}

addItem(1, 30000, 3)
addItem(2, 10000, 0)
addItem(3, 5000, 2)

console.log(cart)
console.log(cart[0].quantity)