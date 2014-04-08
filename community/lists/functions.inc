<?php
function print_link($name, $dir) {
    global $topdir;
    global $is_mirror;

    print("<p>
<li><B>$name</B><BR>
     [ ");
    if (is_dir($dir) || is_link($dir)) {
        if ($is_mirror) {
            // If this is a mirror, redirect them to the main web site
            // for the archives.  We do not mirror the mail archives
            // because a) they're not in SVN and it would be a real
            // pain to have a secondary method of mirroring outside of
            // SVN, and b) if someone web searches for something, we
            // only want the mail archives to show up once, rather
            // than a single message showing up N times (i.e., once on
            // each mirror).

            print("<a href=\"http://www.open-mpi.org/community/lists/$dir/\">Archives</a> | \n");
        } else {
            print("<a href=\"$dir/\">Archives</a> | \n");
        }
    }

    // Mailman is not mirrored, of course -- must link to the original page
    print("<a href=\"http://www.open-mpi.org/mailman/listinfo.cgi/$dir\">Subscribe, unsubscribe, or change options</a> ]
");
}

function red($msg) {
    print("<strong><font color=red>$msg</font></strong>");
}

function print_list($name) {
    printf("<P><CENTER>\n");
    red("YOU MUST BE SUBSCRIBED IN ORDER TO POST TO THE LIST"); 
    printf("<br /\n>");
    print_mailto("open-mpi.org", $name, "$name at open dash mpi dot org");
    printf("<br /\n>");
    red("YOU MUST BE SUBSCRIBED IN ORDER TO POST TO THE LIST"); 
    printf("</center></p>\n\n");
}
