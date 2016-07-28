<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 04:28:35 2010" -->
<!-- isoreceived="20100303092835" -->
<!-- sent="Wed, 3 Mar 2010 10:28:30 +0100" -->
<!-- isosent="20100303092830" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="20100303092829.GC5779_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B8E244A.1060108_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0-rc1<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 04:28:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0707.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0705.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0705.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0707.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0707.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 03 Mar 2010 09:56:42 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I am asking people here, some are confused by all these
</span><br>
<span class="quotelev1">&gt; --logical/--physical outputs. One idea that came is to always keep the
</span><br>
<span class="quotelev1">&gt; logical index and print the physical index as an attribute. Something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ lstopo -
</span><br>
<span class="quotelev1">&gt; Machine(1508MB) + Socket#0 (phys=0) + L2(phys=0,2048KB)
</span><br>
<span class="quotelev1">&gt;   L1(phys=0,32KB) + Core#0(phys=0) + P#0(phys=0)
</span><br>
<span class="quotelev1">&gt;   L1(phys=1,32KB) + Core#1(phys=1) + P#1(phys=1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am interested by this idea. The physical index could actually be
</span><br>
<span class="quotelev1">&gt; displayed as an attribute for Proc all the time since it's often
</span><br>
<span class="quotelev1">&gt; interesting.
</span><br>
<p>And for NUMA nodes too I guess?
<br>
<p>However, what to show in the graphical output? Printing both indexes
<br>
will make the output very large. The usage I mostly have there is to
<br>
pass --physical, to print the physical indexes of NUMA nodes and procs.
<br>
<p><span class="quotelev1">&gt; The physical index of other objects is often useless and even
</span><br>
<span class="quotelev1">&gt; confusing.
</span><br>
<p>Right.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0707.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0705.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0705.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0707.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0707.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
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
