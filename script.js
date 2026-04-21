const switcher = document.querySelector('.troca');

switcher.addEventListener('click', function () {
    document.body.classList.toggle('light-theme');
    document.body.classList.toggle('dark-theme');
});


function most(){
    const bot = document.querySelector('.botao')
    const k = document.querySelector('.senha')

    if(k.type === 'password'){
        k.type = 'text';
        bot.innerText = 'k'

    } 
    else{
        k.type = 'password';
        bot.innerText = 'aoba';
    }
}