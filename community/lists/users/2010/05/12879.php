<?
$subject_val = "[OMPI users] request_get_status: Recheck request status [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 17:08:03 2010" -->
<!-- isoreceived="20100504210803" -->
<!-- sent="Tue, 4 May 2010 14:06:21 -0700" -->
<!-- isosent="20100504210621" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="[OMPI users] request_get_status: Recheck request status [PATCH]" -->
<!-- id="1273007181.4590.27.camel_at_sjackman01.phage.bcgsc.ca" -->
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
<strong>Subject:</strong> [OMPI users] request_get_status: Recheck request status [PATCH]<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 17:06:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12880.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Reply:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>request_get_status polls request-&gt;req_complete before calling
<br>
opal_progress. Ideally, it would check req_complete, call opal_progress,
<br>
and check req_complete one final time. This patch identically mirrors
<br>
the logic of
<br>
ompi_request_default_test in ompi/request/req_test.c.
<br>
<p>We've discussed this patch on the mailing list previously. I think we
<br>
both agreed it was a good idea, but never made it around to being
<br>
applied.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>2009-09-14  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If opal_progress is called then check the status of the request
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;before returning. opal_progress is called only once. This logic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parallels MPI_Test (ompi_request_default_test).
<br>
<p>--- ompi/mpi/c/request_get_status.c.orig	2008-11-04 12:56:27.000000000 -0800
<br>
+++ ompi/mpi/c/request_get_status.c	2009-09-24 15:30:09.995850000 -0700
<br>
@@ -41,6 +41,10 @@
<br>
&nbsp;int MPI_Request_get_status(MPI_Request request, int *flag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status *status) 
<br>
&nbsp;{
<br>
+#if OMPI_ENABLE_PROGRESS_THREADS == 0
<br>
+    int do_it_once = 0;
<br>
+#endif
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEMCHECKER(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memchecker_request(&amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
@@ -57,6 +61,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+#if OMPI_ENABLE_PROGRESS_THREADS == 0
<br>
+ recheck_request_status:
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_atomic_mb();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( (request == MPI_REQUEST_NULL) || (request-&gt;req_state == OMPI_REQUEST_INACTIVE) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*flag = true;
<br>
@@ -78,9 +85,17 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    *flag = false;
<br>
&nbsp;#if OMPI_ENABLE_PROGRESS_THREADS == 0
<br>
-    opal_progress();
<br>
+    if( 0 == do_it_once ) {
<br>
+        /**
<br>
+         * If we run the opal_progress then check the status of the request before
<br>
+         * leaving. We will call the opal_progress only once per call.
<br>
+         */
<br>
+        opal_progress();
<br>
+        do_it_once++;
<br>
+        goto recheck_request_status;
<br>
+    }
<br>
&nbsp;#endif
<br>
+    *flag = false;
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12879/openmpi-1.4.2-request_get_status.diff">openmpi-1.4.2-request_get_status.diff</a>
</ul>
<!-- attachment="openmpi-1.4.2-request_get_status.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12880.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Reply:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
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
