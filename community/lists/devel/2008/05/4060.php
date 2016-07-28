<?
$subject_val = "Re: [OMPI devel] Notes from mem hooks call today";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 17:20:37 2008" -->
<!-- isoreceived="20080528212037" -->
<!-- sent="Wed, 28 May 2008 17:20:29 -0400 (EDT)" -->
<!-- isosent="20080528212029" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Notes from mem hooks call today" -->
<!-- id="Pine.LNX.4.64.0805281717090.11431_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adamymap273.fsf_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Notes from mem hooks call today<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 17:20:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 28 May 2008, Roland Dreier wrote:
<br>
<p><span class="quotelev2">&gt; &gt;    - gleb asks: don't we want to avoid the system call when possible?
</span><br>
<span class="quotelev2">&gt; &gt;    - patrick: a single syscall can be/is cheaper than a reg cache
</span><br>
<span class="quotelev2">&gt; &gt;      lookup in user space
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This doesn't really make sense -- syscall + cache lookup in kernel is
</span><br>
<span class="quotelev1">&gt; &quot;obviously&quot; more expensive than cache lookup in userspace with no
</span><br>
<span class="quotelev1">&gt; context switch (I don't see any tricks the kernel can do that make the
</span><br>
<span class="quotelev1">&gt; cache lookup cheaper there).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However the solution I proposed a long time ago (when Pete Wyckoff
</span><br>
<span class="quotelev1">&gt; originally did his work on having the kernel track this -- and as a side
</span><br>
<span class="quotelev1">&gt; note, it's not clear to me whether MMU notifiers really help what Pete
</span><br>
<span class="quotelev1">&gt; did) is for userspace to provide a pointer to a flag when registering
</span><br>
<span class="quotelev1">&gt; memory with the kernel, and then the kernel can mark the flag if the
</span><br>
<span class="quotelev1">&gt; mapping changes -- ie keep the userspace cache but have the kernel
</span><br>
<span class="quotelev1">&gt; manage invalidation &quot;perfectly&quot; without any malloc hooks.
</span><br>
<p>I think Patrick's point is that it's not too much more expensive to do the 
<br>
syscall on Linux vs just doing the cache lookup, particularly in the 
<br>
context of a long message.  And it means that upper layer protocols like 
<br>
MPI don't have to deal with caches (and since MPI implementors hate 
<br>
registration caches only slightly less than we hate MPI_CANCEL, that will 
<br>
make us happy).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
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
