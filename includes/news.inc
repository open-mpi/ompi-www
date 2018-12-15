<?php
function news($title, $body, $link = "", $a_modifier = "") {
    startnews($title);
    print("$body");
    if ($link) {
        print("<br /><br />\n\n&gt; <a href=\"$link\"");
      	if ($a_modifier != "") {
      	    print(" $a_modifier");
      	}
      	print(">Read more</a>\n");
    }
    endnews();
    skipnews("2");
}

function startnews($title) {
    global $topdir;
    print("<table width=100% border=\"1\" cellspacing=\"0\" cellpadding=\"5\" bordercolor=\"#EEEEEE\" bordercolorlight=\"#FFFFFF\" bordercolordark=\"#CCCCCC\"><tr><td><span class=\"newstitle\">$title</span>");
    print("<br /><img src=\"$topdir/images/pixel.gif\" width=\"1\" height=\"5\" border=\"0\" /><br />");
}

function endnews() {
    print("</td></tr></table>\n");
}

function skipnews($amt) {
    global $topdir;
    print("<img src=\"$topdir/images/pixel.gif\" width=\"1\" height=\"$amt\" border=\"0\" />");
}
