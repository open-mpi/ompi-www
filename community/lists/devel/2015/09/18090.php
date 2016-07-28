<?
$subject_val = "[OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 00:01:31 2015" -->
<!-- isoreceived="20150921040131" -->
<!-- sent="Mon, 21 Sep 2015 16:01:20 +1200" -->
<!-- isosent="20150921040120" -->
<!-- name="Kevin Buckley" -->
<!-- email="kevin.buckley.ecs.vuw.ac.nz_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch" -->
<!-- id="CABwOO=cecWdcGHM4QqqqDGh0YY5Xp-aMH87_5upHCDvLRpWCMg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch<br>
<strong>From:</strong> Kevin Buckley (<em>kevin.buckley.ecs.vuw.ac.nz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-21 00:01:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18091.php">Ralph Castain: "Re: [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
<li><strong>Previous message:</strong> <a href="18089.php">Paul Hargrove: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18091.php">Ralph Castain: "Re: [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
<li><strong>Reply:</strong> <a href="18091.php">Ralph Castain: "Re: [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Watcha,
<br>
<p>we recently updated the OpenMPI installation on our School's ArchLinux
<br>
machines, where OpenMPI is built as a PkgSrc package, to 1.10.0
<br>
<p>In running through the build, we were told that PkgSrc wasn't too keen on
<br>
the use of the == with a single &quot;if test&quot; construct and so I needed to apply
<br>
the following patch
<br>
<p>--- configure.orig      2015-08-24 23:33:14.000000000 +0000
<br>
+++ configure
<br>
@@ -60570,8 +60570,8 @@ _ACEOF
<br>
&nbsp;$as_echo &quot;$MPI_OFFSET_DATATYPE&quot; &gt;&amp;6; }
<br>
<p><p>-    if test &quot;$ompi_fortran_happy&quot; == &quot;1&quot; &amp;&amp; \
<br>
-       test &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; == &quot;1&quot;; then
<br>
+    if test &quot;$ompi_fortran_happy&quot; = &quot;1&quot; &amp;&amp; \
<br>
+       test &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; = &quot;1&quot;; then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Get the kind value for Fortran MPI_INTEGER_KIND (corresponding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# to whatever is the same size as a F77 INTEGER -- for the
<br>
<p><p>Seem to recall that this is &quot;good practice&quot; and indeed, can see that
<br>
other &quot;if test&quot; stanzas in the configure script have been fixed to match,
<br>
so perhaps this one has just slipped through the net and/or not been
<br>
reported by anyone else as yet.
<br>
<p><pre>
--
Kevin M. Buckley
eScience Consultant
School of Engineering and Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18091.php">Ralph Castain: "Re: [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
<li><strong>Previous message:</strong> <a href="18089.php">Paul Hargrove: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18091.php">Ralph Castain: "Re: [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
<li><strong>Reply:</strong> <a href="18091.php">Ralph Castain: "Re: [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
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
