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

// const express = require("express");
// const app = express();


// const mongoose = require("mongoose");
// app.use(express.json());

// const mongoUrl =
//   "mongodb+srv://diyasyaklunabaihaqi2111:coba1@cluster0.t8zls1t.mongodb.net/?retryWrites=true&w=majority";

// mongoose
//   .connect(mongoUrl, {
//     useNewUrlParser: true,
//   })
//   .then(() => {
//     console.log("Connected to database");
//   })
//   .catch((e) => console.log(e));

// app.listen(5000,'127.0.0.1', () => {
//     console.log("Server Started");
// });

// app.post("/post", async (req, res) => {
//     console.log(req.body);

//     const {data} = req.body;

//     try {
//         if (data=="diyas"){
//             res.send({status:"ok"})
//         } else {
//             res.send({status:"User Not Found"})
//         }
//     } catch (error) {
//         res.send({status:"Something Went Wrong Try Again"})
//     } 
// });

// require("./userDetails");

// const User = mongoose.model("UserInfo");
// app.post("/register", async (req, res) => {
//     const { name, email, mobileNo } = req.body;
//     try {
//       await User.create({
//         uname:name,
//         email,
//         phoneNo: mobileNo,
//       });
//       res.send({ status: "ok" });
//     } catch (error) {
//       res.send({ status: "error" });
//     }
// });