<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 11:21:34 2012" -->
<!-- isoreceived="20120419152134" -->
<!-- sent="Thu, 19 Apr 2012 11:21:29 -0400" -->
<!-- isosent="20120419152129" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="3D91BC38-B103-416E-8504-41A66E3B55A8_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALQMFq1YgnyV8t=e2EZE1Vc-rHrsUjoiMuqK=7q96aX4mzQN0w_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 11:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>Previous message:</strong> <a href="10894.php">Ralph Castain: "[OMPI devel] June Developers Meeting"</a>
<li><strong>In reply to:</strong> <a href="10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10914.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10914.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Evan!
<br>
<p>(sorry for the delay in replying -- I was on vacation all last week and I'm *still* catching up...)
<br>
<p>Lief -- does this look good to you?
<br>
<p><p>On Apr 13, 2012, at 11:13 PM, Evan Clinton wrote:
<br>
<p><span class="quotelev1">&gt; At present Open MPI only supports ARMv7 processors.  Attached is a
</span><br>
<span class="quotelev1">&gt; patch against current trunk (r26270) that extends the atomic
</span><br>
<span class="quotelev1">&gt; operations and memory barriers code to work with ARMv5 and ARMv6 ones,
</span><br>
<span class="quotelev1">&gt; too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For v6, the only changes were to use &quot;mcr p15, 0, r0, c7, c10, 5&quot;
</span><br>
<span class="quotelev1">&gt; instead of the unavailable DMB instruction, and to disable the 64 bit
</span><br>
<span class="quotelev1">&gt; compare-exchange function (which I understand is not vital for Open
</span><br>
<span class="quotelev1">&gt; MPI on 32 bit platforms?).  For v5, it was a bit trickier; the
</span><br>
<span class="quotelev1">&gt; processor lacks nice memory barrier instructions or proper atomic
</span><br>
<span class="quotelev1">&gt; operations.  Fortunately, the Linux kernel offers several helper
</span><br>
<span class="quotelev1">&gt; functions on ARM, and I've used those here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The changes build and pass all of the assembly-related tests in the
</span><br>
<span class="quotelev1">&gt; test folder and the hello world examples run on my &quot;armv5tel&quot; box
</span><br>
<span class="quotelev1">&gt; running Debian with Linux 2.6.32-5.  It should also run fine on ARMv6
</span><br>
<span class="quotelev1">&gt; boxes, and presumably v4, but I don't have either to test on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Documentation for the Linux kernel helper functions:
</span><br>
<span class="quotelev1">&gt; <a href="http://git.kernel.org/?p=linux/kernel/git/torvalds/linux.git;a=blob;f=Documentation/arm/kernel_user_helpers.txt">http://git.kernel.org/?p=linux/kernel/git/torvalds/linux.git;a=blob;f=Documentation/arm/kernel_user_helpers.txt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've sent in a contributor agreement so there should be no IP problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully this is useful,
</span><br>
<span class="quotelev1">&gt; Evan Clinton
</span><br>
<span class="quotelev1">&gt; &lt;ompi_armv5.diff&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>Previous message:</strong> <a href="10894.php">Ralph Castain: "[OMPI devel] June Developers Meeting"</a>
<li><strong>In reply to:</strong> <a href="10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10914.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10914.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
