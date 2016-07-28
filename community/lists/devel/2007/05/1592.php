<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 18:57:47 2007" -->
<!-- isoreceived="20070528225747" -->
<!-- sent="Mon, 28 May 2007 18:57:42 -0400" -->
<!-- isosent="20070528225742" -->
<!-- name="Jack Howarth" -->
<!-- email="howarth_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined environ symbol on Darwin" -->
<!-- id="20070528225742.GA3635_at_bromo.msbb.uc.edu" -->
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
<strong>Date:</strong> 2007-05-28 18:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1593.php">Jack Howarth: "[OMPI devel] MacOS X v1.1.5 patch"</a>
<li><strong>Previous message:</strong> <a href="1591.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1595.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1595.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;I have been told that Paraview is one package that
<br>
exhibits this problem with undefined environ symbols.
<br>
This will occur in any package which creates its own
<br>
shared libraries that link in any openmpi shared library
<br>
that contains the undefined environ symbol. I think it
<br>
is unreasonably restrictive to force all the application
<br>
developers who use openmpi to avoid creating shared libs
<br>
that use openmpi shared libraries. Again from the
<br>
response on the Darwin mailing list this is expected
<br>
behavior on Darwin. I will send two patches shortly
<br>
that address this without needing to touch configure.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1593.php">Jack Howarth: "[OMPI devel] MacOS X v1.1.5 patch"</a>
<li><strong>Previous message:</strong> <a href="1591.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1595.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1595.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
