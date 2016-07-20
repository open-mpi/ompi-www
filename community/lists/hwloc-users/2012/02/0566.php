<?
$subject_val = "Re: [hwloc-users] Hardware Topology";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 14:03:00 2012" -->
<!-- isoreceived="20120221190300" -->
<!-- sent="Tue, 21 Feb 2012 20:02:54 +0100" -->
<!-- isosent="20120221190254" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Hardware Topology" -->
<!-- id="20120221190254.GA4252_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="180510659.912884.1329850794858.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Hardware Topology<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 14:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0567.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Previous message:</strong> <a href="0565.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Maybe in reply to:</strong> <a href="0565.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0567.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Reply:</strong> <a href="0567.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
vaibhav dutt, le Tue 21 Feb 2012 19:59:54 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt;     The following is the Hardware topology of the compute node I am using, a
</span><br>
<span class="quotelev1">&gt;     obtained
</span><br>
<span class="quotelev1">&gt;     by using lstopo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Machine (16GB)
</span><br>
<span class="quotelev1">&gt;     &#160; Socket L#0
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160; L2 L#0 (6144KB)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160;&#160;&#160; L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160;&#160;&#160; L1 L#1 (32KB) + Core L#1 + PU L#1 (P#4)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160; L2 L#1 (6144KB)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160;&#160;&#160; L1 L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160;&#160;&#160; L1 L#3 (32KB) + Core L#3 + PU L#3 (P#6)
</span><br>
<span class="quotelev1">&gt;     &#160; Socket L#1
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160; L2 L#2 (6144KB)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160;&#160;&#160; L1 L#4 (32KB) + Core L#4 + PU L#4 (P#1)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160;&#160;&#160; L1 L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160; L2 L#3 (6144KB)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160;&#160;&#160; L1 L#6 (32KB) + Core L#6 + PU L#6 (P#3)
</span><br>
<span class="quotelev1">&gt;     &#160;&#160;&#160;&#160;&#160; L1 L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     It has 4 cores on each socket. But the cores like(0 and 4, 1 and 5 etc.)
</span><br>
<span class="quotelev1">&gt;     are to be considered on the same die?
</span><br>
<p>0 and 4 share the same L2 cache, and are on the same socket as 2 and 6.
<br>
Use lstopo -.txt, it'll probably be clearer.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0567.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Previous message:</strong> <a href="0565.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Maybe in reply to:</strong> <a href="0565.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0567.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Reply:</strong> <a href="0567.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
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
