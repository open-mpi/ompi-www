<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 07:38:10 2007" -->
<!-- isoreceived="20070711113810" -->
<!-- sent="Wed, 11 Jul 2007 07:38:00 -0400" -->
<!-- isosent="20070711113800" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="D18A23D8-EFCD-4B29-8451-D8082608EE2F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2B91D67.9DDA%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 07:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1844.php">Christoph Niethammer: "[OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="1840.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1847.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2007, at 1:26 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 2. It may be useful to have some high-level parameters to specify a
</span><br>
<span class="quotelev2">&gt;&gt; specific run-time environment, since ORTE has multiple, related
</span><br>
<span class="quotelev2">&gt;&gt; frameworks (e.g., RAS and PLS).  E.g., &quot;orte_base_launcher=tm&quot;, or
</span><br>
<span class="quotelev2">&gt;&gt; somesuch.
</span><br>
<p>I was just writing this up in an enhancement ticket when the though  
<br>
hit me: isn't this aggregate MCA parameters?  I.e.:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --am tm ...
<br>
<p>Specifically, we'll need to make a &quot;tm&quot; AMCA file (and whatever other  
<br>
ones we want), but my point is: does AMCA already give us what we want?
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
<li><strong>Next message:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1844.php">Christoph Niethammer: "[OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="1840.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1847.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
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
