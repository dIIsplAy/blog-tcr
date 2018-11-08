// $(document).ready(function () {
// console.log("toto");
//     $('#sidebarCollapse').on('click', function () {
//         $('#sidebar').toggleClass('active');
//     });

// });

$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var article = $(this).attr('href'); // Page cible
        var speed = 1000; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(article).offset().top }, speed ); // Go
        console.log($(article).offset().top)
        return false;
    });

});

// $(document).ready(function(){
//     $('.mdl-layout__drawer-button').on('click', function(){
//         $('.mdl-layout__drawer').attr('width','100%');
//         $('.mdl-layout__obfuscator').attr('width','100%')
//     })
// })
$(document).ready(function(){
    $('.mdl-layout__drawer-button').on('click', function(){
        $('.mdl-layout__drawer').css("width: 100% !important");
    })
})


$(document).ready(function(){
    $('.close').on('click', function(){
        $('.mdl-layout__drawer').removeClass('is-visible')
        $('.mdl-layout__obfuscator').removeClass('is-visible')
    })
})
