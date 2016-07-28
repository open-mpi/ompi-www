<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 20:53:36 2012" -->
<!-- isoreceived="20120425005336" -->
<!-- sent="Tue, 24 Apr 2012 20:53:31 -0400" -->
<!-- isosent="20120425005331" -->
<!-- name="Evan Clinton" -->
<!-- email="evan.m.clinton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="CALQMFq0kJHsdzDm5i-mFV5F-=r7ORzOUwDgEB2U+5FMocA-9gQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4f96ca69.8255b40a.0fc1.ffff9787SMTPIN_ADDED_at_mx.google.com" -->
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
<strong>From:</strong> Evan Clinton (<em>evan.m.clinton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 20:53:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10920.php">Alex Margolin: "[OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10918.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r26329"</a>
<li><strong>Maybe in reply to:</strong> <a href="10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Leif, thanks for the comments.
<br>
<p><span class="quotelev1">&gt; - The v5 code doesn't actually make use of the kuser helper barriers
</span><br>
<span class="quotelev1">&gt;  in its versions of opal_atomic_cmpset_acq/rel.
</span><br>
Quote the documentation, __kuser_cmpxchg &quot;already includes memory
<br>
barriers as needed,&quot; so the code using it shouldn't need anything
<br>
extra.
<br>
<p><span class="quotelev1">&gt; - The line
</span><br>
<span class="quotelev1">&gt;  +#if (OMPI_GCC_INLINE_ASSEMBLY || (OPAL_ASM_ARM_VERSION &lt; 6))
</span><br>
<span class="quotelev1">&gt;  is correct, but does my head in. Could another define like
</span><br>
<span class="quotelev1">&gt;  OPAL_ARM_KUSER_BARRIERS or similar be added by the barrier definition
</span><br>
<span class="quotelev1">&gt;  and used here instead, to improve readability?
</span><br>
<span class="quotelev1">&gt; - Could you change the line
</span><br>
<span class="quotelev1">&gt;  +#if (OPAL_ASM_ARM_VERSION &gt;= 6 &amp;&amp; OMPI_GCC_INLINE_ASSEMBLY)
</span><br>
<span class="quotelev1">&gt;  to
</span><br>
<span class="quotelev1">&gt;  +#if (OMPI_GCC_INLINE_ASSEMBLY &amp;&amp; (OPAL_ASM_ARM_VERSION &gt;= 6))
</span><br>
<span class="quotelev1">&gt;  again for readability?
</span><br>
Tweaked the patch, should be a little nicer now.
<br>
<p><span class="quotelev1">&gt; - The patch does not do a runtime test for kernel helper version. While
</span><br>
<span class="quotelev1">&gt;  normally not a problem, this could cause tricky to debug issues if
</span><br>
<span class="quotelev1">&gt;  running on top of old kernels (as in &quot;executing uninitialized
</span><br>
<span class="quotelev1">&gt;  memory&quot; tricky).
</span><br>
I'm not familiar enough with the codebase to know where it should go,
<br>
and I suspect the obvious check based on the __kuser_helper_version
<br>
will not be available on kernels much older than the ones with the
<br>
features we need anyway.  We'd only have a problem on kernels older
<br>
than 2.6.15, which was released in January of 2006, and I'm only
<br>
confident we'd have __kuser_help_version from 2.6.12 onward.
<br>
<p><span class="quotelev1">&gt; - This patch does not include out-of-line assembly versions
</span><br>
<span class="quotelev1">&gt;  (in opal/asm/base) for the atomic operations. However I am not sure
</span><br>
<span class="quotelev1">&gt;  if this causes any practical problems.
</span><br>
As far as I can tell, this isn't an issue, since no actual new
<br>
assembly is added or changed.
<br>
<p><span class="quotelev1">&gt; - If 64-bit atomics are desirable, these are actually possible on most
</span><br>
<span class="quotelev1">&gt;  ARMv6 platforms (including the Raspberry PI), so a configure test on
</span><br>
<span class="quotelev1">&gt;  whether LDREXD assembles without errors could be used to detect this.
</span><br>
I'd add another case to the architecture detection in the config
<br>
script, but I'm not sure what strings to match on (i.e. uname outputs)
<br>
for detecting presence of LDREXD, and I'm not aware of any particular
<br>
benefit to having the 64bit functions.
<br>
<p>New patch against current trunk (r26333) attached.
<br>
<p>(sorry Leif and possibly Jeffrey if I double-posted, messed up some
<br>
address stuff)
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10919/ompi_armv5-2nd.diff">ompi_armv5-2nd.diff</a>
</ul>
<!-- attachment="ompi_armv5-2nd.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10920.php">Alex Margolin: "[OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10918.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r26329"</a>
<li><strong>Maybe in reply to:</strong> <a href="10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
