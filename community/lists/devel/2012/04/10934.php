<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 26 13:52:30 2012" -->
<!-- isoreceived="20120426175230" -->
<!-- sent="Thu, 26 Apr 2012 18:52:22 +0100" -->
<!-- isosent="20120426175222" -->
<!-- name="Leif Lindholm" -->
<!-- email="leif.lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="4F998B56.5000002_at_arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="CALQMFq0ufRqng8DNAmmf20=4rNdpDPdXK5-2pLK_VvN3thuytQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Open MPI on ARMv5<br>
<strong>From:</strong> Leif Lindholm (<em>leif.lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-26 13:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10935.php">Jeff Squyres: "[OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Previous message:</strong> <a href="10933.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Maybe in reply to:</strong> <a href="10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10940.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10940.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/25/12 01:50, Evan Clinton wrote:
<br>
<span class="quotelev2">&gt;&gt; - The v5 code doesn't actually make use of the kuser helper barriers
</span><br>
<span class="quotelev2">&gt;&gt;   in its versions of opal_atomic_cmpset_acq/rel.
</span><br>
<span class="quotelev1">&gt; Quote the documentation, __kuser_cmpxchg &quot;already includes memory
</span><br>
<span class="quotelev1">&gt; barriers as needed,&quot; so the code using it shouldn't need anything
</span><br>
<span class="quotelev1">&gt; extra.
</span><br>
<p>Fair enough - but could you put a comment to this effect into the patch?
<br>
<p><span class="quotelev1">&gt; Tweaked the patch, should be a little nicer now.
</span><br>
<p>Thank you.
<br>
<p><span class="quotelev2">&gt;&gt; - The patch does not do a runtime test for kernel helper version. While
</span><br>
<span class="quotelev2">&gt;&gt;   normally not a problem, this could cause tricky to debug issues if
</span><br>
<span class="quotelev2">&gt;&gt;   running on top of old kernels (as in &quot;executing uninitialized
</span><br>
<span class="quotelev2">&gt;&gt;   memory&quot; tricky).
</span><br>
<span class="quotelev1">&gt; I'm not familiar enough with the codebase to know where it should go,
</span><br>
<span class="quotelev1">&gt; and I suspect the obvious check based on the __kuser_helper_version
</span><br>
<span class="quotelev1">&gt; will not be available on kernels much older than the ones with the
</span><br>
<span class="quotelev1">&gt; features we need anyway.  We'd only have a problem on kernels older
</span><br>
<span class="quotelev1">&gt; than 2.6.15, which was released in January of 2006, and I'm only
</span><br>
<span class="quotelev1">&gt; confident we'd have __kuser_help_version from 2.6.12 onward.
</span><br>
<p>Hmm, true enough...
<br>
<p>But I'm still not too happy about even the very unlikely risk of
<br>
something executing &quot;random stuff&quot; depending on kernel version.
<br>
For now, could you update the comments to that effect that:
<br>
<p>&quot;These kernel functions are available on kernel versions 2.6.15 and
<br>
greater&quot; + &quot;, and running this software on earlier versions will result
<br>
in undefined behaviour.&quot;
<br>
<p>?
<br>
<p><span class="quotelev2">&gt;&gt; - This patch does not include out-of-line assembly versions
</span><br>
<span class="quotelev2">&gt;&gt;   (in opal/asm/base) for the atomic operations. However I am not sure
</span><br>
<span class="quotelev2">&gt;&gt;   if this causes any practical problems.
</span><br>
<span class="quotelev1">&gt; As far as I can tell, this isn't an issue, since no actual new
</span><br>
<span class="quotelev1">&gt; assembly is added or changed.
</span><br>
<p>It doesn't cause any problems with existing code - so what I'm really
<br>
saying is that I don't know that this won't cause issues specifically
<br>
for these new targets. Unless Jeff objects, I'm happy.
<br>
<p><span class="quotelev2">&gt;&gt; - If 64-bit atomics are desirable, these are actually possible on most
</span><br>
<span class="quotelev2">&gt;&gt;   ARMv6 platforms (including the Raspberry PI), so a configure test on
</span><br>
<span class="quotelev2">&gt;&gt;   whether LDREXD assembles without errors could be used to detect this.
</span><br>
<span class="quotelev1">&gt; I'd add another case to the architecture detection in the config
</span><br>
<span class="quotelev1">&gt; script, but I'm not sure what strings to match on (i.e. uname outputs)
</span><br>
<span class="quotelev1">&gt; for detecting presence of LDREXD, and I'm not aware of any particular
</span><br>
<span class="quotelev1">&gt; benefit to having the 64bit functions.
</span><br>
<p>What I'm suggesting is not to parse information out of the build host,
<br>
but rather using the configured toolchain and options and try to
<br>
assemble the 64-bit atomic instructions. This would make it easy to
<br>
rebuild a generic ARMv6 package to support 64-bit atomics by just adding
<br>
-march=armv6zk to CFLAGS.
<br>
<p>One use-case for the 64-bit atomics is in lockless list algorithms where
<br>
they let you update two pointers or a pointer and a semaphore
<br>
atomically. Whether such code would realistically use Open MPI
<br>
primitives, I'm not the right person to say.
<br>
<p>But this is not something that needs doing for this patch to be
<br>
accepted. If you can add the two comments, I'm happy for this to go in.
<br>
<p>/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leif
<br>
<p>-- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10935.php">Jeff Squyres: "[OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Previous message:</strong> <a href="10933.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Maybe in reply to:</strong> <a href="10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10940.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10940.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
