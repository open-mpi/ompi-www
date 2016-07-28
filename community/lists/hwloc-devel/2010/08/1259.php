<?
$subject_val = "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 07:46:14 2010" -->
<!-- isoreceived="20100809114614" -->
<!-- sent="Mon, 9 Aug 2010 07:47:24 -0400" -->
<!-- isosent="20100809114724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints" -->
<!-- id="395C00D9-22E7-4633-9DA1-C181E544DEC6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1281354113.12957.895.camel_at_kallies.zib.de" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 07:47:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1260.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1260.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1260.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 9, 2010, at 7:41 AM, Bernd Kallies wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Just curious: how can you have OFED installed without libibverbs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I know, with SLES11 the OFED things are provided via rpms, and
</span><br>
<span class="quotelev1">&gt; one may install them withour ibverbs. The installation itself is done by
</span><br>
<span class="quotelev1">&gt; our vendor. And since our vendor believed we don't need ibverbs, they
</span><br>
<span class="quotelev1">&gt; did not install it (by default). This made sense, because these machines
</span><br>
<span class="quotelev1">&gt; are big SMP machines, which need IB for Lustre only. MPI is done fully
</span><br>
<span class="quotelev1">&gt; via shared memory with a library that is proprietary to the vendor
</span><br>
<span class="quotelev1">&gt; (SGI).
</span><br>
<p>We're going a bit OT for the hwloc list, but that still sounds weird to me.  Doesn't Lustre use libibverbs?  libibverbs is the C API interface to iWARP/IB.  
<br>
<p>...or is Lustre using IPoIB?  (in which case nothing is using &quot;native&quot; iWARP/IB API access)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1260.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1260.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1260.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
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
