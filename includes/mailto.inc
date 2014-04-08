<?php

$have_printed_mailto_jscript = 0;

function print_mailto_jscript() {
?>
<script language="JavaScript" type="text/JavaScript">
<!--
function contact(host, user, fullname) {
    var atchar = '@';
    var thingy = user+atchar+host;

    document.write('<a hre' + 'f=' + "mai" + "lto:" + thingy + ' onClick="_gaq.push([\"_trackEvent\", \"Mails\", \"Click\", "' + thingy + '\"])">' + fullname + '</a>');
}
//-->
</script>
<?php
}

function print_mailto($host, $user, $fullname) {
    global $have_printed_mailto_jscript;
    if (!$have_printed_mailto_jscript) {
        print_mailto_jscript();
        $have_printed_mailto_jscript = 1;
    }
    print("<script language=\"javascript\">contact(\"$host\", \"$user\", \"$fullname\");</script>");
}
