document.addEventListener('DOMContentLoaded',function(){

    let header = document.getElementsByTagName('header')[0]
    window.addEventListener('scroll',function(){
        let scroll = this.scrollY
    })

    function onVisible(element, callback) {
        new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if(entry.intersectionRatio > 0) {
              callback(element);
              observer.disconnect();
            }
          });
        }).observe(element);
    }

    onVisible(document.querySelector('.price-container'),function(){
        let row = document.querySelector('.price-row')
        row.scroll({left:150,behavior:'smooth'})
        setTimeout(function(){
            row.scroll({
                left: 0,
                behavior: 'smooth'
            })
        },3000)
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

    //gallery carousel
    let galleryContainer = document.querySelector('.photo-gallery'),
        gallery = this.querySelector('.gallery'),
        galleryClone = gallery.cloneNode(true)
    galleryContainer.append(galleryClone)

    function scrollContact(){
        let sections = document.getElementsByTagName('section')
        let section = sections[sections.length-1]
        section.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    }

    // modal section
    let targetBtns = document.querySelectorAll('[data-target]')
    for (btn of targetBtns){
        btn.addEventListener('click',function(){
            alert('modal target')
        })
    }
})