<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 09:35:31 2007" -->
<!-- isoreceived="20070529133531" -->
<!-- sent="Tue, 29 May 2007 09:35:27 -0400" -->
<!-- isosent="20070529133527" -->
<!-- name="Jack Howarth" -->
<!-- email="howarth_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined environ symbol on Darwin" -->
<!-- id="20070529133527.GA9039_at_bromo.msbb.uc.edu" -->
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
<strong>Date:</strong> 2007-05-29 09:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1601.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1610.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1610.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I don't know why such patches should be harder to
<br>
maintain in Windows than on Darwin. All you do is
<br>
the equivalent to...
<br>
<p>cd /sw/lib/openmpi/lib
<br>
nm * | grep environ
<br>
<p>and if you see environ undefined, identify which library
<br>
it is in and which object file it came from. I would also
<br>
note that my patch reveals that several instances of the
<br>
environ variable being declared that are missing the Windows
<br>
wrappers. So if anything, adding the Darwin patch will
<br>
increase the probability that both targets are properly
<br>
maintained.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1601.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1610.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1610.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
