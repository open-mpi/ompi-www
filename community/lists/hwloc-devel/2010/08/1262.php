<?
$subject_val = "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 07:33:11 2010" -->
<!-- isoreceived="20100813113311" -->
<!-- sent="Fri, 13 Aug 2010 13:33:06 +0200" -->
<!-- isosent="20100813113306" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints" -->
<!-- id="20100813113306.GB15512_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 07:33:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1263.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1261.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1255.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1263.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1263.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernd Kallies, le Fri 06 Aug 2010 18:13:06 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2360">https://svn.open-mpi.org/trac/hwloc/changeset/2360</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs is only used during make check when it's available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a problem with this philosophy. We provide hwloc on our
</span><br>
<span class="quotelev1">&gt; machines in a network filesystem at a unique path. All machines have
</span><br>
<span class="quotelev1">&gt; OFED installed, but some miss ibverbs.
</span><br>
<p>The changes above makes only the _tests_ use ibverbs, the hwloc library
<br>
won't use it any more.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1263.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1261.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1255.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1263.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1263.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
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
