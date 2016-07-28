<?
$subject_val = "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 18:34:02 2009" -->
<!-- isoreceived="20090924223402" -->
<!-- sent="Thu, 24 Sep 2009 15:32:38 -0700" -->
<!-- isosent="20090924223238" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]" -->
<!-- id="4ABBF386.9090107_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="31B4CABD-061C-4633-AD34-3CBD59D712AA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 18:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6888.php">Eugene Loh: "[OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6886.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<li><strong>In reply to:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Attached is an updated patch, which moves the loop label before 
<br>
opal_atomic_mb as is done in req_test.c.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 14, 2009, at 5:12 PM, Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Two questions. Should the loop label recheck_request_status come
</span><br>
<span class="quotelev2">&gt;&gt; before or after the call to opal_atomic_mb?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that a 2nd mb is necessary.  But I think it could be put  
</span><br>
<span class="quotelev1">&gt; into the &quot;if&quot; block at the end, and leave the label where it is.  But  
</span><br>
<span class="quotelev1">&gt; see below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it necessary to check
</span><br>
<span class="quotelev2">&gt;&gt; request-&gt;req_state a second time, or is it only necessary to check
</span><br>
<span class="quotelev2">&gt;&gt; request-&gt;req_complete the second time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In THREAD_MULTIPLE, I guess the state could change.  But in non- 
</span><br>
<span class="quotelev1">&gt; THREAD_MULTIPLE, it's superfluous to check a 2nd time because a  
</span><br>
<span class="quotelev1">&gt; request can't have changed into INACTIVE simply due to a call to  
</span><br>
<span class="quotelev1">&gt; opal_progress().  I notice that req_test.c checks the whole enchilada  
</span><br>
<span class="quotelev1">&gt; again (including the mb and state change).  Since we're currently not  
</span><br>
<span class="quotelev1">&gt; distinguishing between THREAD_MULTIPLE and not in these functions, I  
</span><br>
<span class="quotelev1">&gt; think we need to be conservative and check the state again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this means that our TEST/WAIT functions are not well-tuned for  
</span><br>
<span class="quotelev1">&gt; threading (or, at least, there are optimizations that could be made  
</span><br>
<span class="quotelev1">&gt; based on the thread level).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George / Brian -- got opinions here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
&nbsp;}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6888.php">Eugene Loh: "[OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6886.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<li><strong>In reply to:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<!-- nextthread="start" -->
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
