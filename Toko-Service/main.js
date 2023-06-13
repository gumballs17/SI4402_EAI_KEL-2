const {loadToko} = require('./toko-models')
const express = require('express');
const app = express();
const port = 3001;

app.use(express.json()); // Middleware untuk membaca JSON

// Endpoint untuk route default
app.get('/', (req, res) => {
  res.send('API toko sedang berjalan');
});

// Endpoint untuk mendapatkan daftar pengguna
app.get('/api/toko', (req, res) => {
  res.send(loadToko());
});

app.listen(port, () => {
  console.log(`Server berjalan di http://localhost:${port}`);
});
