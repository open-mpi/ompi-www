<?
$subject_val = "Re: [hwloc-users] [EXTERNAL] hwloc_get_latency() failures and confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 17:54:35 2012" -->
<!-- isoreceived="20120806215435" -->
<!-- sent="Mon, 6 Aug 2012 21:54:13 +0000" -->
<!-- isosent="20120806215413" -->
<!-- name="Wheeler, Kyle Bruce" -->
<!-- email="kbwheel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [EXTERNAL] hwloc_get_latency() failures and confusion" -->
<!-- id="2367E49CF1319C4FAF0E51EC778BD33126805CC9_at_EXMB03.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2367E49CF1319C4FAF0E51EC778BD33126804C51_at_EXMB03.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [EXTERNAL] hwloc_get_latency() failures and confusion<br>
<strong>From:</strong> Wheeler, Kyle Bruce (<em>kbwheel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 17:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0657.php">Wheeler, Kyle Bruce: "[hwloc-users] hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0657.php">Wheeler, Kyle Bruce: "[hwloc-users] hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_latency() failures and confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would add that the hwloc_distances_s returned by hwloc_get_whole_distance_matrix_by_depth(topology, 0) is: { 0, 0, 0x0, 0, 0 }
<br>
<p>On Aug 6, 2012, at 3:47 PM, Wheeler, Kyle Bruce wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm failing to understand what hwloc (v1.5) is doing. I'm trying to use hwloc_get_latency() to determine the distance between two cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The two cores are on different sockets. According to libnuma's numactl, the latency between the two sockets is 20, whereas between cores on the same socket is 10. According to hwloc-ls -v, the latency is 2.0, whereas between cores on the same socket is 1.0. Thus, I know that hwloc is getting topology information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, programmatically, hwloc_get_latency() just returns -1. I tried using hwloc_get_whole_distance_matrix_by_depth(), and found that the distance matrix is only defined for depth 0, which, according to hwloc_obj_type_string(hwloc_get_depth_type(topology, 0)) is &quot;Machine&quot;. Now, the documentation for hwloc_get_whole_distance_matrix_by_depth() says it returns &quot;a distances structure containing a matrix with all distances between all objects at the given depth&quot;. Given that I only have one object that depth 0 (just the one machine), what does this mean? If I try with depth 1 (aka &quot;NUMANode&quot; or HWLOC_OBJ_NODE), I get NULL back, suggesting that there is no matrix of distances between NUMANodes. Of course, that's not true; hwloc-ls reports that matrix! So what's going on here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And why is hwloc_get_latency() failing?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kyle B. Wheeler
</span><br>
<span class="quotelev1">&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 505-844-0394
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Kyle B. Wheeler
Dept. 1423: Scalable System Software
Sandia National Laboratories
505-844-0394
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0657.php">Wheeler, Kyle Bruce: "[hwloc-users] hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0657.php">Wheeler, Kyle Bruce: "[hwloc-users] hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_latency() failures and confusion"</a>
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
