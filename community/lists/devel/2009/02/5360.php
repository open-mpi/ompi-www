<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 15:30:46 2009" -->
<!-- isoreceived="20090203203046" -->
<!-- sent="Tue, 3 Feb 2009 15:30:03 -0500" -->
<!-- isosent="20090203203003" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="E8B4D287-9EF8-4CE5-8C93-76D644E43F26_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EC68F393-8B7B-4752-A65C-65B32E8E1D4D_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 15:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5361.php">Broto, Laurent G: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5359.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5359.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5362.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5362.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5363.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2009, at 3:24 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; In the current bitmap implementation every time we set or check a  
</span><br>
<span class="quotelev1">&gt; bit we have to compute the index of the char where this bit is set  
</span><br>
<span class="quotelev1">&gt; and the relative position from the beginning of char. This requires  
</span><br>
<span class="quotelev1">&gt; two _VERY_ expensive operations: a division and a modulo. Compared  
</span><br>
<span class="quotelev1">&gt; with the cost of these two operation a quick test for a max bit is  
</span><br>
<span class="quotelev1">&gt; irrelevant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fact I think the safety limit if good for most cases. How about  
</span><br>
<span class="quotelev1">&gt; having the max bit to the limit used to initialize the bitmap? We  
</span><br>
<span class="quotelev1">&gt; can add a call to extend the bitmap in case some layer really need  
</span><br>
<span class="quotelev1">&gt; to extend it, but restrict all others layers to the number of bits  
</span><br>
<span class="quotelev1">&gt; requested when the bitmap is initialized.
</span><br>
<p>The problem with this is that the original design expands the bitmap  
<br>
whenever you try to set a bit that doesn't yet exist.  So you'd need  
<br>
to track down every place in the code that exercises this assumption.
<br>
<p>You could set a max size if you want to (e.g., assuming you'll never  
<br>
have more than some_large_value of fortran handles [probably  
<br>
considerably less than the number of Fortran integers available], or  
<br>
somesuch).
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
<li><strong>Next message:</strong> <a href="5361.php">Broto, Laurent G: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5359.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5359.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5362.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5362.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5363.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
