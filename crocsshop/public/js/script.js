$(document).ready(function(){
    $('.main-carousel-1').owlCarousel({
        loop:false,
        margin:10,
        nav: true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                items:4
            },
            1400:{
                items:5
            }
        }
    })
  });

  $(document).ready(function(){
    $('.product-img-carousel').owlCarousel({
        loop:false,
        margin:5,
        nav: true,
        dots: false,
        responsive:{
            0:{
                items:4
            },
            1000:{
                items:5
            },
            1200:{
                items:6
            },
        }
    })
  });



function increaseValue(id) {
    let value = parseInt(document.getElementById(id).value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}

function decreaseValue(id) {
    let value = parseInt(document.getElementById(id).value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}

function old_price_changed() {
    let divs = document.getElementsByClassName('old_price');
    let checkbox = document.getElementById('sale');
    if (checkbox.checked) {
        divs[0].classList.remove('hidden');
        divs[1].classList.remove('hidden');
    } else {
        divs[0].classList.add('hidden')
        divs[1].classList.add('hidden');
    }
}

function filterSetValue (value) {
    let input = document.getElementById('filterInput');
    input.value = value;
}
