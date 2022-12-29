const app = require("express")();

const FLAG = process.env.FLAG ?? "flag{abe2ff50ebbc889f8b341fa53fd792e3}";
const PORT = 3000;

app.get("/", (req, res) => {
  console.log(req.query)
  req.query.proxy.includes("nginx")
    ? res.status(400).send("Access here directly, not via nginx :(")
    : res.send(`Congratz! You got a flag: ${FLAG}`);
});

app.listen({ port: PORT, host: "0.0.0.0" }, () => {
  console.log(`Server listening at ${PORT}`);
});