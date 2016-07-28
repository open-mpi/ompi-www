<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 16:38:28 2009" -->
<!-- isoreceived="20090203213828" -->
<!-- sent="Tue, 3 Feb 2009 14:38:12 -0700" -->
<!-- isosent="20090203213812" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="6560A7E0-154D-4499-ABE8-E658E9BB6E3F_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 16:38:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5363.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5361.php">Broto, Laurent G: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5360.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5363.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's keep something in mind. Tim W and I hammered at this topic for a  
<br>
long, long time. The fact is that there is nothing in the usage of  
<br>
opal_bitmap that would in any way be hampered by the limit imposed in  
<br>
ompi_bitmap. We just don't use ompi_bitmap in orte because it is in  
<br>
the OMPI layer...and because we are snobs about having Fortran values  
<br>
in our code. ;-)
<br>
<p>The reason you can't move ompi_bitmap to OPAL is because the limit is  
<br>
tied to a Fortran quantity - and OPAL doesn't know anything about  
<br>
Fortran. Or at least, officially it doesn't...
<br>
<p>but the fact is that the Fortran limit is actually defined in  
<br>
opal_config.h!!
<br>
<p>So the best solution would actually be to rename OMPI  
<br>
_FORTRAN_HANDLE_MAX in opal_config.h to be OPAL_FORTRAN_HANDLE_MAX,  
<br>
and replace opal_bitmap.c with the code in ompi_bitmap.c  
<br>
(appropriately s/ompi/opal). Then this entire discussion can be tabled.
<br>
<p>Hope that makes sense.
<br>
Ralph
<br>
<p>On Feb 3, 2009, at 1:30 PM, Jeff Squyres wrote:
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
<li><strong>Next message:</strong> <a href="5363.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5361.php">Broto, Laurent G: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5360.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5363.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
