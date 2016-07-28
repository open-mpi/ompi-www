<?
$subject_val = "[OMPI devel] MPI_Request_get_status and opal_progress [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 17:14:07 2009" -->
<!-- isoreceived="20090914211407" -->
<!-- sent="Mon, 14 Sep 2009 14:12:51 -0700" -->
<!-- isosent="20090914211251" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Request_get_status and opal_progress [PATCH]" -->
<!-- id="4AAEB1D3.6070404_at_bcgsc.ca" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 17:12:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6834.php">Jeff Squyres: "[OMPI devel] Fixed sm coll bug"</a>
<li><strong>Previous message:</strong> <a href="6832.php">Jeff Squyres: "Re: [OMPI devel] svn-trunk, no configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>Reply:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>MPI_Test includes logic (in ompi_request_default_test) that tests 
<br>
request-&gt;req_complete a second time after calling opal_progress. 
<br>
MPI_Request_get_status however is missing this logic, although it 
<br>
performs a nearly identical task. After speaking with Jeff Squyres on 
<br>
the phone, he agreed that this logic could be copied over. A patch is 
<br>
attached. This patch is currently untested (other than it compiles), 
<br>
but I wanted to post it before it left my head.
<br>
<p>Two questions. Should the loop label recheck_request_status come 
<br>
before or after the call to opal_atomic_mb? Is it necessary to check 
<br>
request-&gt;req_state a second time, or is it only necessary to check 
<br>
request-&gt;req_complete the second time?
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
<p>
<p>
2009-09-14  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
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
+++ ompi/mpi/c/request_get_status.c	2009-09-14 13:38:35.452391000 -0700
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
@@ -65,6 +69,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+
<br>
+#if OMPI_ENABLE_PROGRESS_THREADS == 0
<br>
+ recheck_request_status:
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( request-&gt;req_complete ) { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*flag = true; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If this is a generalized request, we *always* have to call
<br>
@@ -78,9 +86,17 @@
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
&nbsp;}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6834.php">Jeff Squyres: "[OMPI devel] Fixed sm coll bug"</a>
<li><strong>Previous message:</strong> <a href="6832.php">Jeff Squyres: "Re: [OMPI devel] svn-trunk, no configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>Reply:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
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
