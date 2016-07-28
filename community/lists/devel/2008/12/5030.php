<?
$subject_val = "[OMPI devel] shared-memory allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 13:07:44 2008" -->
<!-- isoreceived="20081210180744" -->
<!-- sent="Wed, 10 Dec 2008 10:11:06 -0800" -->
<!-- isosent="20081210181106" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] shared-memory allocations" -->
<!-- id="4940063A.2060409_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] shared-memory allocations<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 13:11:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5031.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="5029.php">Brad Benton: "Re: [OMPI devel] Schedule for 1.3 Release Candidates and final Release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For shared memory communications, each on-node connection (non-self, 
<br>
sender-receiver pair) gets a circular buffer during MPI_Init().  Each CB 
<br>
requires the following allocations:
<br>
<p>*) ompi_cb_fifo_wrapper_t (roughly 64 bytes)
<br>
*) ompi_cb_fifo_ctl_t head (roughly 12 bytes)
<br>
*) ompi_cb_fifo_ctl_t tail (roughly 12 bytes)
<br>
*) queue (roughly 1024 bytes)
<br>
<p>Importantly, the current code lays these four allocations out on three 
<br>
separate pages.  (The tail and queue are aggregated together.)  So, for 
<br>
example, that &quot;head&quot; allocation (12 bytes) ends up consuming a full page.
<br>
<p>As one goes to more and more on-node processes -- say, for a large SMP 
<br>
or a multicore system -- the number of non-self connections grows as 
<br>
n*(n-1).  So, these circular-buffer allocations end up consuming a lot 
<br>
of shared memory.
<br>
<p>For example, for a 4K pagesize and n=512 on-node processes, the circular 
<br>
buffers consume 3 Gbyte of memory -- 90% of which is empty and simply 
<br>
used for page alignment.
<br>
<p>I'd like to aggregate more of these allocations so that:
<br>
<p>*) shared-memory consumption is reduced
<br>
*) the number of allocations (and hence the degree of lock contention) 
<br>
during MPI_Init is reduced
<br>
<p>Any comments?
<br>
<p>I'd like to understand the original rationale for these page 
<br>
alignments.  I expect this is related to memory placement of pages.  So, 
<br>
I imagine three scenarios.  Which is it?
<br>
<p>A) There really is a good reason for each allocation to have its own 
<br>
page and any attempt to aggregate is doomed.
<br>
<p>B) There is actual benefit for placing things carefully in memory, but 
<br>
substantial aggregation is still possible.  That is, for n processes, we 
<br>
need at most n different allocations -- not 3*n*(n-1).
<br>
<p>C) There is no actual justification for having everything on different 
<br>
pages.  That is, allowing different parts of a FIFO CB to be mapped 
<br>
differently to physical memory sounded to someone like a good idea at 
<br>
the time, but no one really did any performance measurements to justify 
<br>
this.  Or, if they did, it was only on one platform and we have no 
<br>
evidence that the same behavior exists on all platforms.  Personally, 
<br>
I've played with some simple experiments on one (or more?) platforms and 
<br>
found no performance variations due to placement of shared variables 
<br>
that two processes use for communication.  I guess it's possible that 
<br>
data is moving cache-to-cache and doesn't care where the backing memory is.
<br>
<p>Note that I only want to reduce the number of page-aligned allocations.  
<br>
I'd preserve cacheline alignment.  So, no worry about false sharing due 
<br>
to a sender thrashing on one end of a FIFO and a receiver on the other.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5031.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="5029.php">Brad Benton: "Re: [OMPI devel] Schedule for 1.3 Release Candidates and final Release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
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
