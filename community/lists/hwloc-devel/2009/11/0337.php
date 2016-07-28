<?
$subject_val = "Re: [hwloc-devel] Pgcc issues fixed?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 07:59:00 2009" -->
<!-- isoreceived="20091105125900" -->
<!-- sent="Thu, 5 Nov 2009 07:58:58 -0500" -->
<!-- isosent="20091105125858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Pgcc issues fixed?" -->
<!-- id="4EF22F46-F67E-409D-96F4-9A76136D5837_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1185777762.5715091257392047336.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Pgcc issues fixed?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 07:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1286"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0351.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0351.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem may go away if we adapt PLPA's approach to sched_[set| 
<br>
get]affinity.
<br>
<p><p>On Nov 4, 2009, at 10:34 PM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Chris Samuel&quot; &lt;csamuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; K.  Clear for a final rc / release?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Go for it, am just about to go run a training course
</span><br>
<span class="quotelev2">&gt; &gt; now so won't be available until this arvo Melbourne
</span><br>
<span class="quotelev2">&gt; &gt; time..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems fine with PGI, Intel and GCC on AMD64, so I
</span><br>
<span class="quotelev1">&gt; thought I'd give it a whirl on our old SLES9 PPC64
</span><br>
<span class="quotelev1">&gt; cluster with XLC, that whinges about the usual params
</span><br>
<span class="quotelev1">&gt; unused, but also says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;topology-linux.c&quot;, line 146.33: 1506-280 (W) Function argument  
</span><br>
<span class="quotelev1">&gt; assignment between types &quot;unsigned int&quot; and &quot;struct {...}*&quot; is not  
</span><br>
<span class="quotelev1">&gt; allowed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt;  The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt;  P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt; VPAC is a not-for-profit Registered Research Agency
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1286"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0351.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0351.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
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
