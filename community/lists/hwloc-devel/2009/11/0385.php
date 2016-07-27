<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 12:57:03 2009" -->
<!-- isoreceived="20091112175703" -->
<!-- sent="Thu, 12 Nov 2009 18:56:50 +0100" -->
<!-- isosent="20091112175650" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="4AFC4C62.40702_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C553FBCE-D4E6-4CD9-9243-36EA3ADA796A_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 12:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0386.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0387.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0387.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 12, 2009, at 9:25 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; There's certainly some desirable PLPA API features that could be
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; imported to the HWLOC API -- but I would think that if people
</span><br>
<span class="quotelev2">&gt;&gt; want to
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; keep using the PLPA API, they can.  It just won't [ever] be updated.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The existing (and future) hwloc API is the migration path forward --
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I'm not convinced that providing a new API that's halfway between
</span><br>
<span class="quotelev2">&gt;&gt; PLPA
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; and hwloc is worthwhile...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Agreed, let's just remove this and tell people to use
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_[sg]et_*cpubind.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean by &quot;this&quot;?  The whole plpa.h or just
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_plpa_sched_getaffinity?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02 / 0.01EUR: let's not try to emulate the PLPA API at all
</span><br>
<span class="quotelev1">&gt; (i.e., no hwloc_plpa_* functions).  Let's just take any good ideas
</span><br>
<span class="quotelev1">&gt; that were there and incorporate them into the future of the hwloc API
</span><br>
<span class="quotelev1">&gt; as appropriate.
</span><br>
<p>Well, the list of good ideas will be very short then :) Most remaining
<br>
functions are about manipulating core and socket ids, we don't need that
<br>
at all in hwloc anymore.
<br>
<p>My feeling is that converting an application from PLPA's
<br>
core_id/socket_id API into the hwloc API will be non-trivial. So at
<br>
least the current hwloc_plpa_* functions will be document a bit how to
<br>
switch to the hwloc API.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0386.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0387.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0387.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
