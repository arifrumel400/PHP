import express  from "express"
import mongoose  from "mongoose"
import bodyparser from "body-parser"


const app = express()


//db connect 
const mongoUrl ="mongodb://localhost/register"

mongoose.connect(mongoUrl, {

    useCreateIndex: true,
    useNewUrlParser: true,
    useFindAndModify: false
}).then( ()=> console.log("Db running on"))


app.use(bodyparser.json())


app.post('./login', async (req, res)=> {

    const newUser = new User (req.body)
    await newUser .save(()=>console.log("Data added")) 
    res.send(newUser)
    
})

app.listen(5000, ()=> console.log("port is running"))