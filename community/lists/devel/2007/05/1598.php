<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 22:20:03 2007" -->
<!-- isoreceived="20070529022003" -->
<!-- sent="Mon, 28 May 2007 22:19:59 -0400" -->
<!-- isosent="20070529021959" -->
<!-- name="Jack Howarth" -->
<!-- email="howarth_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined environ symbol on Darwin" -->
<!-- id="20070529021959.GA4992_at_bromo.msbb.uc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070528165935.GA1107_at_bromo.msbb.uc.edu" -->
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
<strong>From:</strong> Jack Howarth (<em>howarth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-28 22:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1599.php">Ralph Castain: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1597.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1599.php">Ralph Castain: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1599.php">Ralph Castain: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;One general example of why openmpi shouldn't be creating
<br>
shared libraries with undefined environ symbols is as follows.
<br>
If a python based application was using the openmpi shared libraries
<br>
linked into the application's python module, your suggested
<br>
approach would be unusable since the user would have to rebuild
<br>
python to explicitly provide the missing environ symbol. You
<br>
will always run into such corner cases as long as openmpi is
<br>
misbuilt on darwin.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
ps I have posted this issue to Apple's radar bug reporter
<br>
as issue 5233061 as well.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1599.php">Ralph Castain: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1597.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1599.php">Ralph Castain: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1599.php">Ralph Castain: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
