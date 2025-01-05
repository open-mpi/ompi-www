<?php
function print_link($name, $dir, $emit_ggroups=True) {
    global $topdir;
    global $is_mirror;

    print("<p>
<li><B>$name</B><BR>
     [ ");

    if (is_dir($dir) || is_link($dir)) {
        print("<a href=\"https://www.mail-archive.com/$dir@lists.open-mpi.org//\">Complete archives</a>");
        if ($emit_ggroups) {
            print(" | \n");
        }
    }

    if ($emit_ggroups) {
        print("<a href=\"https://groups.google.com/a/lists.open-mpi.org/g/$dir\">Subscribe, unsubscribe, or change options (Google Groups)</a>");
    }
    print(" ]\n");
}

function red($msg) {
    print("<strong><font color=red>$msg</font></strong>");
}

function print_list($name) {
    printf("<P><CENTER>\n");
    print_mailto("lists.open-mpi.org", $name, "$name@lists.open-mpi.org");
    printf("</center></p>\n\n");
}
