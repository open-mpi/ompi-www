<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 16:59:32 2015" -->
<!-- isoreceived="20150325205932" -->
<!-- sent="Wed, 25 Mar 2015 20:59:31 +0000" -->
<!-- isosent="20150325205931" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0" -->
<!-- id="B8D54596-2827-4156-8E8F-C1772931728A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150325200210.BFECB260B2D_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 16:59:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Previous message:</strong> <a href="17152.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Reply:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Reply:</strong> <a href="17156.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2015, at 3:02 PM, gitdub_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; +static inline int32_t opal_atomic_swap_32( volatile int32_t *addr,
</span><br>
<span class="quotelev1">&gt; +					   int32_t newval)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int32_t oldval;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    __asm__ __volatile__(&quot;xchg %1, %0&quot; :
</span><br>
<p>This code *looks* buggy because it lacks the &quot;SMPLOCK&quot; prefix, but can be safely omitted because &quot;xchg&quot; is always locked.  A comment to this effect should be added.
<br>
<p>Also, this should probably be &quot;xchgl&quot; instead of &quot;xchg&quot;.
<br>
<p><span class="quotelev1">&gt; +			 &quot;=r&quot; (oldval), &quot;=m&quot; (*addr) :
</span><br>
<p>Shouldn't the modifier on the second constraint above be &quot;+&quot; for the same reasons as the rest of this commit?  In that case I also think you can omit the second constraint below altogether, though I'm less sure about that.
<br>
<p><span class="quotelev1">&gt; +			 &quot;0&quot; (newval), &quot;m&quot; (*addr) :
</span><br>
<span class="quotelev1">&gt; +			 &quot;memory&quot;);
</span><br>
<span class="quotelev1">&gt; +    return oldval;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Previous message:</strong> <a href="17152.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Reply:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Reply:</strong> <a href="17156.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
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
