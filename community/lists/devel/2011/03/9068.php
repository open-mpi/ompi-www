<?
$subject_val = "[OMPI devel] Old Linux kernels";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 17:15:00 2011" -->
<!-- isoreceived="20110315211500" -->
<!-- sent="Tue, 15 Mar 2011 15:14:51 -0600" -->
<!-- isosent="20110315211451" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Old Linux kernels" -->
<!-- id="E6984D34-82AC-4E8C-B6A0-F03711444F00_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Old Linux kernels<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 17:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9069.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
<li><strong>Previous message:</strong> <a href="9067.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9069.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
<li><strong>Reply:</strong> <a href="9069.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Jeff and I encountered a problem when cross-compiling OMPI for Linux. Turned out that we had an old test in the code that looked for threads to have different pids. Since it couldn't be tested when cross-compiling, the test simply assumed this was the case for Linux under those conditions - which broke the build for current Linux kernels.
<br>
<p>Different pids for threads was last seen in the old RH 4 series (kernel 2.6.9 or so). Some code (e.g., waitpid) was also provided to support this unusual situation - this code was in fact broken when we updated the event library. So even if we were in an old kernel, the code base would neither compile nor run.
<br>
<p>Rather than trying to continue to support these old kernels, we have removed all the stale code that was covered by OPAL_THREADS_HAVE_DIFFERENT_PIDS. This removed some complexity from a few PLM modules and removed the broken code.
<br>
<p>Jeff modified the corresponding .m4 test so we now detect an older kernel, print out a nice &quot;we don't support this&quot; message (along with noting that earlier versions of OMPI do), and then abort the build.
<br>
<p>If you know of some reason to restore support for old Linux kernels, and someone willing to do the work to &quot;refresh&quot; that support, please let us know.
<br>
<p>Ralph &amp; Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9069.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
<li><strong>Previous message:</strong> <a href="9067.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9069.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
<li><strong>Reply:</strong> <a href="9069.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
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
