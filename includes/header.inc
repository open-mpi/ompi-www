<?php

$mother_site = "www.open-mpi.org";
$server_dir = "/";
$is_mirror = false;
$download_url = "$topdir/download/files";
if (!isset($topurl) || $topurl == "") {
     $topurl = $topdir;
}
if (!isset($logo)) {
    $logo = "images/open-mpi-logo.png";
}
if (!isset($logo_url)) {
    $logo_url = $topurl;
}
if (!isset($project)) {
    $project = "Open MPI";
}

// For debugging
$table_border = 0;

function left_width_1() {
  print("width=\"10%\"");
}
function left_width_2() {
  print("width=\"10%\"");
}
function right_width_1() {
  print("width=\"90%\"");
}
function right_width_2() {
  print("width=\"90%\"");
}
function right_width_3() {
  print("width=\"90%\"");
}

//
// Are we the "mother site" or a mirror?
//
if ($_SERVER["SERVER_NAME"] == $mother_site) {
    $is_mirror = false;
} else {
    $is_mirror = true;
}

//
// Function to deny mirrors a page
//
function deny_mirror() {
    global $server_dir;

    if ($is_mirror) {
        $equiv_dir = preg_replace("/^$server_dir/", '',
            $_SERVER["REQUEST_URI"]);
        print("Sorry, this page is not mirrored.  Please see the <A HREF=\"https://www.open-mpi.org/$equiv_dir\">original version of this page</A> on the main Open MPI web site.\n");
        include_once("$topdir/includes/footer.inc");
        exit();
    }
}

include_once("$topdir/includes/force-server.inc");
include_once("$topdir/includes/http_header.inc");
include_once("$topdir/includes/nav-search.inc");
include_once("$topdir/includes/mailto.inc");
print_mailto_jscript();
if (isset($header_include_file)) {
    include_once("$header_include_file");
} else {
    print("<bogus not_found=1 />\n");
}

function printtoplink($link, $text, $class) {
    print("              <TR>\n");
    print("                 <TD class=\"navbartop");
    if ($class != "")
        print("$class");
    print("\">\n");
    print("                  $text\n");
    print("                 </TD>\n");

    print("              </TR>\n");
}

function printbutton($text) {
  global $topdir;
  print("<tr><td class=\"buttonbox\">&nbsp;$text</td></tr>\n\n");
}

function printsublink($link, $text, $a_modifier = "") {
    global $this_dir;
    global $this_absdir;
    global $this_nav;
    global $topdir;
    global $download_url;

    print("              <TR>\n");
    print("                <TD class=\"navbarsub\">\n");
    print("                  &nbsp;&nbsp;<A HREF=\"$link\" CLASS=\"navbarsub\" $a_modifier>$text</A>\n");
    print("                </TD>\n");
    print("              </TR>\n");

    $b = basename($link);
    if ((isset($this_dir) && $b == $this_dir) ||
        (isset($this_absdir) &&
         ($link == "$topdir$this_absdir" || $link == "$topdir$this_absdir/"))) {
        for ($i = 0; $i < sizeof($this_nav); $i++) {
            print("              <TR>\n");
            #if there is no link, make the font different so it stands out as such
            if("" == $this_nav[$i]->link) {
                print("                <TD class=\"navbarsub2b\">\n");
                print("                  &nbsp;&nbsp;&nbsp;&nbsp;" . $this_nav[$i]->name ."\n");
            } else {
                print("                <TD class=\"navbarsub2\">\n");
                print("                  &nbsp;&nbsp;&nbsp;&nbsp;" .
                      "<A HREF=\"" . $this_nav[$i]->link . "\" CLASS=\"navbarsub2\">" .
                      $this_nav[$i]->name . "</A>\n");
            }
            print("                </TD>\n");
            print("              </TR>\n");
            for($j = 0; $j < sizeof($this_nav[$i]->children); $j++) {
                print("              <TR>\n");
                print("                <TD class=\"navbarsub3\">\n");
                print("                  &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;" .
                      "<A HREF=\"" . $this_nav[$i]->children[$j]->link . "\" CLASS=\"navbarsub3\">" .
                      $this_nav[$i]->children[$j]->name . "</A>\n");
                print("                </TD>\n");
                print("              </TR>\n");
            }

    }
  }
}

print("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js\"></script>\n");
include_once("$topdir/includes/google-analytics.php");

print("</HEAD>\n<BODY>\n");
?>
<A NAME="top"></A>

<!-- START MAIN TABLE -->
<TABLE WIDTH="98%" BORDER="<?php print($table_border); ?>" CELLSPACING="0" CELLPADDING="0">
<COLGROUP>
  <COL width="10%">
  <COL>

  <!-- Title area -->
  <TR>
    <TD class="logobox" VALIGN="center" ALIGN="center" ROWSPAN="2" <?php left_width_1(); ?>>
      <A HREF="<?php print("$logo_url");?>/"><?php
$size = GetImageSize("$topdir/$logo");
print("<IMG SRC=\"$topurl/$logo\" " . $size[3] .
      " ALT=\"$project logo\" BORDER=\"0\">");
?></A>
    </TD>
    <TD VALIGN="center" <?php right_width_1(); ?> >
<?php
if (!isset($title) || $title == "") {
  $title = $project;
}
print("      <H1 CLASS=\"doctitle\">$title</H1>\n");

?>
    </TD>
  </TR>

  <!-- Quick bar -->
  <TR>
    <!-- one TD taken by logo -->
    <TD HEIGHT="1" VALIGN="BOTTOM" <?php right_width_2(); ?> >
    <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLSPACING="0" CELLPADDING="0">
    <TR>

    <TD class="quickbar"  VALIGN="top" ALIGN="left" height=16 width="1">
     <IMG SRC="<?php print("$topurl");?>/images/left-e0-2.gif">
    </TD>

    <TD>
    <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLSPACING="0" CELLPADDING="5">
      <TR>
        <?php nav_search_start(); ?>
        <TD class="quickbar" VALIGN="center" ALIGN="right">
	<span class="divider">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
	<A HREF="<?php print("$topurl"); ?>/" CLASS="quickbar">Home</A>
	<span class="divider">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
	<A HREF="<?php print("$topurl"); ?>/community/help/" CLASS="quickbar"><font color=red>Support</font></A>
	<span class="divider">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
	<A HREF="<?php print("$topurl"); ?>/faq/" CLASS="quickbar">FAQ</A>
	<span class="divider">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
	<?php nav_search_make(); ?>
       </TD>
       <?php nav_search_end(); ?>
      </TR>
    </TABLE>
    </TD>

    <TD class="quickbar"  VALIGN="top" ALIGN="right" height=16 width="1">
     <IMG SRC="<?php print("$topurl");?>/images/right-e0-2.gif">
    </TD>

    </TR>
    </TABLE>
    </TD>
  </TR>

  <!-- Main row -->
  <TR>
    <!-- Navigation bar -->
    <TD VALIGN="top" CLASS="navbarbox" <?php left_width_2(); ?>>
      <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLPADDING="1" CELLSPACING="0">
        <TR>
          <TD CLASS="navbarbox">
            <TABLE WIDTH="168px" BORDER="<?php print($table_border); ?>" CELLPADDING="1" CELLSPACING="1">

<?php

// About
printbutton("About");
printsublink("$topurl/papers/", "Publications");
printsublink("$topurl/about/members/", "Open MPI Team");
printsublink("$topurl/faq/", "FAQ");
printsublink("$topurl/video/", "Videos");
printsublink("$topurl/performance/", "Performance");

// Software
printbutton("Open MPI Software");
printsublink("$topurl/software/", "Download");
printsublink("$topurl/doc/", "Documentation");
printsublink("$topurl/source/", "Source Code Access");
printsublink("$topurl/community/help/bugs.php", "Bug Tracking");
// MTT is not mirrored
printsublink("http://mtt.open-mpi.org/", "Regression Testing");
printsublink("$topurl/software/ompi/versions/", "Version Information");

// Sub-Projects
printbutton("Sub-Projects");
printsublink("$topurl/projects/hwloc/", "Hardware Locality");
printsublink("$topurl/projects/netloc/", "Network Locality");
printsublink("$topurl/projects/mtt/", "MPI Testing Tool");
printsublink("$topurl/projects/user-docs/", "Open MPI User Docs");
printsublink("$topurl/projects/otpo/", "Open Tool for Parameter Optimization");

// Community
printbutton("Community");
printsublink("$topurl/community/lists/", "Mailing Lists");
printsublink("$topurl/community/help/", "<font color=red>Getting Help/Support</font>");
printsublink("$topurl/community/contribute/", "Contribute");
printsublink("$topurl/community/mirrors/", "Mirrors");
printsublink("$topurl/community/contact.php", "Contact");
printsublink("$topurl/community/license.php", "License");

// Black button
printbutton("");

?>
            </TABLE>
          </TD>
        </TD>
      </TABLE>
    </TD>

    <!-- Main text box -->
    <TD VALIGN="top" <?php right_width_3(); ?> >
      <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLPADDING="6" CELLSPACING="0">
        <TR>
          <TD>
      <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLPADDING="4" CELLSPACING="0">
      <COLGROUP>
      <COL>
        <TR>
          <TD>
          <!-- BEGIN MAIN TEXT -->
<?
if (file_exists("$topdir/sitewide_notice.inc")) {
  include("$topdir/sitewide_notice.inc");
}
?>
