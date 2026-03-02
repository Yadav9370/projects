const express = require("express");
const router = require("./Router/Router")
const{ connectDB } = require("./connectDB")
connectDB()
const cors = require("cors")
const app = express()
app.use(cors())
app.use(express.json())
app.use(express.urlencoded({extended:true}))

app.use("/",router)

app.listen(4000,()=>{
   console.log('ruunning server....')
})