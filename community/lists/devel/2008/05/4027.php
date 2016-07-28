<?
$subject_val = "Re: [OMPI devel] Memory hooks stuff";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 26 04:55:15 2008" -->
<!-- isoreceived="20080526085515" -->
<!-- sent="Mon, 26 May 2008 11:55:05 +0300" -->
<!-- isosent="20080526085505" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory hooks stuff" -->
<!-- id="20080526085505.GJ4014_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48397D9F.1020400_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memory hooks stuff<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-26 04:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4028.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4026.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4026.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4031.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Reply:</strong> <a href="4031.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, May 25, 2008 at 10:54:23AM -0400, Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; That would also be great.  I don't know anything about these mmu  
</span><br>
<span class="quotelev2">&gt; &gt; notifiers (I'm not much of a kernel guy), but anything that allows us  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's what Quadrics used for years in True64. Instead of trying to catch 
</span><br>
<span class="quotelev1">&gt; at user-level all instances when the page table of a process is modified 
</span><br>
<span class="quotelev1">&gt; (free, munmap, sbrk, etc...), the kernel notifies you when that happens.
</span><br>
Not just that but also when swapping out or pagefault happens so even no
<br>
page pinning is needed. But HW should be designed to work with changing
<br>
page mappings and I am not sure that Mellanox HW designed for that. What
<br>
about Myricom HW?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4028.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4026.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4026.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4031.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Reply:</strong> <a href="4031.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
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
