<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 22 12:11:46 2013" -->
<!-- isoreceived="20131022161146" -->
<!-- sent="Tue, 22 Oct 2013 18:11:44 +0200" -->
<!-- isosent="20131022161144" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator" -->
<!-- id="10E8B234-F5BA-4F9F-86FD-ABBAEB953913_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D6BC2F17-4BD0-409B-945D-43EE255B64C2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-22 12:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13120.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29475 - trunk/ompi/proc"</a>
<li><strong>Previous message:</strong> <a href="13118.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator"</a>
<li><strong>In reply to:</strong> <a href="13118.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking directly at the patch you are right, the lock is always taken after the atomic. The merge on my branch left both the try lock and lock out of the code without any markers for conflict (&lt;&lt;&lt; &#133; === &#133; &gt;&gt;&gt;). Strange.
<br>
<p>Sorry for the noise.
<br>
&nbsp;&nbsp;George.
<br>
<p>On Oct 22, 2013, at 17:46 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I may be missing it, but it looks to me like the lock is taken right before the list manipulation. All he did was add a check for re-entry before taking the lock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2013, at 8:39 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This patch is not correct, the list manipulation should remain protected behind the mutex.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 22, 2013, at 17:33 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2013-10-22 11:33:39 EDT (Tue, 22 Oct 2013)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 29465
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29465">https://svn.open-mpi.org/trac/ompi/changeset/29465</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fix rentry check in communicator request progress.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmr=v1.7.4:ticket=3796
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/communicator/comm_request.c |     9 ++++++++-                               
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 files changed, 8 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/communicator/comm_request.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/communicator/comm_request.c	Tue Oct 22 11:33:32 2013	(r29464)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/communicator/comm_request.c	2013-10-22 11:33:39 EDT (Tue, 22 Oct 2013)	(r29465)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -11,6 +11,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;comm_request.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &quot;opal/include/opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_free_list_t ompi_comm_requests;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_list_t ompi_comm_requests_active;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_mutex_t ompi_comm_request_mutex;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -89,11 +91,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int ompi_comm_request_progress (void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_comm_request_t *request, *next;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    static int32_t progressing = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if (opal_mutex_trylock (&amp;ompi_comm_request_mutex)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* don't allow re-entry */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (opal_atomic_swap_32 (&amp;progressing, 1)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    opal_mutex_lock (&amp;ompi_comm_request_mutex);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OPAL_LIST_FOREACH_SAFE(request, next, &amp;ompi_comm_requests_active, ompi_comm_request_t) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       int rc = OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -140,6 +146,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_mutex_unlock (&amp;ompi_comm_request_mutex);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    progressing = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13120.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29475 - trunk/ompi/proc"</a>
<li><strong>Previous message:</strong> <a href="13118.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator"</a>
<li><strong>In reply to:</strong> <a href="13118.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator"</a>
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
