import "jquery/dist/jquery.min";
import "popper.js/dist/umd/popper.min";
import "bootstrap/dist/js/bootstrap.min";
export default () => {
    console.log("global");
    let  body = document.body
    $(".humbuger-button").click(function () {
        $(body).toggleClass("show-menu")
    })
    $("nav").click(function (e) {
        if (e.$target === "nav") {
            $(body).classList.remove("show-menu")
        }
    })
}