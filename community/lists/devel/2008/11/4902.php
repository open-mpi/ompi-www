<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 10:52:50 2008" -->
<!-- isoreceived="20081114155250" -->
<!-- sent="Fri, 14 Nov 2008 07:56:05 -0800" -->
<!-- isosent="20081114155605" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="491D9F95.70602_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C10D0173-17C3-4AC5-8558-D583DC2A172D_at_lanl.gov" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 10:56:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4903.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4901.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4903.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4903.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I too am interested - I think we need to do something about the sm  
</span><br>
<span class="quotelev1">&gt; backing file situation as larger core machines are slated to become  
</span><br>
<span class="quotelev1">&gt; more prevalent shortly.
</span><br>
<p>I think there is at least one piece of low-flying fruit:  get rid of a 
<br>
lot of the page alignments.  Especially as one goes to large core 
<br>
counts, the O(n^2) number of local &quot;connections&quot; becomes important, and 
<br>
each connection starts with three page-aligned allocations, each 
<br>
allocation very tiny (and hence uses only a tiny portion of the page+ 
<br>
that is allocated to it).  So, most of the allocated memory is never used.
<br>
<p>Personally, I question the rationale for the page alignment in the first 
<br>
place, but don't mind listening to anyone who wants to explain it to 
<br>
me.  Presumably, in a NUMA machine, localizing FIFOs to separate 
<br>
physical memory improves performance.  I get that basic premise.  I just 
<br>
question the reasoning beyond that.
<br>
<p>The page alignment appears in ompi_fifo_init and ompi_cb_fifo_init.  It 
<br>
comes additionally from mca_mpool_sm_alloc.  Four minor changes could 
<br>
change alignment from page to cacheline size.
<br>
<p><span class="quotelev1">&gt; what happens when there isn't enough memory to support all this? Are  
</span><br>
<span class="quotelev1">&gt; we smart enough to detect this situation? Does the sm subsystem  
</span><br>
<span class="quotelev1">&gt; quietly shut down? Warn and shut down? Segfault?
</span><br>
<p>I'm not exactly sure.  I think it's a combination of three things:
<br>
<p>*) some attempt to signal problems correctly
<br>
*) some degree just to live with less shared memory (possibly leading to 
<br>
performance degradation)
<br>
*) poorly tested in any case
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two examples so far:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single  
</span><br>
<span class="quotelev1">&gt; node, 2ppn, with btl=openib,sm,self. The program started, but  
</span><br>
<span class="quotelev1">&gt; segfaulted on the first MPI_Send. No warnings were printed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. again with a ramdisk, /tmp was reportedly set to 16MB (unverified 
</span><br>
<span class="quotelev1">&gt; -  some uncertainty, could be have been much larger). OMPI was run on  
</span><br>
<span class="quotelev1">&gt; multiple nodes, 16ppn, with btl=openib,sm,self. The program ran to  
</span><br>
<span class="quotelev1">&gt; completion without errors or warning. I don't know the communication  
</span><br>
<span class="quotelev1">&gt; pattern - could be no local comm was performed, though that sounds  
</span><br>
<span class="quotelev1">&gt; doubtful. 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4903.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4901.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4903.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4903.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
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
