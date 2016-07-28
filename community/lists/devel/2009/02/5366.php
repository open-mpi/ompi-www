<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 18:31:23 2009" -->
<!-- isoreceived="20090203233123" -->
<!-- sent="Tue, 3 Feb 2009 18:31:16 -0500" -->
<!-- isosent="20090203233116" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="5507C36C-D07A-4358-8F9F-801B832A467F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F3074588-5A27-40A6-A3C5-B7BB82015B8C_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-02-03 18:31:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5367.php">Christoph van Wüllen: "[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5365.php">Rainer Keller: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5363.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5361.php">Broto, Laurent G: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah; I thought this data structure was used for the fortran MPI object  
<br>
handles as well, but looking at the code now, I see that  
<br>
opal_pointer_array's are used for that.  The only Fortran place it is  
<br>
used is for attributes.
<br>
<p>I see ompi_bitmap_t used for attributes, BTL reachability  
<br>
computations, and the crcp.  None of these strike me as performance  
<br>
sensitive at all.  I see it used in the tuned collectives but I agree  
<br>
that one additional compare probably doesn't matter (sure, if we can  
<br>
remove it, that's great -- but in the larger scheme of things, we're  
<br>
going to pay much more in latency for collectives than one comparison  
<br>
will cost).
<br>
<p>I see Ralph's argument about the max Fortran value being defined in  
<br>
opal_config.h, but remember that that's only a side-effect of how  
<br>
Autoconf works.  If Autoconf had allowed us, we would have had 3 truly  
<br>
different files seeded with different #defines from configure:  
<br>
opal_config.h, orte_config.h, and ompi_config.h (right now we dump  
<br>
everything in opal_config.h the others essentially wholly include  
<br>
opal_config.h and add a few more values/defines -- we don't have a  
<br>
clear separation of each layer's results from configure).
<br>
<p>I think setting some reasonable max size for ompi_bitmap_t is fine  
<br>
with a new API call to re-define it if desired would be fine (e.g.,  
<br>
the MPI layer can call it with the max fortran value to ensure that it  
<br>
has the size that it needs for attributes).  But if someone wants to  
<br>
re-code the whole thing to have a definite max size (i.e., not re-size  
<br>
if you set a bit that doesn't yet exist), go to it.  I don't really  
<br>
care.  It strikes me that there's more important stuff to do in our  
<br>
code base than to optimize our glue bitmap code, though.  :-)
<br>
<p>Ok, I'm now done talking about this.  :-)
<br>
<p><p>On Feb 3, 2009, at 4:45 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; These places are easy to find and track. I did it on the ORTE layer,  
</span><br>
<span class="quotelev1">&gt; and in this context the bitmap is _NOT_ required to grow as all  
</span><br>
<span class="quotelev1">&gt; bitmaps are initialize with the number of processes in the jobid. In  
</span><br>
<span class="quotelev1">&gt; the OMPI layer there are few places using the bitmap:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the hierarch collective. There the bitmap is initialized with the  
</span><br>
<span class="quotelev1">&gt; size of the communicator, so it will _NEVER_ get expanded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - in the PML (DR and OB1). Again the bitmap is initialized using the  
</span><br>
<span class="quotelev1">&gt; number of processes, so it will _NEVER_ get expanded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - in the attributes. This is the only place where the bitmap might  
</span><br>
<span class="quotelev1">&gt; expand. However, as the current implementation is not thread safe  
</span><br>
<span class="quotelev1">&gt; and as this call is outside the critical path, we can modify it in  
</span><br>
<span class="quotelev1">&gt; order to expand the bitmap manually.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, it appears that we don't really take advantage of the original  
</span><br>
<span class="quotelev1">&gt; design for the bitmap. It might be time to revise it ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 3, 2009, at 15:30 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 3, 2009, at 3:24 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the current bitmap implementation every time we set or check a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bit we have to compute the index of the char where this bit is set  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the relative position from the beginning of char. This  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requires two _VERY_ expensive operations: a division and a modulo.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compared with the cost of these two operation a quick test for a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max bit is irrelevant.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In fact I think the safety limit if good for most cases. How about  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having the max bit to the limit used to initialize the bitmap? We  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can add a call to extend the bitmap in case some layer really need  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to extend it, but restrict all others layers to the number of bits  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requested when the bitmap is initialized.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem with this is that the original design expands the  
</span><br>
<span class="quotelev2">&gt;&gt; bitmap whenever you try to set a bit that doesn't yet exist.  So  
</span><br>
<span class="quotelev2">&gt;&gt; you'd need to track down every place in the code that exercises  
</span><br>
<span class="quotelev2">&gt;&gt; this assumption.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You could set a max size if you want to (e.g., assuming you'll  
</span><br>
<span class="quotelev2">&gt;&gt; never have more than some_large_value of fortran handles [probably  
</span><br>
<span class="quotelev2">&gt;&gt; considerably less than the number of Fortran integers available],  
</span><br>
<span class="quotelev2">&gt;&gt; or somesuch).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5367.php">Christoph van Wüllen: "[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5365.php">Rainer Keller: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5363.php">George Bosilca: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5361.php">Broto, Laurent G: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
