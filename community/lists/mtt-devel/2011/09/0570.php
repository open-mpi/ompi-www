<?
$subject_val = "[MTT devel] Some MTT Reporter woes (Detail view)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  9 14:32:15 2011" -->
<!-- isoreceived="20110909183215" -->
<!-- sent="Fri, 9 Sep 2011 14:32:10 -0400" -->
<!-- isosent="20110909183210" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] Some MTT Reporter woes (Detail view)" -->
<!-- id="CAANzjEn_Hy=x5Ux7QRX0iwY7qyCqiHo4A59u=+rU20MbKGnLUQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [MTT devel] Some MTT Reporter woes (Detail view)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-09 14:32:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0571.php">Josh Hursey: "Re: [MTT devel] Some MTT Reporter woes (Detail view)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/08/0569.php">Josh Hursey: "[MTT devel] Open MPI MTT Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0571.php">Josh Hursey: "Re: [MTT devel] Some MTT Reporter woes (Detail view)"</a>
<li><strong>Reply:</strong> <a href="0571.php">Josh Hursey: "Re: [MTT devel] Some MTT Reporter woes (Detail view)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry mentioned a bug to me offline. I am posting here so that others
<br>
with the same problem can see the eventual followup.
<br>
<p><p>In the detail view the 'network' and 'command' lines are incorrect:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=2009">http://www.open-mpi.org/mtt/index.php?do_redir=2009</a>
<br>
<p>The 'command' line is blank. So that either means that the Reporter
<br>
SELECT query is not getting the correct data, or that the data was
<br>
never stored. So I'll have to dig into this.
<br>
<p>The 'network' line is a number. I suspect that this is the network row
<br>
id, instead of the string values. I think the reporter is not
<br>
activating the translation function properly.
<br>
<p>I have also noticed some errors in the log in which the Reporter
<br>
SELECT query is malformed. I'll take a look at how that might have
<br>
occurred while I'm at it.
<br>
<p><p>I do not think that these are related to the recent Summary updates
<br>
(since the commands above do not use the tables). I'll try to take a
<br>
look at these issues over the weekend, and post back when I have
<br>
resolved things (or have more information).
<br>
<p>-- Josh
<br>
<p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0571.php">Josh Hursey: "Re: [MTT devel] Some MTT Reporter woes (Detail view)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/08/0569.php">Josh Hursey: "[MTT devel] Open MPI MTT Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0571.php">Josh Hursey: "Re: [MTT devel] Some MTT Reporter woes (Detail view)"</a>
<li><strong>Reply:</strong> <a href="0571.php">Josh Hursey: "Re: [MTT devel] Some MTT Reporter woes (Detail view)"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
