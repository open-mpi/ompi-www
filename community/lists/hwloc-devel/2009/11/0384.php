<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 12:27:46 2009" -->
<!-- isoreceived="20091112172746" -->
<!-- sent="Thu, 12 Nov 2009 09:27:40 -0800" -->
<!-- isosent="20091112172740" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="C553FBCE-D4E6-4CD9-9243-36EA3ADA796A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091112172527.GK4729_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 12:27:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0385.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0383.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0385.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2009, at 9:25 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev3">&gt; &gt; &gt; There's certainly some desirable PLPA API features that could be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; imported to the HWLOC API -- but I would think that if people  
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; keep using the PLPA API, they can.  It just won't [ever] be  
</span><br>
<span class="quotelev1">&gt; updated.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The existing (and future) hwloc API is the migration path  
</span><br>
<span class="quotelev1">&gt; forward --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm not convinced that providing a new API that's halfway  
</span><br>
<span class="quotelev1">&gt; between PLPA
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and hwloc is worthwhile...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Agreed, let's just remove this and tell people to use  
</span><br>
<span class="quotelev1">&gt; hwloc_[sg]et_*cpubind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean by &quot;this&quot;?  The whole plpa.h or just
</span><br>
<span class="quotelev1">&gt; hwloc_plpa_sched_getaffinity?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>My $0.02 / 0.01EUR: let's not try to emulate the PLPA API at all  
<br>
(i.e., no hwloc_plpa_* functions).  Let's just take any good ideas  
<br>
that were there and incorporate them into the future of the hwloc API  
<br>
as appropriate.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0385.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0383.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0385.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
