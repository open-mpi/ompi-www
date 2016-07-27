<?
$subject_val = "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 01:36:23 2011" -->
<!-- isoreceived="20111215063623" -->
<!-- sent="Thu, 15 Dec 2011 07:36:16 +0100" -->
<!-- isosent="20111215063616" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1" -->
<!-- id="4EE99560.5090105_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE9183F.40601_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 01:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2650.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2648.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc2r4063)"</a>
<li><strong>In reply to:</strong> <a href="2646.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2650.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2650.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/12/2011 22:42, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/14/2011 1:21 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The attached patch might work. I am not sure all this is actually
</span><br>
<span class="quotelev2">&gt;&gt; necessary because things have been working fine so far, apart from your
</span><br>
<span class="quotelev2">&gt;&gt; warnings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yup, the patch silences the warnings.  That was simpler than I had
</span><br>
<span class="quotelev1">&gt; anticipated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By the way, does lstopo show PCI devices on your machine even when you
</span><br>
<span class="quotelev2">&gt;&gt; have these warnings?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, the PCI device info looks complete even with the warnings.
</span><br>
<p>OK thanks again for all the testing. We'll have to make sure your name
<br>
appears in the 1.3.1 changelog :)
<br>
I committed the silence-warning patch but I will keep the other part for
<br>
now. I am a bit afraid of changing that much code in 1.3.1 without being
<br>
sure whether it's necessary.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2650.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2648.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc2r4063)"</a>
<li><strong>In reply to:</strong> <a href="2646.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2650.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2650.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
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
