import "jquery/dist/jquery.min";
import "popper.js/dist/umd/popper.min";
import "bootstrap/dist/js/bootstrap.min";
import "zurb-twentytwenty/js/jquery.event.move"
import "zurb-twentytwenty/js/jquery.twentytwenty"
<<<<<<< HEAD

=======
>>>>>>> 6c9e997803a7fedd657f047a980ac02eda7b879b
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
<<<<<<< HEAD
    });
    $(".test").twentytwenty();
=======
    })

        $(".test").twentytwenty();

>>>>>>> 6c9e997803a7fedd657f047a980ac02eda7b879b
}