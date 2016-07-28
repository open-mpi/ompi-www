<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 10:58:48 2010" -->
<!-- isoreceived="20100707145848" -->
<!-- sent="Wed, 07 Jul 2010 16:56:54 +0200" -->
<!-- isosent="20100707145654" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="4C3495B6.5090906_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201007071348.52279.jhladky_at_redhat.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 10:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1143.php">Jirka Hladky: "Re: [hwloc-devel] Ad"</a>
<li><strong>Previous message:</strong> <a href="1141.php">Brice Goglin: "[hwloc-devel] Fwd: Ad"</a>
<li><strong>In reply to:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1145.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1145.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/07/2010 13:48, Jirka Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I know that such mapping is artificial. However, it enables me to see that 
</span><br>
<span class="quotelev1">&gt; hyper threading is enabled. I use it in my reports only.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Just compare the number of cores and the number of PUs. It should be
<br>
enough to know if each core has multiple threads. On some architectures
<br>
(power7), this may require recent kernels before everything shows up
<br>
properly. But on x86 and ia64, I think things should be fine.
<br>
<p><span class="quotelev1">&gt; I wonder if some similar concept exists in hwloc. To be honest, I don't know 
</span><br>
<span class="quotelev1">&gt; what the future of &quot;thread id&quot; in /proc/cpuinfo file is. It seems to be only in 
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo for ia64.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>We currently have no room to store this thread id since it would likely
<br>
to go in the physical index of PU objects but we already store the
<br>
logical processor index there. But we could add some PU-specific
<br>
attributes to store it if somebody really needs this thread id.
<br>
<p>/proc/cpuinfo is highly non portable anyway, so it's not clear we really
<br>
want to look closely at what it contains. And parsing /sys is much
<br>
easier than /proc/cpuinfo. Do you see this thread_id in
<br>
/sys/devices/system/cpu/cpu%d/topology/ ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1143.php">Jirka Hladky: "Re: [hwloc-devel] Ad"</a>
<li><strong>Previous message:</strong> <a href="1141.php">Brice Goglin: "[hwloc-devel] Fwd: Ad"</a>
<li><strong>In reply to:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1145.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1145.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
