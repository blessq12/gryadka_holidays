document.addEventListener('DOMContentLoaded',function(){

    let header = document.getElementsByTagName('header')[0]
    window.addEventListener('scroll',function(){
        let scroll = this.scrollY
        console.log(scroll)
    })

    // ticker 
    let tickerWrap = document.querySelector('.ticker-wrap'),
        ticker = document.querySelector('.ticker'),
        tickerClone = ticker.cloneNode(true)
    tickerWrap.prepend(tickerClone)

    //price ticker
    let container = document.querySelector('.ticker--wrap'),
        priceTicker = document.querySelector('.ticker--item'),
        clone = priceTicker.cloneNode(true)
    container.append(clone)
})