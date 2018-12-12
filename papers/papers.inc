<?php // -*- php -*-

include_once("$topdir/includes/functions.inc");

if (is_file("data.inc")) {
    ompi_set_included("data.inc");
}

function paper_page($title, $authors, $presented, $abstract, $files, $mon, $day, $year, $bibtex = "") {
    print("\n\n<h3>Title: $title");
    date_default_timezone_set('UTC');
    $appearing = mktime(0, 0, 0, $mon, $day, $year);
    if (time() < $appearing) {
        print(" (<em>to appear</em>)");
    }
    print("</h3>\n\n");
    if ($authors != "") {
        print("<h3>Author(s):</h3> $authors\n\n");
    }
    print("<h3>Abstract:</h3>

<p>$abstract</p>\n\n");

    if (time() < $appearing) {
        if ($presented != "") {
            print("<p><em>To be presented: $presented</em></p>\n\n");
        }
    } else {
        if ($presented != "") {
            print("<p><em>Presented: $presented</em></p>\n\n");
        }
        if (count($files) > 0) {
            printf("<P><h3>Paper:</h3><table cellpadding=5><tr>\n");
            for ($i = 0; $i < count($files); ++$i) {
                if (preg_match("/\..+$/", $files[$i], $match)) {
                    if ($match[0] == ".ps" || $match[0] == ".PS") {
                        $name = "Postscript";
                    } else if ($match[0] == ".pdf" || $match[0] == ".PDF") {
                        $name = "PDF";
                    } else if ($match[0] == ".doc" || $match[0] == ".DOC") {
                        $name = "Microsoft Word";
                    } else if ($match[0] == ".ppt" || $match[0] == ".PPT" || $match[0] == ".pptx" || $match[0] == ".PPTX") {
                        $name = "Microsoft Powerpoint";
                    } else {
                        $name = $files[$i];
                    }
                } else {
                    $name = $files[$i];
                }
                print("<td><a href=\"$files[$i]\">$files[$i] ($name)</a></td>\n");
            }
            printf("</tr>\n</table>\n</p>\n\n");
        }
    }
    if (!empty($bibtex)) {
        print("<h3>Bibtex reference:</h3>\n");
        print("<div style=\"width:750px;overflow:auto\">\n");
        print("<pre> $bibtex </pre>\n");
        print("</div>\n\n");
    }
}

function print_paper($link, $title, $description, $mon, $day, $year) {
    print("  <P>
<LI> <A HREF=\"$link\"$>$title</A>");
    $appearing = mktime(0, 0, 0, $mon, $day, $year);
    if (time() < $appearing) {
        print(" (<em>to appear</em>)");
    }
    
    print("<br>\n\n$description</P></LI>\n</P>\n\n");
}

function print_papers($dirs) {
    foreach ($dirs as $dir) {
        global $topdir;
        include_once("$dir/data.inc");
        ompi_set_included("$dir/data.inc");
        print_paper("$dir", $title, $overview, 
                    $month, $day, $year);
    }
}

