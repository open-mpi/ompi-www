<script >
window.onload = function() {
    var a = document.getElementsByTagName('a');
    for (i = 0; i < a.length; i++) {
        if (a[i].hostname === location.hostname) {
            if (a[i].href.match(/^https?:\/\/.+\.(zip|dmg|txt|cfg|gz|pl|pdf)$/i)) {
                a[i].setAttribute('target', '_blank');
                a[i].onclick = function() {
                    ga('send', 'event', 'Downloads', 'Click', this.getAttribute('href'));
                };
            }
        }
    }
}
</script>
