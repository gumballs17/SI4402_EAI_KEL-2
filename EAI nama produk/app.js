const express = require("express");
const app = express();

app.use(express.json());

app.listen(5000,'127.0.0.1', () => {
    console.log("Server Started");
});

app.post("/post", async (req, res) => {
    console.log(req.body);
    res.send('Success');
});