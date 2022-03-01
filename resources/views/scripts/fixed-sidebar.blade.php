<script>
var wrapper = $("#__wrapper");
var sidebar = $("#sidebar");

console.log(wrapper.height())

$(function () {
    $(document).scroll(function () {
        if ($(this).scrollTop() > wrapper.height() + 400) {
            sidebar.addClass("position-relative").removeClass("category-bar");
        } else if ($(this).scrollTop() > sidebar.height() + 200) {
            sidebar.addClass("category-bar").removeClass("position-relative");
        } else {
            sidebar.addClass("position-relative").removeClass("category-bar");
        }
    });
});
</script>