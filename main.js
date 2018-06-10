const createButton = document.querySelector("input[type=submit]")
const inputs = document.querySelectorAll("form input")

createButton.addEventListener("click", ev=>{
    xhr = new XMLHttpRequest()
    xhr.open("POST", "/server/create.php")
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
    xhr.addEventListener("load", ev=>{

    })
    xhr.send('nome='+inputs[0].value+'&senha='+inputs[1].value+'&email='+inputs[2].value)
})