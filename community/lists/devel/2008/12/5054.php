<?
$subject_val = "Re: [OMPI devel] shared-memory allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 14:48:12 2008" -->
<!-- isoreceived="20081212194812" -->
<!-- sent="Fri, 12 Dec 2008 14:48:06 -0500" -->
<!-- isosent="20081212194806" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shared-memory allocations" -->
<!-- id="C5682A26.2C512%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4940063A.2060409_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shared-memory allocations<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 14:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5055.php">Ralph Castain: "[OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>Previous message:</strong> <a href="5053.php">Tim Mattox: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="5030.php">Eugene Loh: "[OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It has been a long time since I wrote the original code, and things have
<br>
changed a fair amount since that time, so bear this in mind.
<br>
<p>The memory allocation is intended to take into account that two separate
<br>
procs may be touching the same memory, so the intent is to reduce cache
<br>
conflicts (false sharing) and put the memory close to the process that is
<br>
using it.  When the code first went in, there was no explicit memory
<br>
affinity implemented, so first-touch was relied on to get the memory in the
<br>
&#179;correct&#178; location.
<br>
<p>If I remember correctly, the head and the tail each are written to be a
<br>
different process, and is where the pointers and counters used to manage the
<br>
fifo are maintained.  They need to be close to the writer, and on separate
<br>
cache lines, to avoid false sharing.  The queue itself is accessed most
<br>
often by the reader, so it should be closer to the reader.  I honestly don&#185;t
<br>
remember much about the wrapper &#173; would have to go back to the code to look
<br>
at it.  If we no longer allow multiple fifo per pair, the wrapper layer can
<br>
go away &#173; it is there to manage multiple fifo&#185;s per pair.
<br>
<p>As far as granularity of allocation &#173; it needs to be large enough to
<br>
accommodate the smallest shared memory hierarchy, so I suppose in the most
<br>
general case this may be the tertiary cache ?
<br>
<p>No reason not to allocate objects that need to be associated with the same
<br>
process on the same page, as long as one avoids false sharing.  So seems
<br>
like each process could have all of it&#185;s receive fifo&#185;s on the same page,
<br>
and these could share the also with either the heads, or the tails of each
<br>
queue.
<br>
<p>Make sense ?
<br>
Rich
<br>
<p><p>On 12/10/08 1:11 PM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; For shared memory communications, each on-node connection (non-self,
</span><br>
<span class="quotelev1">&gt; sender-receiver pair) gets a circular buffer during MPI_Init().  Each CB
</span><br>
<span class="quotelev1">&gt; requires the following allocations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) ompi_cb_fifo_wrapper_t (roughly 64 bytes)
</span><br>
<span class="quotelev1">&gt; *) ompi_cb_fifo_ctl_t head (roughly 12 bytes)
</span><br>
<span class="quotelev1">&gt; *) ompi_cb_fifo_ctl_t tail (roughly 12 bytes)
</span><br>
<span class="quotelev1">&gt; *) queue (roughly 1024 bytes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Importantly, the current code lays these four allocations out on three
</span><br>
<span class="quotelev1">&gt; separate pages.  (The tail and queue are aggregated together.)  So, for
</span><br>
<span class="quotelev1">&gt; example, that &quot;head&quot; allocation (12 bytes) ends up consuming a full page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As one goes to more and more on-node processes -- say, for a large SMP
</span><br>
<span class="quotelev1">&gt; or a multicore system -- the number of non-self connections grows as
</span><br>
<span class="quotelev1">&gt; n*(n-1).  So, these circular-buffer allocations end up consuming a lot
</span><br>
<span class="quotelev1">&gt; of shared memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, for a 4K pagesize and n=512 on-node processes, the circular
</span><br>
<span class="quotelev1">&gt; buffers consume 3 Gbyte of memory -- 90% of which is empty and simply
</span><br>
<span class="quotelev1">&gt; used for page alignment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to aggregate more of these allocations so that:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) shared-memory consumption is reduced
</span><br>
<span class="quotelev1">&gt; *) the number of allocations (and hence the degree of lock contention)
</span><br>
<span class="quotelev1">&gt; during MPI_Init is reduced
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to understand the original rationale for these page
</span><br>
<span class="quotelev1">&gt; alignments.  I expect this is related to memory placement of pages.  So,
</span><br>
<span class="quotelev1">&gt; I imagine three scenarios.  Which is it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A) There really is a good reason for each allocation to have its own
</span><br>
<span class="quotelev1">&gt; page and any attempt to aggregate is doomed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; B) There is actual benefit for placing things carefully in memory, but
</span><br>
<span class="quotelev1">&gt; substantial aggregation is still possible.  That is, for n processes, we
</span><br>
<span class="quotelev1">&gt; need at most n different allocations -- not 3*n*(n-1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C) There is no actual justification for having everything on different
</span><br>
<span class="quotelev1">&gt; pages.  That is, allowing different parts of a FIFO CB to be mapped
</span><br>
<span class="quotelev1">&gt; differently to physical memory sounded to someone like a good idea at
</span><br>
<span class="quotelev1">&gt; the time, but no one really did any performance measurements to justify
</span><br>
<span class="quotelev1">&gt; this.  Or, if they did, it was only on one platform and we have no
</span><br>
<span class="quotelev1">&gt; evidence that the same behavior exists on all platforms.  Personally,
</span><br>
<span class="quotelev1">&gt; I've played with some simple experiments on one (or more?) platforms and
</span><br>
<span class="quotelev1">&gt; found no performance variations due to placement of shared variables
</span><br>
<span class="quotelev1">&gt; that two processes use for communication.  I guess it's possible that
</span><br>
<span class="quotelev1">&gt; data is moving cache-to-cache and doesn't care where the backing memory is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I only want to reduce the number of page-aligned allocations.
</span><br>
<span class="quotelev1">&gt; I'd preserve cacheline alignment.  So, no worry about false sharing due
</span><br>
<span class="quotelev1">&gt; to a sender thrashing on one end of a FIFO and a receiver on the other.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5055.php">Ralph Castain: "[OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>Previous message:</strong> <a href="5053.php">Tim Mattox: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="5030.php">Eugene Loh: "[OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
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
