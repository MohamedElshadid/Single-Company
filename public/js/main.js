$(function () {

// when click play video will play auto
    $(".fa-play").click(function(){
        $(this).siblings("div").children().find("video").get(0).play()
     })
// when click close modal video will close
     $(".close").click(function(){
         $(this).siblings("div").children("video").get(0).pause()
     })
// when click out modal video will close

     $(".modal").click(function(){
            $(this).children().find("video").get(0).pause()
     })

// strat progress
    function activeNavQuisez(willclick) {
        willclick.click(function () {
            let countActive = $(this).data("value");

            $(".number_of_quiz").text(countActive);

            for (var i = 0; i < countActive; i++) {
                navQuizes.eq(i).addClass("active_nav");
            }

            for (var i = countActive; i <= 5; i++) {
                navQuizes.eq(i).removeClass("active_nav");
            }
        });
    }

    let navQuizes = $(".nav-pills li a ");
    activeNavQuisez(navQuizes);
    let btnNext = $(".btn_next");
    activeNavQuisez(btnNext);

    // start open contact modal
    $(".buttons_call .phone").click(function () {
        $(".right").show();
        $(".open_contact_modal").click();
    });

    // start pop up
    setTimeout(() => {
        $(".open_pop_up").click();
    }, 2000);

    // start next step
    $(".next_step").click(function () {
        $(".right").hide();
        $(".right2").show();
    });

    // start quizes
    $(".open_quiz").click(function () {
        $(".open_contact_modal").click()
        setTimeout(()=>{
            $(".open_quizes_modal").click()
        },500)

    });

    $(".quiz6 .done").click(function () {
        $(".open_pop_up").click();
    });

    $(
        ".quiz1  .checkbox_container input[type='radio'] , .quiz2 .checkbox_container input[type='radio'] ,.quiz3  .checkbox_container input[type='radio'] "
    ).on("change", function () {
        let refrenceCheckBtn = $(this);

        refrenceCheckBtn.parent().siblings("img").css("opacity", "1");

        refrenceCheckBtn
            .parent()
            .parent()
            .parent()
            .siblings()
            .children()
            .find("img")
            .css("opacity", ".7");
    });

    $(".quiz4  .checkbox_container input[type='radio']").change(function () {
        let refrenceCheckBtn = $(this);

        refrenceCheckBtn.parents(".choose_multi").addClass("selected");

        refrenceCheckBtn
            .parents(".choose_multi")
            .siblings(".choose_multi")
            .removeClass("selected");
    });

    $(
        ".quiz5 .checkbox_container input[type='checkbox'] , .quiz6 .checkbox_container input[type='checkbox'] "
    ).on("click", function () {
        let refrenceCheckBtn = $(this);
        if (refrenceCheckBtn.prop("checked")) {
            refrenceCheckBtn.parent().parent().addClass("selected");
        } else {
            refrenceCheckBtn.parent().parent().removeClass("selected");
        }
    });

    $(".quiz6 .checkbox_container input[type='checkbox'] ").on(
        "click",
        function () {
            let refrenceCheckBtn = $(this);
            if (refrenceCheckBtn.prop("checked")) {
                refrenceCheckBtn.parent().parent().addClass("selected");
            } else {
                refrenceCheckBtn.parent().parent().removeClass("selected");
            }
        }
    );



    // start modal thanks

    $(".quiz6 .done").click(function(){

            $(".open_quizes_modal").click()
            $(".open_thanks_modal").click()



    })

    // start range slider
    slider = $("#myrange");
    let output = $("#rangevalue");
    output.html(slider.val());

    slider.mousemove(function () {
        output.html($(this).val());
        let sliderValue = slider.val()/50;
        let color = `linear-gradient(90deg , #e0c89c ${sliderValue}% ,rgb(214,214,214)  ${sliderValue}% ) `;
        $(this).css("background", color);
    });

    // start open quizes
    $(".open_quizes").click(function () {
        $(".open_quizes_modal").click();
    });

    // start testimonial
    $(".owl-carousel").owlCarousel({
        slideSpeed: 10,
        autoplay: 10,
        loop: true,
        margin: 15,
        responsive: {
            0: { items: 2 },
            600: { items: 3 },
            1000: { items: 5 },
        },
        nav: true,
    });

    //   start video screen

    var $videoSrc;
    $(".video-btn").click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);

    // when the modal is opened autoplay it
    $("#myModal").on("shown.bs.modal", function (e) {
        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr(
            "src",
            $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
        );
    });

    $('.navbar-nav li .nav-link').click(function (e) {
        
        e.preventDefault();
        
        $('html , body').animate({
             
            scrollTop: $('#' + $(this).data('scroll')).offset().top
            
        }, 1000);
    });
    $('.up').click(function (e) {
        
        e.preventDefault();
        
        $('html , body').animate({
             
            scrollTop:0
            
        }, 1000);
    });
    $('.popup-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('#slides').slideshow({
        randomize: true,      // Randomize the play order of the slides.
        slideDuration: 6000,  // Duration of each induvidual slide.
        fadeDuration: 1000,    // Duration of the fading transition. Should be shorter than slideDuration.
        animate: true,        // Turn css animations on or off.
        pauseOnTabBlur: true, // Pause the slideshow when the tab is out of focus. This prevents glitches with setTimeout().
        enableLog: true      // Enable log messages to the console. Useful for debugging.
    });
    $('.mouse-scroll').on('click', function () {
        $('html , body').stop().animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top
        }, 1500);
        event.preventDefault();
    });
});
