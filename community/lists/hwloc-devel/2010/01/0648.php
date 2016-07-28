<?
$subject_val = "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 09:47:32 2010" -->
<!-- isoreceived="20100130144732" -->
<!-- sent="Sat, 30 Jan 2010 15:47:26 +0100" -->
<!-- isosent="20100130144726" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] processor restriction + lookup of pid for 1.0" -->
<!-- id="4B64467E.4080009_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100130143744.GF4798_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] processor restriction + lookup of pid for 1.0<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 09:47:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0649.php">Samuel Thibault: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Previous message:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Brice Goglin, le Sat 30 Jan 2010 15:32:51 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I still don't see much difference. In #12, you get_cpubind(pid=0) and
</span><br>
<span class="quotelev2">&gt;&gt; use the resulting cpuset to restrict our topology. In #21, you
</span><br>
<span class="quotelev2">&gt;&gt; get_cpubind(another pid) and apply the cpuset to restrict our topology
</span><br>
<span class="quotelev2">&gt;&gt; as well.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No: the administrative restriction cpuset is not the same as the current
</span><br>
<span class="quotelev1">&gt; cpuset binding of the target process.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Neither #12 nor #21 talks about adminstrative restriction...
<br>
<p>So we'd need this ?
<br>
1) hwloc_topology_from_cpu/membind(pid) (or cpuset as argument) =&gt;
<br>
restrict topology to given cpu/membind
<br>
2) hwloc_topology_get_from_pid(pid) reads both cpu/membind and
<br>
administrative restrictions from another process instead of current process
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0649.php">Samuel Thibault: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Previous message:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
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
