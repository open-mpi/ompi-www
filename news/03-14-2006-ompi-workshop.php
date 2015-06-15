<?php
$topdir = "..";
$title = "Open MPI Developer's Workshop <br />April 17-20, 2006, San Jose,
CA, USA";
include_once("$topdir/includes/mailto.inc");
include_once("$topdir/includes/header.inc");

?>

<p>The Open MPI Team is pleased to present a Developer's Workshop to
initiate 3rd parties to the internals of the Open MPI code base.

<dl>
<dd>
<table border=1 cellpadding=5>
<tr><td>
<table border=0>
<?php
function row($label, $content) {
  print("<tr>
<td valign=top align=right><strong>$label</strong></td>
<td>$content</td>
</tr>\n\n");
}

row("What:", "Open MPI Developer's Workshop 2006");
row("Where:", "Cisco Building 14<br />
3625 Cisco Way, San Jose, CA, 95134");
row("When:", "April 17-20, 2006");
?>
</table>
</td></tr>
</table>
</dd>
</dl>

<p><font color=red><strong>The workshop is now over.</strong></font>
The slides <a href="<?php print($topdir); ?>/papers/workshop-2006/">are
available here</a>.

<p>This week-long, hands-on workshop is being taught by the Open MPI
core development team.  The goal is to enable 3rd party developers to
extend and enhance the Open MPI code base, such as hardware-specific
functionality for particular networks or platforms.  A detailed
analysis of how Open MPI works will be presented -- to include
significant time spent examining and discussing the code of Open MPI
itself.</p>

<p>Please note that this is <strong>not</strong> a general MPI
tutorial.  It is an in-depth discussion of the innards of the Open MPI
code base and is intended for developers who have already have a
strong understanding of MPI, preferably in the form of MPI
implementation experience.</p>

<?php 
  include_once("$topdir/includes/footer.inc"); 
