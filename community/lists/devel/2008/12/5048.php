<?
$subject_val = "Re: [OMPI devel] shared-memory allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 08:46:40 2008" -->
<!-- isoreceived="20081212134640" -->
<!-- sent="Fri, 12 Dec 2008 08:46:34 -0500" -->
<!-- isosent="20081212134634" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shared-memory allocations" -->
<!-- id="C77BEF1B-3C68-480D-844E-78465286802F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 08:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI devel] BML problem?"</a>
<li><strong>Previous message:</strong> <a href="5047.php">Eugene Loh: "[OMPI devel] BML problem?"</a>
<li><strong>In reply to:</strong> <a href="5030.php">Eugene Loh: "[OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2008, at 1:11 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; For shared memory communications, each on-node connection (non-self,  
</span><br>
<span class="quotelev1">&gt; sender-receiver pair) gets a circular buffer during MPI_Init().   
</span><br>
<span class="quotelev1">&gt; Each CB requires the following allocations:
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
<span class="quotelev1">&gt; Importantly, the current code lays these four allocations out on  
</span><br>
<span class="quotelev1">&gt; three separate pages.  (The tail and queue are aggregated  
</span><br>
<span class="quotelev1">&gt; together.)  So, for example, that &quot;head&quot; allocation (12 bytes) ends  
</span><br>
<span class="quotelev1">&gt; up consuming a full page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As one goes to more and more on-node processes -- say, for a large  
</span><br>
<span class="quotelev1">&gt; SMP or a multicore system -- the number of non-self connections  
</span><br>
<span class="quotelev1">&gt; grows as n*(n-1).  So, these circular-buffer allocations end up  
</span><br>
<span class="quotelev1">&gt; consuming a lot of shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, for a 4K pagesize and n=512 on-node processes, the  
</span><br>
<span class="quotelev1">&gt; circular buffers consume 3 Gbyte of memory -- 90% of which is empty  
</span><br>
<span class="quotelev1">&gt; and simply used for page alignment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to aggregate more of these allocations so that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) shared-memory consumption is reduced
</span><br>
<span class="quotelev1">&gt; *) the number of allocations (and hence the degree of lock  
</span><br>
<span class="quotelev1">&gt; contention) during MPI_Init is reduced
</span><br>
<p>This certainly seems like a good idea to me.
<br>
<p><span class="quotelev1">&gt; I'd like to understand the original rationale for these page  
</span><br>
<span class="quotelev1">&gt; alignments.  I expect this is related to memory placement of pages.   
</span><br>
<span class="quotelev1">&gt; So, I imagine three scenarios.  Which is it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) There really is a good reason for each allocation to have its own  
</span><br>
<span class="quotelev1">&gt; page and any attempt to aggregate is doomed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B) There is actual benefit for placing things carefully in memory,  
</span><br>
<span class="quotelev1">&gt; but substantial aggregation is still possible.  That is, for n  
</span><br>
<span class="quotelev1">&gt; processes, we need at most n different allocations -- not 3*n*(n-1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C) There is no actual justification for having everything on  
</span><br>
<span class="quotelev1">&gt; different pages.  That is, allowing different parts of a FIFO CB to  
</span><br>
<span class="quotelev1">&gt; be mapped differently to physical memory sounded to someone like a  
</span><br>
<span class="quotelev1">&gt; good idea at the time, but no one really did any performance  
</span><br>
<span class="quotelev1">&gt; measurements to justify this.  Or, if they did, it was only on one  
</span><br>
<span class="quotelev1">&gt; platform and we have no evidence that the same behavior exists on  
</span><br>
<span class="quotelev1">&gt; all platforms.  Personally, I've played with some simple experiments  
</span><br>
<span class="quotelev1">&gt; on one (or more?) platforms and found no performance variations due  
</span><br>
<span class="quotelev1">&gt; to placement of shared variables that two processes use for  
</span><br>
<span class="quotelev1">&gt; communication.  I guess it's possible that data is moving cache-to- 
</span><br>
<span class="quotelev1">&gt; cache and doesn't care where the backing memory is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I only want to reduce the number of page-aligned  
</span><br>
<span class="quotelev1">&gt; allocations.  I'd preserve cacheline alignment.  So, no worry about  
</span><br>
<span class="quotelev1">&gt; false sharing due to a sender thrashing on one end of a FIFO and a  
</span><br>
<span class="quotelev1">&gt; receiver on the other.
</span><br>
<p>I thought that Rich had prior data from other architectures to justify  
<br>
doing it this way, but I don't know that for a fact...
<br>
<p>I *think* the rationale was that if you have a very busy producer/ 
<br>
consumer, the benefit was that they could operate independently and  
<br>
not affect the other.  Since they were both operating on different  
<br>
pages, writes to one page would not affect reads from the other.   
<br>
Perhaps this has not worked out in practice...?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI devel] BML problem?"</a>
<li><strong>Previous message:</strong> <a href="5047.php">Eugene Loh: "[OMPI devel] BML problem?"</a>
<li><strong>In reply to:</strong> <a href="5030.php">Eugene Loh: "[OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
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
