var mysql = require("mysql");

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "makhrram",
});
const array = [
  "/img/DSC04249.jpg",
  "/img/as%20(1).jpg",
  "/img/scz.jpg",
  "/img/W.jpg",
  "/img/DSC03855.jpg",
  "/img/DSC04202.jpg",
  "/img/DSC03877.jpg",
  "/img/DSC03100.jpg",
  "/img/0000023.jpg",
  "/img/000022.jpg",
  "/img/00021.jpg",
];
con.connect(function (err) {
  if (err) throw err;
  console.log("Connected!");
  array.forEach((element) => {
    var sql = `INSERT INTO product (productName,productImage,categoryID,productNameEN) VALUES ('%D9%85%D9%86%D8%AA%D8%AC','${element}',11,'Product')`;
    con.query(sql, function (err, result) {
      if (err) throw err;
      console.log("1 record inserted");
    });
    con.query(sql, function (err, result) {
      if (err) throw err;
      console.log("1 record inserted");
    });
  });
});
