<?
$subject_val = "Re: [OMPI devel] openib btl build question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 16:28:11 2008" -->
<!-- isoreceived="20080521202811" -->
<!-- sent="Wed, 21 May 2008 16:27:41 -0400" -->
<!-- isosent="20080521202741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl build question" -->
<!-- id="75C3AA50-9F53-4473-B2C7-A5F486AED537_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48348372.1040505_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl build question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 16:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3970.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3969.php">Don Kerr: "[OMPI devel] openib btl build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Reply:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2008, at 4:17 PM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Just want to make sure what I think I see is true:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux build.  openib btl requires ptmalloc2 and ptmalloc2 requires  
</span><br>
<span class="quotelev1">&gt; posix
</span><br>
<span class="quotelev1">&gt; threads, is that correct?
</span><br>
<p>ptmalloc2 is not *required* by the openib btl.  But it is required on  
<br>
Linux if you want to use the mpi_leave_pinned functionality.  I see  
<br>
one function call to __pthread_initialize in the ptmalloc2 code -- it  
<br>
*looks* like it's a function of glibc, but I don't know for sure.
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
<li><strong>Next message:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3970.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3969.php">Don Kerr: "[OMPI devel] openib btl build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Reply:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
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
