$(function () {
    $('#scrollToBottom').bind("click", function () {
        $('.chat').animate({ scrollTop: $(document).height() + 500 }, 1500);
        return false;
    });
});