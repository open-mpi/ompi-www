<?
$subject_val = "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 09:57:06 2010" -->
<!-- isoreceived="20100130145706" -->
<!-- sent="Sat, 30 Jan 2010 15:57:01 +0100" -->
<!-- isosent="20100130145701" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] processor restriction + lookup of pid for 1.0" -->
<!-- id="20100130145701.GK4798_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2010-01-30 09:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0665.php">Ashley Pittman: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0665.php">Ashley Pittman: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Sat 30 Jan 2010 15:55:00 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; #21 implicitly does: &quot;what cpuset they're bound to&quot; is just an example.
</span><br>
<span class="quotelev1">&gt; A configuration function hwloc_topology_set_pid(topology, pid) would
</span><br>
<span class="quotelev1">&gt; mean that the discovery has to be done from the view of the given pid,
</span><br>
<span class="quotelev1">&gt; and thus the allowed_cpuset should be according to that view, thus
</span><br>
<span class="quotelev1">&gt; administrative restrictions.
</span><br>
<p>Just to give an example: lstopo --pid 1234 would not only show where the
<br>
process is currently bound to, but also its allowed cpuset, which can be
<br>
useful when monitoring applications run by a batch scheduler or such.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0665.php">Ashley Pittman: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0665.php">Ashley Pittman: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
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
