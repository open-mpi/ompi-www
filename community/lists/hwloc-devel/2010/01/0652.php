<?
$subject_val = "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 10:01:33 2010" -->
<!-- isoreceived="20100130150133" -->
<!-- sent="Sat, 30 Jan 2010 16:01:28 +0100" -->
<!-- isosent="20100130150128" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] processor restriction + lookup of pid for 1.0" -->
<!-- id="20100130150128.GL4798_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100130145500.GJ4798_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2010-01-30 10:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0653.php">Brice Goglin: "[hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Sat 30 Jan 2010 15:55:00 +0100, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; 1) hwloc_topology_from_cpu/membind(pid) (or cpuset as argument) =&gt;
</span><br>
<span class="quotelev2">&gt; &gt; restrict topology to given cpu/membind
</span><br>
<span class="quotelev2">&gt; &gt; 2) hwloc_topology_get_from_pid(pid) reads both cpu/membind and
</span><br>
<span class="quotelev2">&gt; &gt; administrative restrictions from another process instead of current process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No need for these, they'd be contained in the hwloc_topology_set_pid()
</span><br>
<span class="quotelev1">&gt; configuration function, which is a more powerful way to do it.
</span><br>
<p>(plus an additional HWLOC_TOPOLOGY_FLAG_CURRENT_BINDING in
<br>
hwloc_topology_flags_e, which is the purpose of #12).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0653.php">Brice Goglin: "[hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
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
