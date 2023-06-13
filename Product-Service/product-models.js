const {readFileSync} = require('fs');
let loadProduct = () => JSON.parse(readFileSync('product.json'));

module.exports = {loadProduct};