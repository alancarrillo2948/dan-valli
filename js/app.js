const stars = document.querySelectorAll('.star');

stars.forEach(function(star, index)  {
    star.addEventListener('click', function (   ) {
        for (let i = 0; i < array.length; i++) {
            stars[i].classList.add('checked');
        }
    })
    
})