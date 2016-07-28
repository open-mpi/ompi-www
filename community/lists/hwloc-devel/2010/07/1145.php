<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 05:18:41 2010" -->
<!-- isoreceived="20100708091841" -->
<!-- sent="Thu, 8 Jul 2010 11:18:29 +0200" -->
<!-- isosent="20100708091829" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="201007081118.29591.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4C3495B6.5090906_at_inria.fr" -->
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
<strong>Date:</strong> 2010-07-08 05:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1146.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2300"</a>
<li><strong>Previous message:</strong> <a href="1144.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2291)"</a>
<li><strong>In reply to:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday, July 07, 2010 04:56:54 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 07/07/2010 13:48, Jirka Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I know that such mapping is artificial. However, it enables me to see
</span><br>
<span class="quotelev2">&gt; &gt; that hyper threading is enabled. I use it in my reports only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just compare the number of cores and the number of PUs. It should be
</span><br>
<span class="quotelev1">&gt; enough to know if each core has multiple threads. On some architectures
</span><br>
<span class="quotelev1">&gt; (power7), this may require recent kernels before everything shows up
</span><br>
<span class="quotelev1">&gt; properly. But on x86 and ia64, I think things should be fine.
</span><br>
Yes, I'm already doing this:-)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if some similar concept exists in hwloc. To be honest, I don't
</span><br>
<span class="quotelev2">&gt; &gt; know what the future of &quot;thread id&quot; in /proc/cpuinfo file is. It seems
</span><br>
<span class="quotelev2">&gt; &gt; to be only in /proc/cpuinfo for ia64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We currently have no room to store this thread id since it would likely
</span><br>
<span class="quotelev1">&gt; to go in the physical index of PU objects but we already store the
</span><br>
<span class="quotelev1">&gt; logical processor index there. But we could add some PU-specific
</span><br>
<span class="quotelev1">&gt; attributes to store it if somebody really needs this thread id.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo is highly non portable anyway, so it's not clear we really
</span><br>
<span class="quotelev1">&gt; want to look closely at what it contains. And parsing /sys is much
</span><br>
<span class="quotelev1">&gt; easier than /proc/cpuinfo. Do you see this thread_id in
</span><br>
<span class="quotelev1">&gt; /sys/devices/system/cpu/cpu%d/topology/ ?
</span><br>
<p>I agree that  /proc/cpuinfo is non portable. That's why we are moving to 
<br>
hwloc:-)
<br>
<p>I have checked 
<br>
/sys/devices/system/cpu/cpu%d/topology/
<br>
and there is no thread_id.
<br>
<p>So I my conclusion is that that it does not make sense to look into it 
<br>
further. 
<br>
<p>Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1146.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2300"</a>
<li><strong>Previous message:</strong> <a href="1144.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2291)"</a>
<li><strong>In reply to:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
