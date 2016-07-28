<?
$subject_val = "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 09:55:05 2010" -->
<!-- isoreceived="20100130145505" -->
<!-- sent="Sat, 30 Jan 2010 15:55:00 +0100" -->
<!-- isosent="20100130145500" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] processor restriction + lookup of pid for 1.0" -->
<!-- id="20100130145500.GJ4798_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B64467E.4080009_at_inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 09:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0649.php">Samuel Thibault: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>In reply to:</strong> <a href="0648.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0652.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Sat 30 Jan 2010 15:47:26 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Sat 30 Jan 2010 15:32:51 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I still don't see much difference. In #12, you get_cpubind(pid=0) and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; use the resulting cpuset to restrict our topology. In #21, you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; get_cpubind(another pid) and apply the cpuset to restrict our topology
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as well.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No: the administrative restriction cpuset is not the same as the current
</span><br>
<span class="quotelev2">&gt; &gt; cpuset binding of the target process.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Neither #12 nor #21 talks about adminstrative restriction...
</span><br>
<p>#21 implicitly does: &quot;what cpuset they're bound to&quot; is just an example.
<br>
A configuration function hwloc_topology_set_pid(topology, pid) would
<br>
mean that the discovery has to be done from the view of the given pid,
<br>
and thus the allowed_cpuset should be according to that view, thus
<br>
administrative restrictions.
<br>
<p><span class="quotelev1">&gt; So we'd need this ?
</span><br>
<span class="quotelev1">&gt; 1) hwloc_topology_from_cpu/membind(pid) (or cpuset as argument) =&gt;
</span><br>
<span class="quotelev1">&gt; restrict topology to given cpu/membind
</span><br>
<span class="quotelev1">&gt; 2) hwloc_topology_get_from_pid(pid) reads both cpu/membind and
</span><br>
<span class="quotelev1">&gt; administrative restrictions from another process instead of current process
</span><br>
<p>No need for these, they'd be contained in the hwloc_topology_set_pid()
<br>
configuration function, which is a more powerful way to do it.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0649.php">Samuel Thibault: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>In reply to:</strong> <a href="0648.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0652.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
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
