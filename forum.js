var posts = [
    {
        nome: 'Talles Amaral',
        horarioPost: 13.40,
        conteudo: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil placeat molestiae, officiis recusandae minus officia id laudantium ullam accusamus culpa nobis laboriosam praesentium sunt. Similique odio eius reiciendis ex quibusdam.",

    },
    {
        nome: 'Talles Rafael',
        horarioPost: 13.90,
        conteudo: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil placeat molestiae, officiis recusandae minus officia id laudantium ullam accusamus culpa nobis laboriosam praesentium sunt. Similique odio eius reiciendis ex quibusdam.",

    },
    {
        nome: 'Alisson de A',
        horarioPost: 13.90,
        conteudo: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil placeat molestiae, officiis recusandae minus officia id laudantium ullam accusamus culpa nobis laboriosam praesentium sunt. Similique odio eius reiciendis ex quibusdam.",

    }
]
const abrirComentarios = () => {
    let box = document.getElementById('boxcomentarios')
    
    box.style.display = 'block'
}
const fecharComentarios = () => {
    let box = document.getElementById('boxcomentarios')
    
    box.style.display = 'none'
}
const fecharModal = () =>{
    let modal = document.querySelector('.modal-forum')
    
    modal.style.display = 'none'
}
const modalPublic = () =>{
    let modal = document.querySelector('.modal-forum')
    
    modal.style.display = 'block'
}
const postforum = () =>{
    let content = document.getElementById('content').value
    var postagem = {}
    let name = 'Talles'
    let horario = '13:34'
    
    postagem = {
        conteudo: content,
        nome: name,
        horario: horario,
    }
    posts.push(postagem)
    fecharModal()
}
let boxPost = document.querySelector('.post-boxes')
for(let i= 0;i<5;i++){
    boxPost.innerHTML += `<div class="forum-posts">
    <div class="dados-forum-post">
        <img class="img-post" src="fotominha.jpeg" alt="foto">
        <h3>${posts[i].nome}</h3>
        
        <p>${posts[i].horarioPost}</p>
    </div>
    <p>${posts[i].conteudo}</p>
    <div class="interacoes">
        <ul>
            <li>
                <a href="#"><img src="thumbs-up-solid.svg" alt="svg"></a>
            </li>
            <li>
                <a href="#"><img src="comments-solid.svg" alt="svg"></a>
            </li>
            <li>
                <a href="#"><img src="thumbs-down-solid.svg" alt="svg"></a>
            </li>
        </ul>
    </div>
</div>`
}

