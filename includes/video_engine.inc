<?php

include_once("$topdir/includes/functions.inc");

include_once("$topdir/includes/mailto.inc");
include_once("$topdir/includes/code.inc");
include_once("$topdir/includes/downloads.inc");

// Turn off error reporting (stat errors are ugly)
error_reporting(0);

$quicktime = "<a href=\"http://www.apple.com/quicktime/\">Quicktime</a> necessary to view this movie.";

// Get a reasonable title before we include the header
$found_category = false;
$found_watch = false;
$cat_number = 0;
$anchor_number = 0;
if (isset($_REQUEST["category"])) {
    $category = urldecode($_REQUEST["category"]);

    // If this is a synonym category, redirect to the base category
    if (isset($synonyms) && array_key_exists($category, $synonyms)) {
        $new_url = str_replace("?category=$category",
                               "?category=" . $synonyms[$category],
                               $_SERVER["REQUEST_URI"]);
        header("Location: $new_url");
        exit(0);
    }

    for ($cat_number = 0; $cat_number < sizeof($cat_titles); ++$cat_number) {
        if ($category == $cat_names[$cat_number]) {
            $found_category = true;
            $title = "$short_title:<br />\n$cat_titles[$cat_number]";

            include_once($cat_names[$cat_number] . ".inc");
            ompi_set_included($cat_names[$cat_number] . ".inc");

            # Found the category; now look for a valid anchor to watch
            if (isset($_REQUEST["watch"])) {
                $watch = urldecode($_REQUEST["watch"]);
                for ($i = 0; $i < sizeof($anchors); ++$i) {
                    if ($anchors[$i] == $watch) {
                        $found_watch = true;
                        $anchor_number = $i;
                        $title = "$short_title:<br />\n$titles[$i]";
                        break;
                    }
                }
                if (!$found_watch) {
                    header("Location: ./?category=$cat_names[$cat_number]");
                    exit(0);
                }
            }
            break;
        }
    }
    if (!$found_category) {
        $title = "$short_title:<br />\nUnknown category";
    }
}
include_once("$topdir/includes/header.inc");

/////////////////////////////////////////////////////////////////////////
//
// Menu
//
/////////////////////////////////////////////////////////////////////////

function do_menu() {
    global $cat_titles;
    global $cat_names;
    global $cat_parent_name;
    global $cat_short_titles;
    $parent_printed = 0;

    print("Video categories:\n\n<ul>\n\n");
    for ($i = 0; $i < sizeof($cat_titles); ++$i) {
        if ("" != $cat_titles[$i]) {
            if("" == $cat_parent_name[$i]) {
                # this is either a parent, or a top level page
                for($j = $i + 1; $j < sizeof($cat_titles); ++$j) {
                    if("" != $cat_short_titles[$j]) {
                        if($cat_names[$i] == $cat_parent_name[$j]) {
                            if(0 == $parent_printed) {
                                printf("<li><b>%s</b><ul>\n\n", $cat_titles[$i]);
                                $parent_printed = 1;
                            }
                            printf("<li> <a href=\"./?category=%s\">%s</a></li>\n\n",
                                   urlencode($cat_names[$j]), $cat_titles[$j]);
                        } else {
                            break;
                        }
                    }
                }
                if(1 == $parent_printed) {
                    printf("</ul></li>");
                    $parent_printed = 0;
                    $i = $j;
                    if($j < sizeof($cat_titles)) {
                        --$i;
                    }
                } else {
                    printf("<li> <a href=\"./?category=%s\">%s</a></li>\n\n",
                           urlencode($cat_names[$i]), $cat_titles[$i]);
                }
            } else {
                // this should never happen, but just in case...
                printf("<li> <a href=\"./?category=%s\">%s</a></li>\n\n",
                       urlencode($cat_names[$i]), $cat_titles[$i]);
            }   
        }
    }
    print("\n</ul>\n\n");
}

/////////////////////////////////////////////////////////////////////////
//
// Print the videos in a category
//
/////////////////////////////////////////////////////////////////////////

function do_category() {
    global $topdir;
    global $cat_titles;
    global $cat_names;
    global $found_category;
    global $cat_number;
    global $title;
    global $cat_titles;
    global $titles;
    global $anchors;

    // make the javascript print -- we use the contact() javascript
    // function in one of the answers above, so we need the javascript
    // to print before we print the answer
    print_mailto("example.com", "bogus", "");

    print("<p>Table of contents:</p>\n");
    
    print("<p>\n<ol>\n");
    for ($i = 0; $i < sizeof($titles); ++$i) {
        print("<li><a href=\"#$anchors[$i]\">$titles[$i]</a>\n");
    }
    print("</ol>\n</p>\n\n");
    
    for ($i = 0; $i < sizeof($titles); ++$i) {
        $j = $i + 1;
        print("<!--------------------------------------- -->
<a name=\"" . urlencode($anchors[$i]) . "\">
<p><hr></p>

<table width=100% cellpadding=5 border=0>\n<tr><td class=\"faq_question\">$j. $titles[$i]</td></tr>\n</table>\n</p>

<p>");
        //print_video_info(true, $titles[$i], $cat_names[$cat_number], $anchors[$i]);
        print_youtube_info(true, $titles[$i], $cat_names[$cat_number], $anchors[$i]);
    }
}

function print_youtube_info($show_full, $title, $category, $anchor) {
    global $youtubes;
    global $durations;
    global $extras;
    global $summaries;
    global $video_heights;
    global $video_widths;

    print("<table border=1 cellpadding=3>\n");
    if (array_key_exists($anchor, $durations)) {
        row("Video duration", $durations[$anchor]);
    }
    if (array_key_exists($anchor, $extras)) {
        $value = "";
        foreach ($extras[$anchor] as $file) {
            if ("" != $value) {
                $value .= ", ";
            }
            $s2 = stat("$category/$file");
            $value .= "<a href=\"$category/$file\">" .
                "$file</a> (" . prettyprint_filesize($s2[size]) . ")";
        }
        row("Resources", $value);
    }

    $str = $summaries[$anchor];
    $newstr = "";
    do {
        // See if we have any <faqcode> blocks
        $begin = strpos($str, "<faqcode>");
        $end = strpos($str, "</faqcode>");
        if ($begin !== false && $end !== false) {
            if ($begin > 0) {
                $temp = substr($str, 0, $begin);
                $newstr = reg_display($temp);
            }
            $newstr .= str_code(substr($str, $begin + 9, $end - $begin + 1 - 10));
            $str = substr($str, $end + 10);
        } else {
            $newstr = reg_display($str);
            break;
        }
    } while ($str != "");
    row("Description", $newstr);
    print("</table>\n\n<br />\n");

    $width = 640;
    if (array_key_exists($anchor, $video_widths)) {
        $width = $video_widths[$anchor];
    }
    $height = 480;
    if (array_key_exists($anchor, $video_heights)) {
        $height = $video_heights[$anchor];
    }
    print("<div align=\"center\"><iframe width=\"$width\" height=\"$height\" src=\"//www.youtube-nocookie.com/embed/" . $youtubes[$anchor] . "\" frameborder=\"0\" allowfullscreen></iframe></div>\n");
    print("</p>\n\n");
}
    
function row($title, $value) {
    print("<tr>
<td valign=top align=right><strong>$title</strong></td>
<td valign=top align=left>$value</td>
</tr>\n");
}

function reg_display($str) {
    // Pick up changes at the beginning of the string
    $str = preg_replace("/^\*([^~]+?)\*([- \t\n,\.:;\(\)])/", 
                        "<strong>\\1</strong>\\2", $str);
    $str = preg_replace("/^_([^~]+?)_([- \t\n,\.:;\(\)])/", 
                        "<em>\\1</em>\\2", $str);
    $str = preg_replace("/^\[([^~]+?)\]([- \t\n,\.:;\(\)\'])/", 
                        "<code>\\1</code>\\2", $str);
    
    // Pick up changes in the middle of the string
    $str = preg_replace("/([ \t\n\"])\*([^~]+?)\*([- \"\t\n,\.:;\(\)])/", 
                        "\\1<strong>\\2</strong>\\3", $str);
    $str = preg_replace("/([ \t\n\"])_([^~]+?)_([- \"\t\n,\.:;\(\)])/", 
                        "\\1<em>\\2</em>\\3", $str);
    $str = preg_replace("/([ \t\n\"])\[([^~]+?)\]([- \"\t\n,\.:;\(\)\'])/", 
                        "\\1<code>\\2</code>\\3", $str);

    // Trac-like notation
    $str = preg_replace("/''(.+?)''/", 
                        "<em>\\1</em>", $str);
    $str = preg_replace("/'''(.+?)'''/", 
                        "<strong>\\1</strong>", $str);
    $str = preg_replace("/{{{(.+?)}}}/", 
                        "<code>\\1</code>", $str);
    
    // Add in <p>'s
    $str = preg_replace("/\n\n([^\n])/", "\n\n<p>\\1", $str);

    return $str;
}

/////////////////////////////////////////////////////////////////////////
//
// Main
//
/////////////////////////////////////////////////////////////////////////

if (!isset($_REQUEST["category"])) {
    do_menu();
} else if (!$found_category) {
    print("<p>Unknown video category.</p>\n\n<a href=\"./\">Return to the video index.</a>\n\n");
} else {
    do_category();
}
