<center>
<table border="0" width="80%">
<tr>

<td align=center><p><font color=red><em>This page is for developers
who want to work on the internals of Open MPI itself.<br>If you are a
general user or system administrator looking to simply download
and install Open MPI, <a href="<?php print($topdir); ?>/software/">please
click here</a>.</em></font></p></td>

</tr>

<?php
$start = mktime(12, 0, 0, 3, 15, 2006);
$end = mktime(17, 0, 0, 3, 15, 2006);

function outage($msg) {
    print("<tr>
<td align=center>
  <table border=1 cellpadding=5>
  <tr>
  <td><font color=red><strong>$msg</strong></font></td>
  </tr>
  </table></td>
</tr>\n\n");
}

if (time() < $start) {
    // Before the outage
    outage("The SVN repositories will be down for scheduled maintenance from 12-5pm US Eastern time on Wednesday, March 15, 2006.");
} else if (time() < $end) {
    // During the outage
    outage("The SVN repositories are currently DOWN for scheduled maintence.  They will return at 5pm, US Eastern Time.");
}
?>

</table>
</center>

<br />
