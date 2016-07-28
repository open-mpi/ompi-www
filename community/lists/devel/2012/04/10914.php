<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 11:44:44 2012" -->
<!-- isoreceived="20120424154444" -->
<!-- sent="Tue, 24 Apr 2012 16:45:35 +0100" -->
<!-- isosent="20120424154535" -->
<!-- name="Leif Lindholm" -->
<!-- email="leif.lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="000001cd2231$4a5f16a0$df1d43e0$_at_lindholm@arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="3D91BC38-B103-416E-8504-41A66E3B55A8_at_cisco.com" -->
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
<strong>Date:</strong> 2012-04-24 11:45:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10915.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329"</a>
<li><strong>Previous message:</strong> <a href="10913.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>In reply to:</strong> <a href="10895.php">Jeffrey Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10919.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Evan,
<br>
<p>And just to add to the delay, I've been off sick...
<br>
<p>First of all - thanks for the patch!
<br>
<p>The patch adds support for currently unsupported platforms, without actually
<br>
changing any code paths for currently supported platforms. So from that
<br>
perspective, I would not object strongly to it being applied as is.
<br>
<p>However, I do have a few minor comments on the code:
<br>
- The v5 code doesn't actually make use of the kuser helper barriers
<br>
&nbsp;&nbsp;in its versions of opal_atomic_cmpset_acq/rel.
<br>
- The line
<br>
&nbsp;&nbsp;+#if (OMPI_GCC_INLINE_ASSEMBLY || (OPAL_ASM_ARM_VERSION &lt; 6))
<br>
&nbsp;&nbsp;is correct, but does my head in. Could another define like
<br>
&nbsp;&nbsp;OPAL_ARM_KUSER_BARRIERS or similar be added by the barrier definition
<br>
&nbsp;&nbsp;and used here instead, to improve readability?
<br>
- Could you change the line
<br>
&nbsp;&nbsp;+#if (OPAL_ASM_ARM_VERSION &gt;= 6 &amp;&amp; OMPI_GCC_INLINE_ASSEMBLY)
<br>
&nbsp;&nbsp;to
<br>
&nbsp;&nbsp;+#if (OMPI_GCC_INLINE_ASSEMBLY &amp;&amp; (OPAL_ASM_ARM_VERSION &gt;= 6))
<br>
&nbsp;&nbsp;again for readability?
<br>
<p>And a few higher-level comments/suggestions:
<br>
- The patch does not do a runtime test for kernel helper version. While
<br>
&nbsp;&nbsp;normally not a problem, this could cause tricky to debug issues if 
<br>
&nbsp;&nbsp;running on top of old kernels (as in &quot;executing uninitialized
<br>
&nbsp;&nbsp;memory&quot; tricky).
<br>
&nbsp;&nbsp;Not sure what the best way to hook such a test in would be though.
<br>
- This patch does not include out-of-line assembly versions
<br>
&nbsp;&nbsp;(in opal/asm/base) for the atomic operations. However I am not sure
<br>
&nbsp;&nbsp;if this causes any practical problems.
<br>
- If 64-bit atomics are desirable, these are actually possible on most
<br>
&nbsp;&nbsp;ARMv6 platforms (including the Raspberry PI), so a configure test on
<br>
&nbsp;&nbsp;whether LDREXD assembles without errors could be used to detect this.
<br>
<p>Longer-term, I'd like to migrate to using the new GCC __atomic* intrinsics
<br>
(in 4.7 - <a href="http://gcc.gnu.org/wiki/Atomic/GCCMM">http://gcc.gnu.org/wiki/Atomic/GCCMM</a>). However, the old __sync*
<br>
intrinsic were a bit heavyweight so until 4.7 is ubiquitous I prefer to keep
<br>
the inline asm, and now the kuser calls.
<br>
<p>/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leif
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeffrey Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 19 April 2012 16:21
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers; Leif Lindholm
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [PATCH] Open MPI on ARMv5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Evan!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (sorry for the delay in replying -- I was on vacation all last week and
</span><br>
<span class="quotelev1">&gt; I'm *still* catching up...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lief -- does this look good to you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2012, at 11:13 PM, Evan Clinton wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; At present Open MPI only supports ARMv7 processors.  Attached is a
</span><br>
<span class="quotelev2">&gt; &gt; patch against current trunk (r26270) that extends the atomic
</span><br>
<span class="quotelev2">&gt; &gt; operations and memory barriers code to work with ARMv5 and ARMv6
</span><br>
<span class="quotelev1">&gt; ones,
</span><br>
<span class="quotelev2">&gt; &gt; too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For v6, the only changes were to use &quot;mcr p15, 0, r0, c7, c10, 5&quot;
</span><br>
<span class="quotelev2">&gt; &gt; instead of the unavailable DMB instruction, and to disable the 64 bit
</span><br>
<span class="quotelev2">&gt; &gt; compare-exchange function (which I understand is not vital for Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI on 32 bit platforms?).  For v5, it was a bit trickier; the
</span><br>
<span class="quotelev2">&gt; &gt; processor lacks nice memory barrier instructions or proper atomic
</span><br>
<span class="quotelev2">&gt; &gt; operations.  Fortunately, the Linux kernel offers several helper
</span><br>
<span class="quotelev2">&gt; &gt; functions on ARM, and I've used those here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The changes build and pass all of the assembly-related tests in the
</span><br>
<span class="quotelev2">&gt; &gt; test folder and the hello world examples run on my &quot;armv5tel&quot; box
</span><br>
<span class="quotelev2">&gt; &gt; running Debian with Linux 2.6.32-5.  It should also run fine on ARMv6
</span><br>
<span class="quotelev2">&gt; &gt; boxes, and presumably v4, but I don't have either to test on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Documentation for the Linux kernel helper functions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.kernel.org/?p=linux/kernel/git/torvalds/linux.git;a=blob;f=D">http://git.kernel.org/?p=linux/kernel/git/torvalds/linux.git;a=blob;f=D</a>
</span><br>
<span class="quotelev1">&gt; ocumentation/arm/kernel_user_helpers.txt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've sent in a contributor agreement so there should be no IP
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hopefully this is useful,
</span><br>
<span class="quotelev2">&gt; &gt; Evan Clinton
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ompi_armv5.diff&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10915.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26329"</a>
<li><strong>Previous message:</strong> <a href="10913.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>In reply to:</strong> <a href="10895.php">Jeffrey Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10919.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
