<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 16:45:49 2009" -->
<!-- isoreceived="20090203214549" -->
<!-- sent="Tue, 3 Feb 2009 16:45:43 -0500" -->
<!-- isosent="20090203214543" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="F3074588-5A27-40A6-A3C5-B7BB82015B8C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E8B4D287-9EF8-4CE5-8C93-76D644E43F26_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Move of ompi_bitmap_t<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 16:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5364.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5362.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5360.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These places are easy to find and track. I did it on the ORTE layer,  
<br>
and in this context the bitmap is _NOT_ required to grow as all  
<br>
bitmaps are initialize with the number of processes in the jobid. In  
<br>
the OMPI layer there are few places using the bitmap:
<br>
<p>- the hierarch collective. There the bitmap is initialized with the  
<br>
size of the communicator, so it will _NEVER_ get expanded.
<br>
<p>- in the PML (DR and OB1). Again the bitmap is initialized using the  
<br>
number of processes, so it will _NEVER_ get expanded.
<br>
<p>- in the attributes. This is the only place where the bitmap might  
<br>
expand. However, as the current implementation is not thread safe and  
<br>
as this call is outside the critical path, we can modify it in order  
<br>
to expand the bitmap manually.
<br>
<p>So, it appears that we don't really take advantage of the original  
<br>
design for the bitmap. It might be time to revise it ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 3, 2009, at 15:30 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 3, 2009, at 3:24 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the current bitmap implementation every time we set or check a  
</span><br>
<span class="quotelev2">&gt;&gt; bit we have to compute the index of the char where this bit is set  
</span><br>
<span class="quotelev2">&gt;&gt; and the relative position from the beginning of char. This requires  
</span><br>
<span class="quotelev2">&gt;&gt; two _VERY_ expensive operations: a division and a modulo. Compared  
</span><br>
<span class="quotelev2">&gt;&gt; with the cost of these two operation a quick test for a max bit is  
</span><br>
<span class="quotelev2">&gt;&gt; irrelevant.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In fact I think the safety limit if good for most cases. How about  
</span><br>
<span class="quotelev2">&gt;&gt; having the max bit to the limit used to initialize the bitmap? We  
</span><br>
<span class="quotelev2">&gt;&gt; can add a call to extend the bitmap in case some layer really need  
</span><br>
<span class="quotelev2">&gt;&gt; to extend it, but restrict all others layers to the number of bits  
</span><br>
<span class="quotelev2">&gt;&gt; requested when the bitmap is initialized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem with this is that the original design expands the bitmap  
</span><br>
<span class="quotelev1">&gt; whenever you try to set a bit that doesn't yet exist.  So you'd need  
</span><br>
<span class="quotelev1">&gt; to track down every place in the code that exercises this assumption.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could set a max size if you want to (e.g., assuming you'll never  
</span><br>
<span class="quotelev1">&gt; have more than some_large_value of fortran handles [probably  
</span><br>
<span class="quotelev1">&gt; considerably less than the number of Fortran integers available], or  
</span><br>
<span class="quotelev1">&gt; somesuch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5364.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5362.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5360.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
