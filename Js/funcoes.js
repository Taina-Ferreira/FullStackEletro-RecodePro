function exibirCategorias(categoria) {
  let elementos = document.getElementsByClassName("card");
  console.log(elementos);
  for (var i = 0; i < elementos.length; i++) {
    if (categoria == elementos[i].id) {
      elementos[i].style = "display:flex";
    } else {
      elementos[i].style = "display:none";
    }
  }
}

let exibirTodos = () => {
  let elementos = document.getElementsByClassName("card");
  for (var i = 0; i < elementos.length; i++) {
    elementos[i].style = "display: flex";
  }
};

let destaque = (imagem) => {
  if (imagem.height == 100) {
    imagem.style = "height: 150px; max-width: 200px;";
  } else {
    imagem.style = "height: 100px";
  }
};




