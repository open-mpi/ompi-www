<?php

include_once("$topdir/includes/functions.inc");

include_once("$topdir/includes/mailto.inc");
include_once("$topdir/includes/code.inc");

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

function faqcode($cmd, $output = "", $want_empty_prompt_at_end = 0) {
  $s = gettype($cmd);
  if ($s == "string") {
    return faqcode_string($cmd, $output, $want_empty_prompt_at_end);
  } else if ($s == "array") {
    return faqcode_array($cmd, $output, $want_empty_prompt_at_end);
  } else {
    return "<FONT COLOR=\"RED\">UNKNOWN FAQCODE</FONT>";
  }
}

function faqcode_string($cmd, $output, $want_empty_prompt_at_end) {
  global $shell_font;
  global $shell;
  global $cmd_font;

  $str = "<faqcode>$shell_font$shell $cmd_font$cmd</font>\n";
  if (strlen($output) > 0) {
    $str .= $output;
  }
  if ($want_empty_prompt_at_end) {
    $str .= $shell;
  }
  $str .= "</faqcode>";
  return $str;
}

function faqcode_array($cmds, $outputs, $want_empty_prompt_at_end) {
  global $shell_font;
  global $shell;
  global $cmd_font;

  $str = "<faqcode>\n";
  for ($i = 0; $i < sizeof($cmds); ++$i) {
    $str .= "$shell_font$shell $cmd_font$cmds[$i]</font>\n";
    if (array_key_exists($i, $outputs) && strlen($outputs[$i]) > 0) {
      $str .= $outputs[$i] . "\n";
    }
  }
  if ($want_empty_prompt_at_end) {
    $str .= $shell;
  }
  $str .= "</faqcode>";
  return $str;
}

class faqcode_val {
  public $shell_prefix;
  public $cmd;
  public $output;
  function faqcode_val($c, $o = "", $s = "") {
    $this->shell_prefix = $s;
    $this->cmd = $c;
    $this->output = $o;
  }
};

function faqcode_object($out, $want_empty_prompt_at_end = 0) {
  global $shell_font;
  global $shell;
  global $cmd_font;

  $str = "<faqcode>\n";
  foreach ($out as $val) {
    $str .= $shell_font;
    if (strlen($val->shell_prefix) > 0) {
      $str .= $val->shell_prefix . " ";
    }
    $str .= "$shell $cmd_font" . $val->cmd . "</font>\n";
    if (strlen($val->output) > 0) {
      $str .= $val->output . "\n";
    }
  }
  if ($want_empty_prompt_at_end) {
    $str .= $shell;
  }
  $str .= "</faqcode>";
  return $str;
}

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
            if("" == $parent_name[$i]) {
                # this is either a parent, or a top level page
                for($j = $i + 1; $j < sizeof($titles); ++$j) {
                    if("" != $short_titles[$j]) {
                        if($names[$i] == $parent_name[$j]) {
                            if(0 == $parent_printed) {
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
                if(1 == $parent_printed) {
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
<a name=\"" . urlencode($anchor[$i]) . "\">\n");
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
            // See if we have any <faqcode> blocks
            $begin = strpos($str, "<faqcode>");
            $end = strpos($str, "</faqcode>");
            if ($begin !== false && $end !== false) {
                if ($begin > 0) {
                    $temp = substr($str, 0, $begin);
                    reg_display($temp);
                }
                print_code(substr($str, $begin + 9, $end - $begin + 1 - 10));
                $str = substr($str, $end + 10);
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
