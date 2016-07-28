<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 08:20:30 2007" -->
<!-- isoreceived="20070711122030" -->
<!-- sent="Wed, 11 Jul 2007 06:20:22 -0600" -->
<!-- isosent="20070711122022" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="C2BA2726.9E2F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D18A23D8-EFCD-4B29-8451-D8082608EE2F_at_cisco.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 08:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1848.php">Gleb Natapov: "Re: [OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting point - no reason why we couldn't use that functionality for
<br>
this purpose. Good idea!
<br>
<p><p>On 7/11/07 5:38 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 10, 2007, at 1:26 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. It may be useful to have some high-level parameters to specify a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific run-time environment, since ORTE has multiple, related
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frameworks (e.g., RAS and PLS).  E.g., &quot;orte_base_launcher=tm&quot;, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somesuch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was just writing this up in an enhancement ticket when the though
</span><br>
<span class="quotelev1">&gt; hit me: isn't this aggregate MCA parameters?  I.e.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --am tm ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, we'll need to make a &quot;tm&quot; AMCA file (and whatever other
</span><br>
<span class="quotelev1">&gt; ones we want), but my point is: does AMCA already give us what we want?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1848.php">Gleb Natapov: "Re: [OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
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
