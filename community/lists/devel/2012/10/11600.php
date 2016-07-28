<?
$subject_val = "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 21:49:59 2012" -->
<!-- isoreceived="20121016014959" -->
<!-- sent="Tue, 16 Oct 2012 01:49:50 +0000" -->
<!-- isosent="20121016014950" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC0E8A646E_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="F8513590-CB55-4CA1-8B6F-C42423FA3452_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 21:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11601.php">Shigang Li: "[OMPI devel] question about Open MPI collectives on shared memory"</a>
<li><strong>Previous message:</strong> <a href="11599.php">George Bosilca: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>In reply to:</strong> <a href="11599.php">George Bosilca: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11559.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thanks for your reply.
<br>
<p>Yes, as you explained, a case specifying an inactive request for MPI_Test
<br>
is OK. But the problem is a case specifying an inactive request for
<br>
MPI_Wait, MPI_Waitall, and MPI_Testall, as I explained in my first mail.
<br>
<p>See code below:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* make a inactive request */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv_init(&amp;buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start(&amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Test(&amp;request, &amp;completed, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while (completed == 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* wait for an inactive request */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request, &amp;status);
<br>
<p>In this code, the ompi_request_t object is marked as inactive in
<br>
MPI_Test (ompi_request_default_test) but its req_status field remains
<br>
unchanged.
<br>
<p>Succeeding MPI_Wait (ompi_request_default_wait) sets a user-supplied
<br>
status object using req_status field of the request in req_wait.c
<br>
line 57.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_STATUS_IGNORE != status ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status-&gt;MPI_TAG    = req-&gt;req_status.MPI_TAG;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status-&gt;MPI_SOURCE = req-&gt;req_status.MPI_SOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status-&gt;_ucount    = req-&gt;req_status._ucount;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status-&gt;_cancelled = req-&gt;req_status._cancelled;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Thus, the user will see a non-empty status after MPI_Wait in the code
<br>
above.
<br>
<p>You can see this phenomenon with my status.c attached in my first mail.
<br>
Run with -n 2.
<br>
<p>To avoid this problem, we have two options.
<br>
&nbsp;A. Set req_status field to empty when we mark a request
<br>
&nbsp;&nbsp;&nbsp;&nbsp;as inactive, or
<br>
&nbsp;B. Add if-statements for an inactive request in order to set
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a user-supplied status object to empty in ompi_request_default_wait
<br>
&nbsp;&nbsp;&nbsp;&nbsp;etc.
<br>
<p>For least astonishment, I think A. is better.
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I fail to see the cases your patch addresses. I recognize I did not have the time to look over all the instances where we deal with persistent inactive requests, but at the first occurrence, the one in req_test.c line 68, the case you exhibit there is already covered by the test &quot;request-&gt;req_state == OMPI_REQUEST_INACTIVE&quot;. I see similar checks in all the other test/wait files. Basically, it doesn't matter that we leave the last returned error code on an inactive request, as we always return MPI_STATUS_EMPTY in the status for such requests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Oct 15, 2012, at 07:02 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Open MPI developers,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How is my updated patch?
</span><br>
<span class="quotelev2">&gt; &gt; If there is an another concern, I'll try to update it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The bugs are:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (1) MPI_SOURCE of MPI_Status for a null request must be MPI_ANY_SOURCE.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (2) MPI_Status for an inactive request must be an empty status.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (3) Possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  r23554 fixed possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  But the fix seems to be insufficient.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  We should use OMPI_STATUS_SET macro for all user-supplied
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  MPI_Status objects.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regarding #3, see also a trac 3218. I'm putting a fix back today. Sorry
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; for the delay. One proposed solution was extending the use of the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; OMPI_STATUS_SET macros, but I think the consensus was to fix the problem
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; in the Fortran layer. Indeed, the Fortran layer already routinely
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; converts between Fortran and C statuses. The problem was that we started
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; introducing optimizations to bypass the Fortran-to-C conversion and that
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; optimization was employed too liberally (e..g, in situations that would
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; introduce the alignment errors you're describing). My patch will clean
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; that up. I'll try to put it back in the next few hours.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sorry, I didn't notice the ticket 3218.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Now I've confirmed your commit r27403.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Your modification is better for my issue (3).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; With r27403, my patch for issue (1) and (2) needs modification.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'll re-send modified patch in a few hours.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The updated patch is attached.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This patch addresses bugs (1) and (2) in my previous mail
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and fixes some typos in comments.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11601.php">Shigang Li: "[OMPI devel] question about Open MPI collectives on shared memory"</a>
<li><strong>Previous message:</strong> <a href="11599.php">George Bosilca: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>In reply to:</strong> <a href="11599.php">George Bosilca: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11559.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
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
