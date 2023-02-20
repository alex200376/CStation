$(document).ready(function() {






    var sum = 0;
    $('.add_to_cart').click(function() {
        var productCard = $(this).parent();
        var position = productCard.offset();
        var productImage = $(productCard).find('img').get(0).src;
        var productName = $(productCard).find('.product_name').get(0).innerHTML;
        var productprice = Number($(productCard).find('.xd').get(0).innerHTML);

        $("body").append('<div class="floating-cart"></div>');
        var cart = $('div.floating-cart');
        productCard.clone().appendTo(cart);
        $(cart).css({ 'top': position.top + 'px', "left": position.left + 'px' }).fadeIn("slow").addClass('moveToCart');
        setTimeout(function() { $("body").addClass("MakeFloatingCart"); }, 800);
        setTimeout(function() {

            sum += productprice;
            $('div.floating-cart').remove();
            $("body").removeClass("MakeFloatingCart");
            var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='" + productImage + "' alt='' /></div><span>" + productName + "</span><strong>$</strong><strong class='cs'>" + productprice + "</strong><div class='cart-item-border'></div><div class='delete-item' style='margin-left:200px'></div></div>";
            $('#total0').hide();
            $('#total').show();
            $('#total').html(sum)
            $("#cart .empty").hide();
            $("#cart").append(cartItem);
            $("#checkout").fadeIn(500);
            localStorage.totalprice = $('#total').html();
            localStorage.cart = $('#cart').html();
            $("#cart .cart-item").last()

            .addClass("flash")
                .find(".delete-item").click(function() {
                    $(this).parent().fadeOut(300, function() {
                        var x = $(this).find('.cs').get(0).innerHTML;
                        $(this).remove();
                        sum = sum - x;
                        $('#total').html(sum);
                        $(productCard).find('.cs').innerHTML = '0';
                        if ($("#cart .cart-item").size() == 0) {
                            sum = 0;
                            $("#cart .empty").fadeIn(500);
                            $("#checkout").fadeOut(500);
                            $('#total').fadeOut(500);
                            $('#total0').show();
                            $('#total').hide();


                        }
                    })
                });

            setTimeout(function() {
                $("#cart .cart-item").last().removeClass("flash");
            }, 10);

        }, 1000);
    });
});