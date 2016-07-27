<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 12:06:24 2010" -->
<!-- isoreceived="20100920160624" -->
<!-- sent="Mon, 20 Sep 2010 18:06:19 +0200" -->
<!-- isosent="20100920160619" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="20100920160619.GD6040_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C933C8A.7090706_at_au1.ibm.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 12:06:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1324.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2486)"</a>
<li><strong>Previous message:</strong> <a href="1322.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1301.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alexey Kardashevskiy, le Fri 17 Sep 2010 20:01:46 +1000, a &#233;crit :
<br>
<span class="quotelev1">&gt; Regarding topology walking - there is actually nothing device-tree 
</span><br>
<span class="quotelev1">&gt; special in reading strings and numbers from a device-tree, it is just 
</span><br>
<span class="quotelev1">&gt; common functions which (I think) should be placed in utils/misc.c. I 
</span><br>
<span class="quotelev1">&gt; named functions like hwloc_read_str.
</span><br>
<p>Well, there are still the opendir/readdir/etc. functions which are
<br>
linux-specific and could be implemented another way on another OS. But
<br>
as it is now it's probably simple enough for somebody who'd want to
<br>
abstract it.
<br>
<p><span class="quotelev1">&gt; Regarding open firmware and device trees - yes, it is IEEE1275 which can 
</span><br>
<span class="quotelev1">&gt; be implemented anywhere. However, in our case, there are IBM-specific 
</span><br>
<span class="quotelev1">&gt; properties (ibm,phandle, ibm,ppc-interrupt-server#s) which make all this 
</span><br>
<span class="quotelev1">&gt; very IBM specific. I do not know how to deal with it better.
</span><br>
<p>It should be fine as it is now: even if ibm,phandle and
<br>
ibm,ppc-interrupt-server#s are not there, the L1 cache information
<br>
should be properly detected.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1324.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2486)"</a>
<li><strong>Previous message:</strong> <a href="1322.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1301.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
