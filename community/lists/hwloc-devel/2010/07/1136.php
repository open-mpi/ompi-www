<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 06:37:27 2010" -->
<!-- isoreceived="20100707103727" -->
<!-- sent="Wed, 7 Jul 2010 12:37:16 +0200" -->
<!-- isosent="20100707103716" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="201007071237.17355.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4C344702.3000902_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 06:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1137.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1135.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>In reply to:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1137.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1137.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I have tested the patch and I have verified that
<br>
<p>===================================
<br>
./hwloc-calc --list numanode proc:32
<br>
./hwloc-calc --list socket proc:63
<br>
./hwloc-calc --list core proc:63
<br>
===================================
<br>
<p>is working as expected. Thanks a lot!
<br>
<p>I have also tested depth argument for --list. (BTW, what has happened with 
<br>
hwloc-info? I cannot find it anymore. Is there some replacement?)
<br>
<p>===========================================
<br>
[root_at_intel-sunriseridge-02 utils]# hwloc-info (version 1.0.1!!!)
<br>
depth 0:        1 Machine (type #1)
<br>
&nbsp;depth 1:       3 NUMANodes (type #2)
<br>
&nbsp;&nbsp;depth 2:      4 Sockets (type #3)
<br>
&nbsp;&nbsp;&nbsp;depth 3:     4 Caches (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 4:    32 Caches (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 5:   32 Caches (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 6:  32 Cores (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 7: 64 PUs (type #6)
<br>
<p>Latest and patched version of hwloc:
<br>
<p>[root_at_intel-sunriseridge-02 utils]# ./hwloc-calc -v --list 4 proc:60
<br>
object #60 depth 7 below cpuset 0xffffffff,0xffffffff found
<br>
adding 0x08000000 to 0x0
<br>
adding 0x08000000 to 0x0
<br>
30
<br>
[root_at_intel-sunriseridge-02 utils]# ./hwloc-calc -v --list 5 proc:60
<br>
object #60 depth 7 below cpuset 0xffffffff,0xffffffff found
<br>
adding 0x08000000 to 0x0
<br>
adding 0x08000000 to 0x0
<br>
30
<br>
[root_at_intel-sunriseridge-02 utils]# ./hwloc-calc -v --list 6 proc:60
<br>
object #60 depth 7 below cpuset 0xffffffff,0xffffffff found
<br>
adding 0x08000000 to 0x0
<br>
adding 0x08000000 to 0x0
<br>
30
<br>
=============================================
<br>
<p>It works! :-) Just one question: I would expect Cache to be reported as well. 
<br>
At level 4-6 it reports Core #. Any comment on this?
<br>
<p><p>I have also tried --objects and it's behavior differ on different boxes:
<br>
**************************************************************************
<br>
=============Intel(R) Core(TM)2 Duo CPU=============
<br>
$./lstopo -
<br>
Machine (1952MB) + Socket #0 + L2 #0 (6144KB)
<br>
&nbsp;&nbsp;L1 #0 (32KB) + Core #0 + PU #0 (phys=0)
<br>
&nbsp;&nbsp;L1 #1 (32KB) + Core #1 + PU #1 (phys=1)
<br>
<p>$./hwloc-calc --objects proc:0
<br>
L1Cache:0
<br>
<p>$./hwloc-calc --objects core:0
<br>
L1Cache:0
<br>
<p>$./hwloc-calc --objects socket:0
<br>
Machine:0
<br>
<p>$./hwloc-calc --objects numanode:0
<br>
Machine:0
<br>
<p>$./hwloc-calc --objects machine:0
<br>
Machine:0
<br>
<p>================== NEHALEM box =================
<br>
[root_at_intel-sunriseridge-02 utils]# ./lstopo -
<br>
Machine (6042MB)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 1946MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket #0 + L3 #0 (24MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (256KB) + L1 #0 (32KB) + Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (256KB) + L1 #1 (32KB) + Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=36)
<br>
........ (stripped)
<br>
<p>./hwloc-calc --objects proc:0
<br>
PU:0
<br>
./hwloc-calc --objects socket:0
<br>
Socket:0
<br>
./hwloc-calc --objects node:0
<br>
NUMANode:0
<br>
./hwloc-calc --objects machine:0
<br>
Machine:0
<br>
==============================================
<br>
*************************************************************************************
<br>
<p>On Nehalem the output seems to be strange and I would say it's wrong. On the 
<br>
other hand, on Core2 Duo the output is right and useful.
<br>
<p><p><span class="quotelev2">&gt; &gt; hwloc-calc --nodelist --physical proc:0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; =&gt; gives nothing back on systems without NUMA. I would expect some
</span><br>
<span class="quotelev2">&gt; &gt; sort of error message on stderr.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-calc --nodelist --physical proc:120
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; =&gt;gives nothing back. On that system, there is NUMA but only 64
</span><br>
<span class="quotelev2">&gt; &gt; processors. I would expect error message &quot;proc:120 does not exist&quot;
</span><br>
<span class="quotelev2">&gt; &gt; reported on stderr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those errors are only reported when -v is given (as well as other
</span><br>
<span class="quotelev1">&gt; verbose messages). You're right, we should always show them.
</span><br>
Yes, you are right, -v works.
<br>
<p>Error handling (without -v) has been improved in case that NUMA does not exist 
<br>
at all.
<br>
$hwloc-calc --list numanode --physical proc:0
<br>
unavailable list type NUMANode
<br>
<p>You will still get no error mesage when you specify wrong processor which does 
<br>
not exist.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>BTW, you have added quite few new options:-) Any plans to release them?
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1137.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1135.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>In reply to:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1137.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1137.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
