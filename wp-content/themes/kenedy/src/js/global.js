import "jquery/dist/jquery.min";
import "popper.js/dist/umd/popper.min";
import "bootstrap/dist/js/bootstrap.min";
import "zurb-twentytwenty/js/jquery.event.move"
import "zurb-twentytwenty/js/jquery.twentytwenty"
import "@fancyapps/fancybox/dist/jquery.fancybox.min";

export default () => {
    console.log("global");
    let body = document.body
    $(".humbuger-button").click(function () {
        $(body).toggleClass("show-menu")
    })
    $("nav").click(function (e) {
        if (e.$target === "nav") {
            $(body).classList.remove("show-menu")
        }
    });
    $(".test").twentytwenty();
    $('[data-fancybox]').fancybox({
        youtube: {
            controls: 0,
            showinfo: 0
        },
        vimeo: {
            color: 'f00'
        }
    })
    // $(".button").click(function () {
    //     // $("test").toggleClass("xvideos")
    //     if($("#test1").hasClass("xvideos")){
    //         $("#test1").removeClass("xvideos")
    //     }else{
    //         $("#test1").addClass("xvideos")
    //     }
    //     console.log("jav")
    //
    // })
    $(".xvideos").hide();
    let tep = true
    $("#seemore-button").click(() => {
        // !$("#test1").show() ? $("#test1").show() : $("#test1").hide()
        // $("#test1").hide() ? $("#test1").show() : $("#test1").hide()
        if (tep){
            $(".xvideos").show();
            tep = false;
        } else {
            tep = true;
            $(".xvideos").hide();

        }
    })
}


