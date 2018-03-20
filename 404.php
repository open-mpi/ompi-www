<?php

// Error documents are hard.  The browser believes the error doc is at
// the location of the requested url (ie,
// https://www.open-mpi.org/blah/blah/blah.txt), but the PHP is
// running relative to <topdir>/404.php.  All our includes assume the
// PHP relative path and browser relative path are the same, which, as
// we just said, isn't true for error documents.
//
// Rather than fix all that code, have a super simple error document
// in this file.

$script_base = dirname($_SERVER["SCRIPT_NAME"]);
$image_base_url = $_SERVER["REQUEST_SCHEME"] . "://" .
	$_SERVER["SERVER_NAME"] . $script_base . "/images";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
  <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <TITLE>Open MPI: We couldn't find what you were looking for -- Sadness</TITLE>
</HEAD>
<BODY>

<br />
<div align="center">
<table>
<tr>
<td valign="center" align="center"><img src="<?php print($image_base_url); ?>/open-mpi-logo.png" width="200"></td>
<td valign="top" align="center"><strong>
<br />
<br />
<br />
<br />
Sorry, we couldn't find<br />
what you were looking for.</strong>
<br />
<br />
Perhaps a <a
href="http://theoatmeal.com/comics/state_web_winter#tumblr">tumblebeast<a/>
ate it?</td>
<td valign="center" align="center"><img src="<?php print($image_base_url); ?>/tb_sign1.png"
width="300"></td>
</tr>
</table>
</div>
</BODY>
</HTML>
