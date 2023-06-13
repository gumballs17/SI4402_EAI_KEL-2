const {readFileSync} = require('fs');
let loadToko = () => JSON.parse(readFileSync('toko.json'));

module.exports = {loadToko};