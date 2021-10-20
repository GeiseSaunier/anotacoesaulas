
function validarCPF()
{
    let cpf = document.getElementById('cpf').value;
    let password = document.getElementById('senha').value

    if(cpf == '' || cpf.length < 11 || password == '' || password.length < 6)
    {
        alert('CPF ou senha inválidos. Tente novamente!')
    } else {
        alert('CPF válido!')
    }
    
}