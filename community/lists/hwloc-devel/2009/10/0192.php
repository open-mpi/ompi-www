<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 08:11:55 2009" -->
<!-- isoreceived="20091021121155" -->
<!-- sent="Wed, 21 Oct 2009 14:10:21 +0200" -->
<!-- isosent="20091021121021" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="4ADEFA2D.1060706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B3B15252-8241-42AA-8703-78D070535383_at_cisco.com" -->
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
<strong>Date:</strong> 2009-10-21 08:10:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; FWIW: the name has been OpenFabrics / OFED for a few years now.  Not
</span><br>
<span class="quotelev1">&gt; that I wholly disagree -- we're still stuck with the &quot;openib&quot; module
</span><br>
<span class="quotelev1">&gt; name in Open MPI because we named it several years ago when it was
</span><br>
<span class="quotelev1">&gt; called OpenIB -- but I think the &quot;OpenFabrics&quot; name is pretty stable. 
</span><br>
<span class="quotelev1">&gt; OpenIB was an informal name that existed before there was an official
</span><br>
<span class="quotelev1">&gt; organization behind it.  OpenFabrics is the legal entity that was
</span><br>
<span class="quotelev1">&gt; created to support all things related to this technology, so I don't
</span><br>
<span class="quotelev1">&gt; think that name will be changing any time soon.  Indeed, there's a
</span><br>
<span class="quotelev1">&gt; *lot* of money put into the marketing and branding with the name
</span><br>
<span class="quotelev1">&gt; &quot;OpenFabrics&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There hasn't [yet?] been discussion of renaming &lt;infiniband/verbs.h&gt;
</span><br>
<span class="quotelev1">&gt; (or some of the other IB-centric struct/symbol names), but the whole
</span><br>
<span class="quotelev1">&gt; package is very definitely marketed as &quot;OpenFabrics verbs&quot;, not
</span><br>
<span class="quotelev1">&gt; &quot;InfiniBand verbs&quot; (although the IB vendors certainly don't correct
</span><br>
<span class="quotelev1">&gt; this misconception ;-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I still would like to rename this file before release.
</span><br>
<p>Ok :) I think I'd vote for some like ofed-verbs.h then, it'd match the
<br>
existing glibc-sched.h and linux-libnuma.h
<br>
<p><span class="quotelev1">&gt; By the way, this file actually only works for Linux so far. Unless we
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sun is porting the OpenFabrics verbs to Solaris (to replace their DAPL
</span><br>
<span class="quotelev1">&gt; stack).  There is also talk of porting the verbs API to MS Windows,
</span><br>
<span class="quotelev1">&gt; although I'm not tracking that effort at all.  If all this comes to
</span><br>
<span class="quotelev1">&gt; fruition, it'll be 3 different platforms that expose the same verbs API.
</span><br>
<p>I thought verbs already existed on more than Linux actually. What I
<br>
meant is that *our* ibverbs.h code is Linux specific (it uses a sysfs
<br>
specific nice feature of OFED/Linux). If we want to keep this file
<br>
portable, we'll need to port hwloc_ibverbs_get_device_cpuset() to
<br>
non-Linux OS one day, which means we need a #ifdef LINUX in this public
<br>
header. However, IIRC our #define LINUX_SYS is internal only so far.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
