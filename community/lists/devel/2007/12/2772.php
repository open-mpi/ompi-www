<?
$subject_val = "[OMPI devel] [PATCH] openib btl: correct help message error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 16:05:27 2007" -->
<!-- isoreceived="20071210210527" -->
<!-- sent="Mon, 10 Dec 2007 15:05:23 -0600" -->
<!-- isosent="20071210210523" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] openib btl: correct help message error" -->
<!-- id="20071210210523.GB32197_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] openib btl: correct help message error<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 16:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Previous message:</strong> <a href="2771.php">Jeff Squyres: "[OMPI devel] Print warning in v1.2 series if THREAD_MULTIPLE or progress threads are used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Reply:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Slight word usage and grammar error in the openib btl help test.  I
<br>
believe the change below is the intended meaning.
<br>
<p>Thanks,
<br>
Jon
<br>
<p>Index: ompi/mca/btl/openib/help-mpi-btl-openib.txt
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/help-mpi-btl-openib.txt	(revision 16892)
<br>
+++ ompi/mca/btl/openib/help-mpi-btl-openib.txt	(working copy)
<br>
@@ -164,7 +164,7 @@
<br>
&nbsp;&nbsp;&nbsp;See the InfiniBand spec 1.2 (section 12.7.34) for more details.
<br>
&nbsp;#
<br>
&nbsp;[no active ports found]
<br>
-WARNING: There is at least on IB HCA found on host '%s', but there is
<br>
+WARNING: There is at least one IB HCA found on host '%s', but there are
<br>
&nbsp;no active ports detected. This is most certainly not what you wanted.
<br>
&nbsp;Check your cables and SM configuration.
<br>
&nbsp;#
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Previous message:</strong> <a href="2771.php">Jeff Squyres: "[OMPI devel] Print warning in v1.2 series if THREAD_MULTIPLE or progress threads are used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Reply:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
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
