<?
$subject_val = "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 07:28:18 2010" -->
<!-- isoreceived="20100809112818" -->
<!-- sent="Mon, 9 Aug 2010 07:29:27 -0400" -->
<!-- isosent="20100809112927" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints" -->
<!-- id="20B2FDEE-DF3D-4E84-9027-216008D14F7A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1281111186.12957.554.camel_at_kallies.zib.de" -->
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
<strong>Date:</strong> 2010-08-09 07:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1256.php">Terry Dontje: "[hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1255.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2010, at 12:13 PM, Bernd Kallies wrote:
<br>
<p><span class="quotelev2">&gt; &gt; libibverbs is only used during make check when it's available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a problem with this philosophy. We provide hwloc on our
</span><br>
<span class="quotelev1">&gt; machines in a network filesystem at a unique path. All machines have
</span><br>
<span class="quotelev1">&gt; OFED installed, but some miss ibverbs. When building hwloc on a machine
</span><br>
<span class="quotelev1">&gt; with ibverbs, then things will not work on machines without ibverbs. So
</span><br>
<span class="quotelev1">&gt; I guess choice via configure is better. See attachments, if you are
</span><br>
<span class="quotelev1">&gt; interested (based on hwloc-1.0.2(stable)).
</span><br>
<p>Just curious: how can you have OFED installed without libibverbs?
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
<li><strong>Next message:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1256.php">Terry Dontje: "[hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1255.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1258.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
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
