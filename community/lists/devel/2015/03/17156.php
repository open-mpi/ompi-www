<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 18:22:19 2015" -->
<!-- isoreceived="20150325222219" -->
<!-- sent="Wed, 25 Mar 2015 16:22:18 -0600" -->
<!-- isosent="20150325222218" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0" -->
<!-- id="20150325222218.GH25043_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B8D54596-2827-4156-8E8F-C1772931728A_at_cisco.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 18:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17157.php">Gianmario Pozzi: "[OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17155.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>In reply to:</strong> <a href="17153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 25, 2015 at 08:59:31PM +0000, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; On Mar 25, 2015, at 3:02 PM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +static inline int32_t opal_atomic_swap_32( volatile int32_t *addr,
</span><br>
<span class="quotelev2">&gt; &gt; +					   int32_t newval)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    int32_t oldval;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    __asm__ __volatile__(&quot;xchg %1, %0&quot; :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This code *looks* buggy because it lacks the &quot;SMPLOCK&quot; prefix, but can be safely omitted because &quot;xchg&quot; is always locked.  A comment to this effect should be added.
</span><br>
<p>Sure. I will add comments to both the amd64 and ia32 atomics.
<br>
<p><span class="quotelev1">&gt; Also, this should probably be &quot;xchgl&quot; instead of &quot;xchg&quot;.
</span><br>
<p>Agreed, xchngl would be consistent with the nmemonics used elsewhere in
<br>
the ia32 atomics.
<br>
<p><span class="quotelev2">&gt; &gt; +			 &quot;=r&quot; (oldval), &quot;=m&quot; (*addr) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't the modifier on the second constraint above be &quot;+&quot; for the same reasons as the rest of this commit?  In that case I also think you can omit the second constraint below altogether, though I'm less sure about that.
</span><br>
<p>That is indeed the case. The code was C&amp;Ped from the amd64 atomics so I
<br>
left it as is. I will probably go through and cleanup all of the atomics
<br>
that have both &quot;=m&quot; &quot;m&quot;.
<br>
<p><p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17156/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17157.php">Gianmario Pozzi: "[OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17155.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>In reply to:</strong> <a href="17153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<!-- nextthread="start" -->
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
