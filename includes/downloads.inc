<?php

// Turn off error reporting (stat errors are ugly)
error_reporting(0);

$download_base = "$topdir/download";

function prettyprint_filesize($s) {
    if ($s > 1048576) {
        $s = ((int) (($s / 1048576) * 100)) / 100 . "MB";
    } else {
        $s = (int) ($s / 1024) . "KB";
    }
    return $s;
}

//
// Utility function to read in a file of checksums (i.e., the output
// of md5sum or sha1sum)
//
function read_checksums($file) {
    if (file_exists($file) && is_readable($file)) {
        // Read the file
        $f = fopen($file, "r");
        $str = fread($f, filesize($file));
        fclose($f);

        // Split it into an array
        $a = preg_split("/\n/", $str);
        foreach ($a as $line) {
            $both = preg_split("/[ \t]+/", $line);
            $files[$both[1]] = $both[0];
        }

        return $files;
    }
}


//
// Class for holding both headers and file info
//
class downloadFileInfo {
    var $section, $filename, $base_url, $size, $mdsum, $shasum;
    var $link, $a_modifier;
    var $headerText;

    //
    // Set the file info
    //
    function setFile($section, $filename, $base_url, $download_dir,
                     $mdsum = "", $shasum = "") {

        // Save almost everything
        $this->section = $section;
        $this->filename = $filename;
        $this->mdsum = $mdsum;
        $this->shasum = $shasum;
        $this->link = "";
        $this->base_url = $base_url;
        $this->a_modifier = "";

        // Compute a print-friendly size
        $file = $download_dir . "/" . $filename;
        $st = stat($file);
        $this->size = prettyprint_filesize($st[size]);
        $this->mtime = date("M j, Y", $st[mtime]);
    }

    function setLink($section, $filename, $date, $link, $a_modifier) {

        // Save almost everything
        $this->section = $section;
        $this->filename = $filename;
        $this->base_url = $base_url;
        $this->mdsum = "";
        $this->shasum = "";
        $this->link = $link;
        $this->size = "";
        $this->mtime = $date;
    $this->a_modifier = $a_modifier;
    }

    //
    // Output this instance
    //
    function printMe($rowspan, $download_url) {
        print("<TR>\n");
        if ($rowspan > 0)
            print("<TD ROWSPAN=$rowspan>$this->section</TD>\n");

        // Is it a link or a file?
        if (!empty($this->link)) {
            print("<TD><A HREF=\"$this->link\"");
        if (!empty($this->a_modifier)) {
        print(" $this->a_modifier");
        }
        print("$this->filename</A></TD>
<TD>&nbsp;</TD>
<TD>$this->mtime</TD>
<TD ALIGN=CENTER>(external link)</TD>
</TR>\n");
        } else {
            if (!empty($this->mdsum)) {
        print("<TD><A HREF=\"$download_url/$this->filename\"");
        if (!empty($this->a_modifier)) {
            print(" $this->a_modifier");
        }
        print(">$this->filename</A></TD>\n");
            } else {
                print("<TD>$this->filename</TD>\n");
            }
            print("<TD ALIGN=RIGHT>$this->size</TD>\n");
            print("<TD ALIGN=RIGHT>$this->mtime</TD>\n");

            print("<TD><TABLE BORDER=0>\n");
            if ($this->mdsum) {
                print("<TR>\n<TD ALIGN=RIGHT>MD5:</TD>\n<TD>$this->mdsum</TD></TR>");
            }
            if ($this->shasum) {
                print("<TR>\n<TD ALIGN=RIGHT>SHA1:</TD>\n<TD>$this->shasum</TD></TR>");
            }
            print("</TABLE></TD></TR>\n\n");
        }
    }
}

//
// Base class to hold info for download files
//
class downloadTable {
    var $files;
    var $download_url, $download_dir;
    var $title;

    //
    // Constructor
    //
    function downloadTable($download_url, $download_dir, $base_url) {
        global $download_base;

        $this->download_url = $download_url;
        $this->download_dir = $download_dir;
        $this->base_url = $base_url;
        $this->title = "";
    }

    //
    // Add a heading to the table
    //
    function setHeader($title) {
        $this->title= $title;
    }

    //
    // Add a file to the table
    //
    function addFile($section, $file, $mdsum = "", $shasum = "") {
        $foo = new downloadFileInfo;
        $foo->setFile($section, $file, $this->base_url, $this->download_url, $mdsum, $shasum);
        $this->files[] = $foo;
    }

    //
    // Add an external link to the table
    //
    function addLink($section, $text, $date, $link, $a_modifier = "") {
        $foo = new downloadFileInfo;
        if (empty($a_modifier)) {
            $a_modifier = "<a href=\"$link\">";
        }
        $foo->setLink($section, $text, $date, $link, $a_modifier);
        $this->files[] = $foo;
    }

    //
    // Function to cache / print out an entry in the table
    //
    function printMe() {
        $next_section = 0;

        if (sizeof($this->files) == 0) {
            return;
        }

        print("<TABLE BORDER=1 CELLPADDING=5>\n");
        if ($this->title) {
            print("<TR>\n<TH COLSPAN=4>". $this->title . "</TH>\n</TR>\n\n");
        }
        print("<TR>
<TH>Contents</TH>
<TH>File names</TH>
<TH>Size</TH>
<TH>Date</TH>
<TH>Checksums (GNU md5sum and sha1sum v5.2.1)</TH>
</TR>\n\n");

        $next_section = 0;
        for ($i = 0; $i < sizeof($this->files); $i++) {
            $f = $this->files[$i];
            if ($next_section == $i) {
                $s = $f->section;
                for ($next_section = $j = $i + 1; $j < sizeof($this->files);
                     $next_section++, $j++) {
                    $f2 = $this->files[$j];
                    if ($f2->section != $s) {
                        break;
                    }
                }

                $rowspan = $next_section - $i;
            } else {
                $rowspan = 0;
            }
            $f->printMe($rowspan, $this->download_url);
        }
        print("</TABLE>\n\n");
    }
}
