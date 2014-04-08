<?php

#
# Simple function to force a particular server for a given web page
# If the $HTTP_HOST does not match the desired server, perform an HTTP
# redirect to the same URL, but on the desired server
#

function force_server($server) {
    global $_SERVER;
    global $topurl;
    global $topdir;

    if ($_SERVER["HTTP_HOST"] <> $server && 
        $_SERVER["HTTP_HOST"] <> "$server:80") {

        # The new URL may not be simply http://$server$REQUEST_URI -- the
        # mirror may not have the same docroot as the main server, so
        # we have to adjust the REQUEST_URL to grab just the relative
        # part out of it and use that to the top-level server (which
        # we *are* guaranteeing has no prefix -- the docroot *is* the
        # $topdir).

        $root = dirname($_SERVER["SCRIPT_NAME"]);
        $t = $topdir;
        while ($t != ".") {
            $root = dirname($root);
            $t = dirname($t);
        }
        $newurl = "http://$server";
        if ($root == "/") {
            $newurl .= $_SERVER["SCRIPT_NAME"];
        } else {
            $newurl .= substr($_SERVER["SCRIPT_NAME"], strlen($root));
        }
        header("Location: $newurl");
?>
<html>
<head>
<title>This page has moved</title>
<?php print("<META HTTP-EQUIV=\"refresh\" CONTENT=\"5; url=$newurl\">\n"); ?>
</head>
<body bgcolor=white>
<h1 align=center>This page has moved</h1>
<?php 
  print("<P>This page no longer exists on the server <code>" . 
        $_SERVER["HTTP_HOST"] . "</code>.\n"); 
  print("It has moved to the exact same URL on the server <code>$server</code>.\n");
  print("<P><a href=\"$newurl\">Click here to go\n");
  print("to the new page</a>, or wait 5 seconds for your browser to move\n");
  print("you automatically.\n");
?>
</body>
</html>
<?php
      if ($topdir != "") {
          require("$topdir/includes/footer.inc");
          ompi_set_included("$topdir/includes/footer.inc");
      } else if ($topurl != "") {
          include_once("$topurl/includes/footer.inc");
      }
      exit;
    }
}
