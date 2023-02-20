function fMasc(objeto,mascara) {
    obj=objeto
    masc=mascara
    setTimeout("fMascEx()",1)
}
function fMascEx() {
    obj.value=masc(obj.value)
}
function mTel(tel) {
    tel=tel.replace(/\D/g,"")
    tel=tel.replace(/^(\d)/,"($1")
    tel=tel.replace(/(.{3})(\d)/,"$1)$2")
    if(tel.length == 9) {
        tel=tel.replace(/(.{1})$/,"-$1")
    } else if (tel.length == 10) {
        tel=tel.replace(/(.{2})$/,"-$1")
    } else if (tel.length == 11) {
        tel=tel.replace(/(.{3})$/,"-$1")
    } else if (tel.length == 12) {
        tel=tel.replace(/(.{4})$/,"-$1")
    } else if (tel.length > 12) {
        tel=tel.replace(/(.{4})$/,"-$1")
    }
    return tel;
}
function mCNPJ(cnpj){
    cnpj=cnpj.replace(/\D/g,"")
    cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
    cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
    cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
    cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
    return cnpj
}
function mCPF(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
}
function mCEP(cep){
    cep=cep.replace(/\D/g,"")
    cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
    cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
    return cep
}
function mNum(num){
    num=num.replace(/\D/g,"")
    return num
}


function QTDsenha(){
    var senha = document.getElementById('s4');
    var btn = document.getElementById('botaoCadUsu');
    if(senha.value.length < 6){
    document.getElementById("ps").innerHTML = "Senha deve conter mais de 6 dígitos!";
    document.getElementById("ps").style.color = "red";
    btn.classList.add("disabled");
    return false;
    }
    
    else{
    
    document.getElementById("ps").innerHTML = "";
    btn.classList.remove("disabled");
    btn.classList.add("active");
    
    }
}


    function QTDtel(){
        var telefone = document.getElementById('tel');
        var btn = document.getElementById('botaoCadUsu');
        if(telefone.value.length < 14){
        document.getElementById("pt").innerHTML = "Telefone Incorreto";
        document.getElementById("pt").style.color = "red";
        btn.classList.add("disabled");
        return false;
        }
        
        else{
        
        document.getElementById("pt").innerHTML = "";
        btn.classList.remove("disabled");
        btn.classList.add("active");
        
        }
    }