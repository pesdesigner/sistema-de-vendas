function view(id){

    if(id != 'undefined' && id > 0){
        window.location.href = "clientes.php?view="+id;
    } else {
        alert('Selecione algum cadastro!')
    }

}

 function editar(id){

    //criar um form de edicao
    let form = document.createElement('form')
    form.action = '#'
    form.method = 'post'
    form.className = 'row'

    function inputForm(n){
        let nCad = document.createElement('input')
        nCad.type = 'text'
        nCad.name = n
        nCad.className = 'col-9 form-control'
        return nCad
    }

    //criar um button para envio do form
    let button = document.createElement('button')
    button.type = 'submit'
    button.className = 'col-3 btn btn-info'
    button.innerHTML = 'Atualizar'

    //incluir inputCadastro no form
    nome.appendChild(inputForm('nome'))
    form.appendChild(inputForm('cpf'))
    form.appendChild(inputForm('email'))
    form.appendChild(inputForm('tel'))
    form.appendChild(inputForm('cel'))
    form.appendChild(inputForm('empresa'))
    form.appendChild(inputForm('cnpj'))
    form.appendChild(inputForm('cidade'))
    form.appendChild(inputForm('estado'))
    form.appendChild(inputForm('end'))
    form.appendChild(inputForm('cep'))
    form.appendChild(inputForm('complemento'))

    //incluir button no form
    form.appendChild(button)

    //console.log(form)

    let nome = document.getElementById('nome')
    let cpf = document.getElementById('cpf')
    let email = document.getElementById('email')
    let tel = document.getElementById('tel')

    nome.innerHTML = ''

    nome.insertBefore(form, nome[0])


} 