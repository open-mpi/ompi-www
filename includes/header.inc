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
        print("Sorry, this page is not mirrored.  Please see the <a href=\"https://www.open-mpi.org/$equiv_dir\">original version of this page</A> on the main Open MPI web site.\n");
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
    print("              <tr>\n");
    print("                 <td class=\"navbartop");
    if ($class != "")
        print("$class");
    print("\">\n");
    print("                  $text\n");
    print("                 </td>\n");

    print("              </tr>\n");
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

    print("              <tr>\n");
    print("                <td class=\"navbarsub\">\n");
    print("                  &nbsp;&nbsp;<a href=\"$link\" class=\"navbarsub\" $a_modifier>$text</A>\n");
    print("                </td>\n");
    print("              </tr>\n");

    $b = basename($link);
    if ((isset($this_dir) && $b == $this_dir) ||
        (isset($this_absdir) &&
         ($link == "$topdir$this_absdir" || $link == "$topdir$this_absdir/"))) {
        for ($i = 0; $i < sizeof($this_nav); $i++) {
            print("              <tr>\n");
            #if there is no link, make the font different so it stands out as such
            if("" == $this_nav[$i]->link) {
                print("                <td class=\"navbarsub2b\">\n");
                print("                  &nbsp;&nbsp;&nbsp;&nbsp;" . $this_nav[$i]->name ."\n");
            } else {
                print("                <td class=\"navbarsub2\">\n");
                print("                  &nbsp;&nbsp;&nbsp;&nbsp;" .
                      "<a href=\"" . $this_nav[$i]->link . "\" class=\"navbarsub2\">" .
                      $this_nav[$i]->name . "</a>\n");
            }
            print("                </td>\n");
            print("              </tr>\n");
            if ($this_nav[$i]->children != "") {
              for($j = 0; $j < sizeof($this_nav[$i]->children); $j++) {
                  print("              <tr>\n");
                  print("                <td class=\"navbarsub3\">\n");
                  print("                  &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;" .
                        "<a href=\"" . $this_nav[$i]->children[$j]->link . "\" class=\"navbarsub3\">" .
                        $this_nav[$i]->children[$j]->name . "</a>\n");
                  print("                </td>\n");
                  print("              </tr>\n");
              }
            }

    }
  }
}

print("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js\"></script>\n");
include_once("$topdir/includes/google-analytics.php");

print("</head>\n<body>\n");
?>
<a name="top"></A>

<!-- START MAIN TABLE -->
<table width="98%" border="<?php print($table_border); ?>" cellspacing="0" cellpadding="0">
<colgroup>
  <col width="10%">
  <col>

  <!-- Title area -->
  <tr>
    <td class="logobox" valign="center" align="center" rowspan="2" <?php left_width_1(); ?>>
      <a href="<?php print("$logo_url");?>/"><?php
$size = GetImageSize("$topdir/$logo");
print("<img src=\"$topurl/$logo\" " . $size[3] .
      " alt=\"$project logo\" border=\"0\">");
?></A>
    </td>
    <td valign="center" <?php right_width_1(); ?> >
<?php
if (!isset($title) || $title == "") {
  $title = $project;
}
print("      <h1 class=\"doctitle\">$title</H1>\n");

?>
    </td>
  </tr>

  <!-- Quick bar -->
  <tr>
    <!-- one td taken by logo -->
    <td height="1" valign="BOTTOM" <?php right_width_2(); ?> >
    <table width="100%" border="<?php print($table_border); ?>" cellspacing="0" cellpadding="0">
    <tr>

    <td class="quickbar"  valign="top" align="left" height=16 width="1">
     <img src="<?php print("$topurl");?>/images/left-e0-2.gif">
    </td>

    <td>
    <table width="100%" border="<?php print($table_border); ?>" cellspacing="0" cellpadding="5">
      <tr>
        <?php nav_search_start(); ?>
        <td class="quickbar" valign="center" align="right">
	<span class="divider">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
	<a href="<?php print("$topurl"); ?>/" class="quickbar">Home</A>
	<span class="divider">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
	<a href="<?php print("$topurl"); ?>/community/help/" class="quickbar"><font color=red>Support</font></A>
	<span class="divider">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
	<a href="<?php print("$topurl"); ?>/faq/" class="quickbar">FAQ</A>
	<span class="divider">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
	<?php nav_search_make(); ?>
       </td>
       <?php nav_search_end(); ?>
      </tr>
    </table>
    </td>

    <td class="quickbar"  valign="top" align="right" height=16 width="1">
     <img src="<?php print("$topurl");?>/images/right-e0-2.gif">
    </td>

    </tr>
    </table>
    </td>
  </tr>

  <!-- Main row -->
  <tr>
    <!-- Navigation bar -->
    <td valign="top" class="navbarbox" <?php left_width_2(); ?>>
      <table width="100%" border="<?php print($table_border); ?>" cellpadding="1" cellspacing="0">
        <tr>
          <td class="navbarbox">
            <table width="168px" border="<?php print($table_border); ?>" cellpadding="1" cellspacing="1">

<?php

// About
printbutton("About");
printsublink("$topurl/papers/", "Presentations");
printsublink("$topurl/about/members/", "Open MPI Team");
printsublink("$topurl/faq/", "FAQ");
printsublink("$topurl/video/", "Videos");
printsublink("$topurl/performance/", "Performance");

// Software
printbutton("Open MPI Software");
printsublink("$topurl/software/", "Download");
printsublink("$topurl/doc/", "Documentation");
printsublink("$topurl/source/", "Source Code Access");
printsublink("https://github.com/open-mpi/ompi/issues", "Bug Tracking");
printsublink("https://mtt.open-mpi.org/", "Regression Testing");
printsublink("https://github.com/open-mpi/ompi/blob/master/README.md#open-mpi-version-numbers-and-binary-compatibility", "Version Information");

// Sub-Projects
printbutton("Sub-Projects");
printsublink("$topurl/projects/hwloc/", "Hardware Locality");
printsublink("$topurl/projects/netloc/", "Network Locality");
printsublink("$topurl/projects/mtt/", "MPI Testing Tool");
printsublink("$topurl/projects/otpo/", "Open Tool for Parameter Optimization");

// Community
printbutton("Community");
printsublink("$topurl/community/lists/", "Mailing Lists");
// Set the "Getting Help" link to be the main "Getting Help" page on
// the on docs.open-mpi.org (vs. any specific release).
printsublink("https://docs.open-mpi.org/en/main/getting-help.html",
             "<font color=red>Getting Help/Support</font>");
printsublink("$topurl/community/contribute/", "Contribute");
printsublink("$topurl/community/contact.php", "Contact");
printsublink("$topurl/community/license.php", "License");

// Black button
printbutton("");

?>
            </table>
          </td>
        </td>
      </table>
    </td>

    <!-- Main text box -->
    <td valign="top" <?php right_width_3(); ?> >
      <table width="100%" border="<?php print($table_border); ?>" cellpadding="6" cellspacing="0">
        <tr>
          <td>
      <table width="100%" border="<?php print($table_border); ?>" cellpadding="4" cellspacing="0">
      <colgroup>
      <col>
        <tr>
          <td>
          <!-- BEGIN MAIN TEXT -->
<?php
if (file_exists("$topdir/sitewide_notice.inc")) {
  include("$topdir/sitewide_notice.inc");
}
?>
