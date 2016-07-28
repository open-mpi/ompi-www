<?
$subject_val = "Re: [OMPI devel] Memory hooks stuff";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 25 10:54:38 2008" -->
<!-- isoreceived="20080525145438" -->
<!-- sent="Sun, 25 May 2008 10:54:23 -0400" -->
<!-- isosent="20080525145423" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory hooks stuff" -->
<!-- id="48397D9F.1020400_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2D81FA2C-DCB9-42D3-BB42-F2B3F6D628D6_at_cisco.com" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-25 10:54:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4027.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4025.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4024.php">Jeff Squyres: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4027.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Reply:</strong> <a href="4027.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; That would also be great.  I don't know anything about these mmu  
</span><br>
<span class="quotelev1">&gt; notifiers (I'm not much of a kernel guy), but anything that allows us  
</span><br>
<p>It's what Quadrics used for years in True64. Instead of trying to catch 
<br>
at user-level all instances when the page table of a process is modified 
<br>
(free, munmap, sbrk, etc...), the kernel notifies you when that happens.
<br>
<p>The registration cache functionality would then move to each driver, 
<br>
completely transparent for OpenMPI or any other user code.
<br>
<p><span class="quotelev1">&gt; to get rid of the ugly hacks would be awesome.  I assume that this  
</span><br>
<span class="quotelev1">&gt; would only be for very new/recent Linux kernels...?  But even if you 
</span><br>
<p>Well, if Linux is not a dictatorship, this &quot;UTTER AND TOTAL CRAP&quot; would 
<br>
be in 2.6.27 :-)
<br>
<p><span class="quotelev1">&gt; So to be clear: I'm not proposing that we ditch ptmalloc and replace  
</span><br>
<span class="quotelev1">&gt; it with mallopt.  I'm proposing that we have both ptmalloc and  
</span><br>
<span class="quotelev1">&gt; mallopt, and the user can choose which to use.  And if some upcoming  
</span><br>
<p>I guess I am missing something, but let's defer this discussion for the 
<br>
call.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4027.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4025.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4024.php">Jeff Squyres: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4027.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Reply:</strong> <a href="4027.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
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
