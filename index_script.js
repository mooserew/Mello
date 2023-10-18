$(document).ready(function () {
    $('.rounded-rectangle textarea').on('input', function () {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight - 20) + 'px';
    });
});


