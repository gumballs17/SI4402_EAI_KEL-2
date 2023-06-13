const {loadProduct} = require('./product-models')
const express = require('express');
const app = express();
const port = 3000;

app.use(express.json()); // Middleware untuk membaca JSON

// Endpoint untuk route default
app.get('/', (req, res) => {
  res.send('API Product sedang berjalan');
});

// Endpoint untuk mendapatkan daftar pengguna
app.get('/api/product', (req, res) => {
  res.send(loadProduct());
});

app.listen(port, () => {
  console.log(`Server berjalan di http://localhost:${port}`);
});
