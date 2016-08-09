<?php
function print_link($name, $dir) {
    global $topdir;
    global $is_mirror;

    print("<p>
<li><B>$name</B><BR>
     [ ");
    if (is_dir($dir) || is_link($dir)) {
        print("<a href=\"$dir/\">Archives</a> | \n");
    }

    // Mailman is not mirrored, of course -- must link to the original page
    print("<a href=\"http://lists.open-mpi.org/mailman/listinfo/$dir\">Subscribe, unsubscribe, or change options</a> ]
");
}

function red($msg) {
    print("<strong><font color=red>$msg</font></strong>");
}

function print_list($name) {
    printf("<P><CENTER>\n");
    red("YOU MUST BE SUBSCRIBED IN ORDER TO POST TO THE LIST");
    printf("<br /\n>");
    print_mailto("lists.open-mpi.org", $name, "$name at lists dot open dash mpi dot org");
    printf("<br /\n>");
    red("YOU MUST BE SUBSCRIBED IN ORDER TO POST TO THE LIST");
    printf("</center></p>\n\n");
}
