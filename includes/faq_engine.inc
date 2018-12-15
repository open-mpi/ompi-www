<?php

include_once("$topdir/includes/functions.inc");

include_once("$topdir/includes/mailto.inc");
include_once("$topdir/includes/code.inc");
include_once("$topdir/includes/geshi.php");

// Get a reasonable title before we include the header
$found_category = false;
$cat_number = 0;
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

    for ($cat_number = 0; $cat_number < sizeof($titles); ++$cat_number) {
        if ($category == $names[$cat_number]) {
            $found_category = true;
            $title = "$short_title:<br />\n$titles[$cat_number]";
            break;
        }
    }
    if (!$found_category) {
        $title = "$short_title:<br />\nUnknown category";
    }
}

// Setup geshi objects for pre-known parsing types
$geshi["bash"] = new GeSHi("", "bash");
$geshi["c"] = new GeSHi("", "c");
$geshi["make"] = new GeSHi("", "make");
$geshi["text"] = new GeSHi("", "text");
$geshi["diff"] = new GeSHi("", "diff");

// NOTE: Got the "2" index from looking at geshi/bash.php.
$geshi["bash"]->add_keyword(2, "mpicc");
$geshi["bash"]->add_keyword(2, "mpic++");
$geshi["bash"]->add_keyword(2, "mpicxx");
$geshi["bash"]->add_keyword(2, "mpiCC");
$geshi["bash"]->add_keyword(2, "mpifort");
$geshi["bash"]->add_keyword(2, "mpif77");
$geshi["bash"]->add_keyword(2, "mpif90");
$geshi["bash"]->add_keyword(2, "mpirun");
$geshi["bash"]->add_keyword(2, "mpiexec");
$geshi["bash"]->add_keyword(2, "ompi_info");

// Stole a bunch of this CSS from looking at the source of
// http://qbnz.com/highlighter/geshi-doc.html.  Adding it to $added_css
// causes header.inc to output it as part of the <style> ... </style>
// block in the <head> block.
$added_css = "pre, .geshicode {
    border: 1px solid #c0e6ff;
    background-color: #e0e0e0;
    color: #002;
    margin:0;
    font-size: 12px;
    width:100%;
}
.geshicode pre {
    border:none;
    background-color:#e0e0e0;
    font-weight:bold;
}
.geshicode .li2 td {
    background-color:#e0e0e0;
}
.geshicode .li1 td {
    background-color:#e0e0e0;
}
.geshicode td td {
    padding:0 2px;
}
.geshicode td, .geshicode table {
    width: 100%;
}
.geshicode td.ln {
    border-right:2px solid #e0e8ef;
}
.geshicode .head {
    text-align:center;
    font-weight:bold;
}
td.ln {
    background-color: #e0e0e0;
}
pre.de1 {
    background-color: #e0e0e0;
}
";

foreach ($geshi as $key => $value) {
    $value->enable_classes();
    $value->set_header_type(GESHI_HEADER_PRE_TABLE);
    $value->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);

    $added_css .= $value->get_stylesheet();
}

include_once("$topdir/includes/header.inc");

/////////////////////////////////////////////////////////////////////////
//
// Helper functions for FAQ entries
//
/////////////////////////////////////////////////////////////////////////

function faqlink($link, $text) {
  return "<a href=\"$link\">$text</a>";
}

$shell_font = "<font color=\"blue\">";
$shell = "shell$</font>";
$cmd_font = "<font color=\"red\">";

/////////////////////////////////////////////////////////////////////////
//
// Menu
//
/////////////////////////////////////////////////////////////////////////

function do_menu() {
    global $titles;
    global $names;
    global $parent_name;
    global $short_titles;
    $parent_printed = 0;

    print("FAQ categories:\n\n<ul>\n\n");
    for ($i = 0; $i < sizeof($titles); ++$i) {
        if ("" != $titles[$i]) {
            if ("" == $parent_name[$i]) {
                # this is either a parent, or a top level page
                for ($j = $i + 1; $j < sizeof($titles); ++$j) {
                    if ("" != $short_titles[$j]) {
                        if ($names[$i] == $parent_name[$j]) {
                            if (0 == $parent_printed) {
                                printf("<li><b>%s</b><ul>\n\n", $titles[$i]);
                                $parent_printed = 1;
                            }
                            printf("<li> <a href=\"./?category=%s\">%s</a></li>\n\n",
                                   urlencode($names[$j]), $titles[$j]);
                        } else {
                            break;
                        }
                    }
                }
                if (1 == $parent_printed) {
                    printf("</ul></li>");
                    $parent_printed = 0;
                    $i = $j;
                    if($j < sizeof($titles)) {
                        --$i;
                    }
                } else {
                    printf("<li> <a href=\"./?category=%s\">%s</a></li>\n\n",
                           urlencode($names[$i]), $titles[$i]);
                }
            } else {
                // this should never happen, but just in case...
                printf("<li> <a href=\"./?category=%s\">%s</a></li>\n\n",
                       urlencode($names[$i]), $titles[$i]);
            }
        }
    }
    print("\n</ul>\n\n");
}

/////////////////////////////////////////////////////////////////////////
//
// Print the questions in a category
//
/////////////////////////////////////////////////////////////////////////

function do_category() {
    global $topdir;
    global $titles;
    global $names;
    global $found_category;
    global $cat_number;
    global $title;
    global $geshi;

    // make the javascript print -- we use the contact() javascript
    // function in one of the answers above, so we need the javascript
    // to print before we print the answer
    print_mailto("example.com", "bogus", "");

    include_once($names[$cat_number] . ".inc");
    ompi_set_included($names[$cat_number] . ".inc");

    print("<p>Table of contents:</p>\n");

    print("<p>\n<ol>\n");
    for ($i = 0; $i < sizeof($a); ++$i) {
        print("<li><a href=\"#" . urlencode($anchor[$i]) . "\">$q[$i]</a>\n");
    }
    print("</ol>\n</p>\n\n");

    for ($i = 0; $i < sizeof($a); ++$i) {
        $j = $i + 1;
        print("<!--------------------------------------- -->
<a name=\"" . urlencode($anchor[$i]) . "\"></a>\n");
        # Some anchors have special characters in them (e.g., "+")
        # which urlencode will transmorgify.  In this case, output
        # both the url-encoded version and the non-encoded version
        # (because the non-encoded version is easier for humans to
        # type).
        if (urlencode($anchor[$i]) != $anchor[$i]) {
            print("<a name=\"$anchor[$i]\">\n");
        }
        print("<p><hr></p>

<table width=100% cellpadding=5 border=0>\n<tr><td class=\"faq_question\">$j. $q[$i]</td></tr>\n</table>\n</p>

<p>");

        $str = $a[$i];
        do {
            if (preg_match("@(.*?)<geshi\s+(.+?)>(\n)?(.+?)(\n)?</geshi>(.*)$@ms", $str, $matches)) {
                reg_display($matches[1]);

                // Render the geshi code.  Use one of our
                // pre-created geshi objects, if possible.
                if (array_key_exists($matches[2], $geshi)) {
                    $g = $geshi[$matches[2]];
                    $g->set_source($matches[4]);
                } else {
                    $g = new GeSHi($matches[4], $matches[2]);
                }
                $rendered = $g->parse_code();
                $rendered = preg_replace("/\*\*\*\*(.+?)\*\*\*\*/", "$1", $rendered);
                print("<div class=\"geshicode\">$rendered</div>");

                $str = $matches[6];
            } else {
                reg_display($str);
                break;
            }
        } while ($str != "");

        print("</p>\n\n");
    }
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
    print($str);
}

/////////////////////////////////////////////////////////////////////////
//
// Main
//
/////////////////////////////////////////////////////////////////////////

if (!isset($_REQUEST["category"])) {
    do_menu();
} else {
    if (!$found_category) {
        print("<p>Unknown FAQ category.</p>\n\n<a href=\"./\">Return to the FAQ index.</a>\n\n");
        return;
    }
    do_category();
}
