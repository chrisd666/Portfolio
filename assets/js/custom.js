//SCROLL

$(window).scroll(function () {
    let height = $(window).scrollTop();
    if (height > 100) {
        $('#backToTop').fadeIn();
    } else {
        $('#backToTop').fadeOut();
    }
});

$(document).ready(function () {
    $('#backToTop').click(function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 'fast');
        return false;
    });
})

//FORM

$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();

        let name = $('#name').val();
        let email = $('#email').val();
        let message = $('#message').val();
        let value = true;
        let error = [];



        $('.errors').hide();

        if (name.length < 1) {
            error.push('<span>Please enter your Name</span><br>');
            value = false;
        }
        if (email.length < 1) {
            error.push('<span class="mb-2">Please enter your Email</span><br>');
            value = false;
        } else {
            var regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var validEmail = regEx.test(email);
            if (!validEmail) {
                error.push('<span class="mb-2">Please enter a valid Email</span><br>');
                value = false;
            }
        }
        if (message.length < 1) {
            error.push('<span>Please enter your Message</span>');
            value = false;
        }

        if (value) {
            this.submit();
        } else {
            $('.alert-danger').html(error);
            $('.errors').show();
            $('.alert-danger').css('padding', '20px');
        }
    })
})