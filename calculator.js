const paragrafoResultado = document.querySelector("p")
const h1Resultado = document.querySelector("h1")
const imagem1 = document.querySelector("#gliter")
const imagem2 = document.querySelector("#coracao")
const elementoGrade = document.querySelector("#grade")
const corpoSite = document.querySelector("body")
if (paragrafoResultado.id == "sixseven") {
    const imagemDecorativa = document.querySelector("#imagemDecorativa")
    imagemDecorativa.src = "six seven.gif"
    h1Resultado.id = "sixseven"
    imagem1.remove()
    imagem2.remove()
    elementoGrade.id = ""
    corpoSite.id="fundoPreto"

}