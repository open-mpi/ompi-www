<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 01:31:56 2009" -->
<!-- isoreceived="20091021053156" -->
<!-- sent="Wed, 21 Oct 2009 07:30:22 +0200" -->
<!-- isosent="20091021053022" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="4ADE9C6E.2060903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CEED0F11-C7F2-4983-9363-CD990058BB19_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ibverbs -&gt; not just infiniband!<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 01:30:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0189.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0184.php">Jeff Squyres: "[hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I know this is somewhat pedantic, but I'd prefer to rename &quot;ibverbs*&quot;
</span><br>
<span class="quotelev1">&gt; to something else.  Technically, it's OpenFabrics verbs -- not
</span><br>
<span class="quotelev1">&gt; infiniband verbs -- which also includes at least 2 forms of ethernet
</span><br>
<span class="quotelev1">&gt; (iWARP and RDMAoE).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (working for an Ethernet-based company, I kinda have to say that :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any objections to me renaming this stuff?  I'm open
</span><br>
<span class="quotelev1">&gt; to suggestions on names -- e.g., ofverbs.h, or verbs.h, or
</span><br>
<span class="quotelev1">&gt; openfabrics-verbs.h, or some-other-even-longer-name-verbs.h, or ...?  
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<p>I named it ibverbs.h because it only works with infiniband/verbs.h
<br>
anyway. People will need the later to use it. That's why I like
<br>
ibverbs.h (or infiniband-verbs.h but it's very long). Apart from that, I
<br>
don't really care. At least the Infiniband name still exists, while
<br>
OpenIB/OFED/... is renamed almost every year :)
<br>
<p>By the way, this file actually only works for Linux so far. Unless we
<br>
are sure we could make it work for non-Linux OS one day (might need the
<br>
#ifdef LINUX to work in public headers), we could rename it to
<br>
hwloc/linux-...verbs.h
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0189.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0184.php">Jeff Squyres: "[hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
