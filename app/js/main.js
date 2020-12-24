function view(id){

    if(id != 'undefined' && id > 0){
        window.location.href = "clientes.php?view="+id;
    } else {
        alert('Selecione algum cadastro!')
    }

}

 function editar(id, cod, valor){

  //  let cod = codigo.toLowerCase() 
   
    //criar um form de edicao
    let form = document.createElement('form')
    form.action = "cadastro_controller.php?acao=atualizar&col="+cod
    form.method = 'post'
    form.className = 'row'

    function inputForm(n, v){
        let nCad = document.createElement('input')
        nCad.type = 'text'
        nCad.name = n
        nCad.id = 'form'
        nCad.className = 'col-6 form-control'
        nCad.value = v
        return nCad
    }

    function labelForm(cod) {
        var x = document.createElement("label");
        x.className = 'col-sm-3 col-form-label'
        x.setAttribute("for", "form");
        x.innerHTML = '<strong>'+ cod +': </strong>'
        return x
    }

    //criar um input hidden p/ guardar o id do campo
    let inputCod = document.createElement('input')
    inputCod.type = 'hidden'
    inputCod.name = 'id'
    inputCod.value = id

    //criar um button para envio do form
    let button = document.createElement('button')
    button.type = 'submit'
    button.className = 'col-2 btn btn-info'
    button.innerHTML = 'Atualizar'

    form.appendChild(labelForm(cod))

    form.appendChild(inputForm(cod, valor))

    form.appendChild(inputCod)

    //incluir button no form
    form.appendChild(button)

    var nome = document.getElementById(cod)

    nome.innerHTML = ''

    nome.insertBefore(form, nome[0])

} 

