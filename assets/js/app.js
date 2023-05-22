document.addEventListener('DOMContentLoaded',function(){
    let loader = document.querySelector('.loader')
    setTimeout(function(){
        loader.classList.add('loader-hide')
        console.log('loader hide')
    },2000)
})