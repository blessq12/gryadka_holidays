document.addEventListener('DOMContentLoaded',function(){
    let header = document.getElementsByTagName('header')[0]
    window.addEventListener('scroll',function(){
        let scroll = this.scrollY
        console.log(scroll)
    })
})