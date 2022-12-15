function abrirLogin(){
    document.getElementById('popupLogin').style.display ='block';
}
function fecharlogin(){
    document.getElementById('popupLogin').style.display ='none'
    document.getElementById('popupCriarConta').style.display ='none'
    document.getElementById('popupEsqSenha').style.display ='none'
}
function abrirRedfSenha(){
    document.getElementById('popuplogin').style.display ='none'
    document.getElementById('popupEsqSenha').style.display ='block'
}
function abrirLoginNovamente(){
    document.getElementById('popupCriarConta').style.display ='none'
    document.getElementById('popupLogin').style.display = 'block'
}
function abrirCriarConta(){
    document.getElementById('popupCriarConta').style.display ='block'
    document.getElementById('popupLogin').style.display ='none'
}
function aparecerBotao(){
    document.getElementById('carousel-control-prev').style.display ='block'
}
function colorirBotãoDestaque(){
    document.getElementById('btnDestaque').style.background = 'rgb(246,103,153)'
    document.getElementById('btnDestaque').style.color = 'white'
    document.getElementById('btnDestaque').style.transitionDuration = '0.5'
}
function jaTenhoConta(){
    document.getElementById('popupLogin').style.display ='block'
    document.getElementById('popupCriarConta').style.display ='none'
}
function abrirPerfil(){
    document.getElementById('popupPerfil').style.display ='block'
}
function fecharPerfil(){
    document.getElementById('popupPerfil').style.display ='none'
}