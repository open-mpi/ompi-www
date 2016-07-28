<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 11:15:45 2008" -->
<!-- isoreceived="20081114161545" -->
<!-- sent="Fri, 14 Nov 2008 11:15:39 -0500" -->
<!-- isosent="20081114161539" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="A7E6D75B-6C14-42DF-9254-2624FEF2F6AE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="491D9F95.70602_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM backing file size<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 11:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4904.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4902.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4902.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4906.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2008, at 10:56 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I too am interested - I think we need to do something about the sm   
</span><br>
<span class="quotelev2">&gt;&gt; backing file situation as larger core machines are slated to  
</span><br>
<span class="quotelev2">&gt;&gt; become  more prevalent shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think there is at least one piece of low-flying fruit:  get rid of  
</span><br>
<span class="quotelev1">&gt; a lot of the page alignments.  Especially as one goes to large core  
</span><br>
<span class="quotelev1">&gt; counts, the O(n^2) number of local &quot;connections&quot; becomes important,  
</span><br>
<span class="quotelev1">&gt; and each connection starts with three page-aligned allocations, each  
</span><br>
<span class="quotelev1">&gt; allocation very tiny (and hence uses only a tiny portion of the page 
</span><br>
<span class="quotelev1">&gt; + that is allocated to it).  So, most of the allocated memory is  
</span><br>
<span class="quotelev1">&gt; never used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Personally, I question the rationale for the page alignment in the  
</span><br>
<span class="quotelev1">&gt; first place, but don't mind listening to anyone who wants to explain  
</span><br>
<span class="quotelev1">&gt; it to me.  Presumably, in a NUMA machine, localizing FIFOs to  
</span><br>
<span class="quotelev1">&gt; separate physical memory improves performance.  I get that basic  
</span><br>
<span class="quotelev1">&gt; premise.  I just question the reasoning beyond that.
</span><br>
<p>I think the original rationale was that only pages could be physically  
<br>
pinned (not cache lines).
<br>
<p>Slightly modifying Eugene's low-hanging fruit might be to figure out  
<br>
which processes are local to each other (e.g., on cores on the same  
<br>
socket) where memory local to all the cores on a socket.  These  
<br>
processes' data could be shared contiguously (perhaps even within a  
<br>
single page, depending on how many cores are there) instead of on  
<br>
individual pages.  Specifically: use page alignments for groups of  
<br>
processes that have the same memory locality.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The page alignment appears in ompi_fifo_init and ompi_cb_fifo_init.   
</span><br>
<span class="quotelev1">&gt; It comes additionally from mca_mpool_sm_alloc.  Four minor changes  
</span><br>
<span class="quotelev1">&gt; could change alignment from page to cacheline size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what happens when there isn't enough memory to support all this?  
</span><br>
<span class="quotelev2">&gt;&gt; Are  we smart enough to detect this situation? Does the sm  
</span><br>
<span class="quotelev2">&gt;&gt; subsystem  quietly shut down? Warn and shut down? Segfault?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not exactly sure.  I think it's a combination of three things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) some attempt to signal problems correctly
</span><br>
<span class="quotelev1">&gt; *) some degree just to live with less shared memory (possibly  
</span><br>
<span class="quotelev1">&gt; leading to performance degradation)
</span><br>
<span class="quotelev1">&gt; *) poorly tested in any case
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have two examples so far:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single   
</span><br>
<span class="quotelev2">&gt;&gt; node, 2ppn, with btl=openib,sm,self. The program started, but   
</span><br>
<span class="quotelev2">&gt;&gt; segfaulted on the first MPI_Send. No warnings were printed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. again with a ramdisk, /tmp was reportedly set to 16MB  
</span><br>
<span class="quotelev2">&gt;&gt; (unverified -  some uncertainty, could be have been much larger).  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI was run on  multiple nodes, 16ppn, with btl=openib,sm,self.  
</span><br>
<span class="quotelev2">&gt;&gt; The program ran to  completion without errors or warning. I don't  
</span><br>
<span class="quotelev2">&gt;&gt; know the communication  pattern - could be no local comm was  
</span><br>
<span class="quotelev2">&gt;&gt; performed, though that sounds  doubtful.
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4904.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4902.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4902.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4906.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
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
