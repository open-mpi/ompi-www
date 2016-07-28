<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 14:12:01 2010" -->
<!-- isoreceived="20101121191201" -->
<!-- sent="Sun, 21 Nov 2010 20:12:03 +0100" -->
<!-- isosent="20101121191203" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE96F03.1000806_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE96CF8.7020601_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-21 14:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/11/2010 20:03, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; On 22/11/10 05:45, Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'll try applying the same patch to the x86-64 build and doing
</span><br>
<span class="quotelev2">&gt; &gt; a --enable-debug build there and compare them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the strace and the source seems to show that
</span><br>
<span class="quotelev1">&gt; both builds enter the look_powerpc_device_tree() function
</span><br>
<span class="quotelev1">&gt; (they both access proc/device-tree/cpus) but then on the
</span><br>
<span class="quotelev1">&gt; PPC system it doesn't look any further, whilst on x86-64
</span><br>
<span class="quotelev1">&gt; it continues happily to look through the rest of the contents
</span><br>
<span class="quotelev1">&gt; of the extracted tar file.
</span><br>
<p>You might want to add some printf in hwloc_opendir like I did with
<br>
hwloc_access in my debug patch.
<br>
<p>I am fixing gather-topology to include empty directories in the tarball
<br>
and the linux code to not use sysfs when the topology directory is
<br>
empty. Debugging will be a bit mort clear then.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
