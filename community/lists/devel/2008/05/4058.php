<?
$subject_val = "Re: [OMPI devel] Notes from mem hooks call today";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 17:07:53 2008" -->
<!-- isoreceived="20080528210753" -->
<!-- sent="Wed, 28 May 2008 14:07:44 -0700" -->
<!-- isosent="20080528210744" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Notes from mem hooks call today" -->
<!-- id="adamymap273.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2C0345BA-0B84-450D-802A-1FDDB3B8D7E5_at_cisco.com" -->
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
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 17:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4057.php">Jeff Squyres: "[OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4057.php">Jeff Squyres: "[OMPI devel] Notes from mem hooks call today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt;    - gleb asks: don't we want to avoid the system call when possible?
</span><br>
<span class="quotelev1"> &gt;    - patrick: a single syscall can be/is cheaper than a reg cache
</span><br>
<span class="quotelev1"> &gt;      lookup in user space
</span><br>
<p>This doesn't really make sense -- syscall + cache lookup in kernel is
<br>
&quot;obviously&quot; more expensive than cache lookup in userspace with no
<br>
context switch (I don't see any tricks the kernel can do that make the
<br>
cache lookup cheaper there).
<br>
<p>However the solution I proposed a long time ago (when Pete Wyckoff
<br>
originally did his work on having the kernel track this -- and as a side
<br>
note, it's not clear to me whether MMU notifiers really help what Pete
<br>
did) is for userspace to provide a pointer to a flag when registering
<br>
memory with the kernel, and then the kernel can mark the flag if the
<br>
mapping changes -- ie keep the userspace cache but have the kernel
<br>
manage invalidation &quot;perfectly&quot; without any malloc hooks.
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4057.php">Jeff Squyres: "[OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4057.php">Jeff Squyres: "[OMPI devel] Notes from mem hooks call today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
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
