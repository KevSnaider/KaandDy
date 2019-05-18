$('#prem').click(function() {
    $('.photo-card').animate({
        opacity: 0, // animate slideUp
        marginLeft: '-200px'
    }, 'slow', 'linear', function() {
        $(this).parent().append('<div class="photo-card"><div class="photo-background" style="background-image:url(&quot;assets/img/product-aeon-feature.jpg&quot;);"></div><div class="photo-details"><h1>Lorem ipsum</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales elementum mi non hendrerit. Proin tempor facilisis felis nec ultrices. Duis nec ultrices neque. Proin semper ultricies turpis, vel faucibus velit sodales vitae.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.&nbsp; </p><p>Lorem ipsum dolor sit amet</p><div class="photo-tags"><ul><li><button id="rem" class="btn btn-dark"><i class="fas fa-ban"></i></button></li><li><button id="shop" class="btn btn-dark"><i class="fas fa-cart-plus"></i></button></li><li><button id="fav" class="btn btn-dark"><i class="fas fa-star"></i></button></li></ul></div></div></div>');
        $(this).remove();
    });
});

$('#pfav').click(function() {
    $('.photo-card').animate({
        opacity: 0, // animate slideUp
        marginRight: '-200px'
    }, 'slow', 'linear', function() {
        $(this).parent().append('<div class="photo-card"><div class="photo-background" style="background-image:url(&quot;assets/img/product-aeon-feature.jpg&quot;);"></div><div class="photo-details"><h1>Lorem ipsum</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales elementum mi non hendrerit. Proin tempor facilisis felis nec ultrices. Duis nec ultrices neque. Proin semper ultricies turpis, vel faucibus velit sodales vitae.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.&nbsp; </p><p>Lorem ipsum dolor sit amet</p><div class="photo-tags"><ul><li><button id="rem" class="btn btn-dark"><i class="fas fa-ban"></i></button></li><li><button id="shop" class="btn btn-dark"><i class="fas fa-cart-plus"></i></button></li><li><button id="fav" class="btn btn-dark"><i class="fas fa-star"></i></button></li></ul></div></div></div>');
        $(this).remove();
    });
});

$('#pshop').click(function() {
    $('.photo-card').animate({
        opacity: 0 // animate slideUp
    }, 'slow', 'linear', function() {
        $(this).parent().append('<div class="photo-card"><div class="photo-background" style="background-image:url(&quot;assets/img/product-aeon-feature.jpg&quot;);"></div><div class="photo-details"><h1>Lorem ipsum</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales elementum mi non hendrerit. Proin tempor facilisis felis nec ultrices. Duis nec ultrices neque. Proin semper ultricies turpis, vel faucibus velit sodales vitae.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.&nbsp; </p><p>Lorem ipsum dolor sit amet</p><div class="photo-tags"><ul><li><button id="rem" class="btn btn-dark"><i class="fas fa-ban"></i></button></li><li><button id="shop" class="btn btn-dark"><i class="fas fa-cart-plus"></i></button></li><li><button id="fav" class="btn btn-dark"><i class="fas fa-star"></i></button></li></ul></div></div></div>');
        $(this).remove();
    });
});