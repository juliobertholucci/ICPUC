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




function ValidCNPJ(){
    var cnpjInput = document.getElementById('inptCNPJ');
    var btnpag1 = document.getElementById('btnIndex');

        if(cnpjInput.value.length < 18 && cnpjInput.value.length != 0){
            document.getElementById("pcnpj").innerHTML = "Preencha o CNPJ Corretamente!";
            document.getElementById("pcnpj").style.color = "red";
            btnpag1.classList.add("disabled");
            return false;
        }

        else if(cnpjInput.value.length = 0){
            document.getElementById("pcnpj").innerHTML = "";
            
            btnpag1.classList.add("active");
            return true;
        }
    
        else{
        
            document.getElementById("pcnpj").innerHTML = "";
            btnpag1.classList.remove("disabled");
            btnpag1.classList.add("active");
        }
    }
    

    function ValidCPF(){
        var cpfInput = document.getElementById('inptCPF');
        var btnpag1 = document.getElementById('btnIndex');
            if(cpfInput.value.length < 14){
                document.getElementById("pcpf").innerHTML = "Preencha o CPF Corretamente!";
                document.getElementById("pcpf").style.color = "red";
                btnpag1.classList.add("disabled");
                return false;
            }
        
            else{
            
                document.getElementById("pcpf").innerHTML = "";
                btnpag1.classList.remove("disabled");
                btnpag1.classList.add("active");
            }
        }
    
        
       
          

    
    



