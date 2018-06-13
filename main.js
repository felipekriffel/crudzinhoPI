const createButton = document.querySelector("section > input")
const listButton = document.querySelector("section > input:last-child")
const inputs = document.querySelectorAll("form input")
const table = document.querySelector("table")

/* createButton.addEventListener("click", ev=>{
    xhr = new XMLHttpRequest()
    xhr.open("POST", "/server/create.php")
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
    xhr.addEventListener("load", ev=>{

    })
    xhr.send('nome='+inputs[0].value+'&senha='+inputs[1].value+'&email='+inputs[2].value)
}) */

async function fetchAsync(initParams, url) {
    let response = await fetch(url, initParams)
    return response.text()
    // let data = await response.text()
    // return data
}

createButton.addEventListener("click", async ev =>{
    let inputNome = (inputs[0].value)
    let inputSenha = (inputs[1].value)  
    let input = {
        login: inputs[0].value,
        senha: inputs[1].value
    }
    let params = {
        body : JSON.stringify(input),
        method : 'POST',
        credentials : 'same-origin'
    }
    let response = await fetch("api/create.php", params)
    let data = await response.text()
    console.log(data)
})

listButton.addEventListener("click", async ev =>{
    let params = {
        method : 'GET',
        credentials : 'same-origin'
    }
    let response = await fetch("api/read.php", params)
    let data = await response.json()

    data.forEach(element => {
        let row = document.createElement("tr")
        let id = document.createElement("td")
        id.innerText = element.id_usuario
        row.appendChild(id)
        let name = document.createElement("td")
        name.innerText = element.login_usuario
        row.appendChild(name)
        let senha = document.createElement("td")
        senha.innerText = element.senha_usuario
        row.appendChild(senha)

        table.tBodies[0].appendChild(row)
    })
})