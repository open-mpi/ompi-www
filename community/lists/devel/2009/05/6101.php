<?
$subject_val = "[OMPI devel] faster autogen.sh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 00:11:41 2009" -->
<!-- isoreceived="20090527041141" -->
<!-- sent="Wed, 27 May 2009 06:11:30 +0200" -->
<!-- isosent="20090527041130" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] faster autogen.sh" -->
<!-- id="20090527041129.GA30232_at_gmx.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] faster autogen.sh<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 00:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6102.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6100.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6116.php">Jeff Squyres: "Re: [OMPI devel] faster autogen.sh"</a>
<li><strong>Reply:</strong> <a href="6116.php">Jeff Squyres: "Re: [OMPI devel] faster autogen.sh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As part of a shameless advertising move I suggest this patch.
<br>
While it won't make autogen.sh exactly fast, for me it shaves
<br>
half a minute off its runtime.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>HACKING: recommend parallel automake 1.11 execution.
<br>
<p>Index: HACKING
<br>
===================================================================
<br>
--- HACKING	(revision 21262)
<br>
+++ HACKING	(working copy)
<br>
@@ -197,7 +197,15 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Running autogen.sh may take several minutes.  It's not very
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exciting to watch.  :-)
<br>
+   If you have an SMP system, say with 4 processors, be sure to use
<br>
+   Automake 1.11 or newer and enable threaded execution before running
<br>
+   autogen.sh (you can again put this in your shell startup files):
<br>
&nbsp;
<br>
+          # For bash/sh:
<br>
+          export AUTOMAKE_JOBS=4
<br>
+          # For csh/tcsh:
<br>
+          set AUTOMAKE_JOBS 4
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;5a. You generally need to run autogen.sh whenever the top-level
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file &quot;configure.ac&quot; changes, or any files in the config/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directory change (the config/ directory is where a lot of
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6102.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6100.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6116.php">Jeff Squyres: "Re: [OMPI devel] faster autogen.sh"</a>
<li><strong>Reply:</strong> <a href="6116.php">Jeff Squyres: "Re: [OMPI devel] faster autogen.sh"</a>
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
