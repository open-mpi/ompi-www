<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:56:01 2009" -->
<!-- isoreceived="20090330175601" -->
<!-- sent="Mon, 30 Mar 2009 09:55:05 -0800" -->
<!-- isosent="20090330175505" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49D10779.2040403_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FBA0BBD9-580A-4B02-A70F-8EE675A77FB1_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 13:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5749.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Then it looks like the safest solution is the use either ftruncate or 
</span><br>
<span class="quotelev1">&gt; the lseek method and then touch the first byte of all memory pages.  
</span><br>
<span class="quotelev1">&gt; Unfortunately, I see two problems with this. First, there is a clear 
</span><br>
<span class="quotelev1">&gt; performance hit on the startup time. And second, we will have to find 
</span><br>
<span class="quotelev1">&gt; a pretty smart way to do this or we will completely break the memory 
</span><br>
<span class="quotelev1">&gt; affinity stuff.
</span><br>
<p>We're basically touching all the pages on start-up anyhow.
<br>
<p>Let me explain.
<br>
<p>The sm BTL needs to set up a shared/mmap file to accommodate what's 
<br>
needed at MPI_Init time and how much space you'll want for growing 
<br>
during the course of the run.  We used to size this file &quot;arbitrarily&quot; 
<br>
(mpool_sm_per_peer_size and mpool_sm_[min|max]_size), which allocated 
<br>
shared memory excessively for small jobs but insufficiently (won't start 
<br>
up) for big jobs.  As part of moving to the single-queue model, I tried 
<br>
to size the shared memory more reasonably -- at a minimu, so that jobs 
<br>
would start up.  The current formula is to estimate how much memory will 
<br>
be needed at MPI_Init time and set the file for that size.  We can argue 
<br>
about whether or not headroom should be included, but currently (1.3.2) 
<br>
none is really provided.
<br>
<p>So, the shared area is basically filled up during MPI_Init().  For large 
<br>
np, most of that space is eager fragments.  An eager fragment in the 
<br>
shared area includes a pointer back to the free list that manages that 
<br>
fragment.  Those pointers have to be initialized.  Since eager fragments 
<br>
by default are 4K, it turns out that basically every page is touched 
<br>
during MPI_Init().  (Fine print:  not true of the max fragments, but 
<br>
there aren't very many of those.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5749.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
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
