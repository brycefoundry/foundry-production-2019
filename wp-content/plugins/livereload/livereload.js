(function ($, window) {
    $(function () {
        var host = location.host.split(':')[0] || 'localhost',
            script = $('<script>'),
            protocol = window.location.protocol;
        script.attr('src', protocol + '//' + host + ':35729/livereload.js?snipver=1');
        $('body').append(script);
    });
}(jQuery, window));
