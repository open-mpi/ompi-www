<?
$subject_val = "Re: [OMPI devel] Memory hooks stuff";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 25 09:35:20 2008" -->
<!-- isoreceived="20080525133520" -->
<!-- sent="Sun, 25 May 2008 09:35:12 -0400" -->
<!-- isosent="20080525133512" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory hooks stuff" -->
<!-- id="2D81FA2C-DCB9-42D3-BB42-F2B3F6D628D6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4838C15E.9050308_at_myri.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-25 09:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4025.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4023.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4023.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4026.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Reply:</strong> <a href="4026.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2008, at 9:31 PM, Patrick Geoffray wrote:
<br>
<p><span class="quotelev2">&gt;&gt; the topic of the memory hooks came up again.  Brian was wondering if
</span><br>
<span class="quotelev2">&gt;&gt; we should [finally] revisit this topic -- there's a few things that
</span><br>
<span class="quotelev2">&gt;&gt; could be done to make life &quot;better&quot;.  Two things jump to mind:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - using mallopt on Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about using the (probably) upcoming mmu notifiers and avoid ugly
</span><br>
<span class="quotelev1">&gt; hacks in user space ?
</span><br>
<p>That would also be great.  I don't know anything about these mmu  
<br>
notifiers (I'm not much of a kernel guy), but anything that allows us  
<br>
to get rid of the ugly hacks would be awesome.  I assume that this  
<br>
would only be for very new/recent Linux kernels...?  But even if you  
<br>
have to have Linux kernel v2.6.500, it would be good to use such  
<br>
things if it provides a good path forward.  It's easy enough to add  
<br>
configure tests to check if such mechanisms are available.
<br>
<p>We still need to support the old kernels, though.  So mallopt might be  
<br>
ok in a few cases:
<br>
<p>1. when you're not using a high performance network (because I assume  
<br>
we can disable mallopt's use at runtime, vs. ptmalloc which we have to  
<br>
decide to use at OMPI configure/compile time)
<br>
<p>2. if you're using a high performance network, but using ptmalloc  
<br>
presents problems
<br>
<p>3. if you're using a high performance network and don't care about  
<br>
giving memory back to the OS (i.e., your app's memory usage doesn't  
<br>
cause problems if you never give memory back to the OS).
<br>
<p>So to be clear: I'm not proposing that we ditch ptmalloc and replace  
<br>
it with mallopt.  I'm proposing that we have both ptmalloc and  
<br>
mallopt, and the user can choose which to use.  And if some upcoming  
<br>
Linux MMU notifier mechanism will work, we can add it into the bag of  
<br>
tricks as well; it'll be another option.  It's the Open MPI Way.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; - doing *something* on Solaris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Implementing the same kind of notifiers in Solaris ?
</span><br>
<p><p>Brian mentioned that we either don't do anything in Solaris or do even  
<br>
more horrid things there (I don't remember offhand).  I assume that  
<br>
the Sun guys would want to do something reasonable...  :-)
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
<li><strong>Next message:</strong> <a href="4025.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4023.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4023.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4026.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Reply:</strong> <a href="4026.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
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
