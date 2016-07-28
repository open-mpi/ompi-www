<?
$subject_val = "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 09:17:13 2010" -->
<!-- isoreceived="20100130141713" -->
<!-- sent="Sat, 30 Jan 2010 15:17:06 +0100" -->
<!-- isosent="20100130141706" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] processor restriction + lookup of pid for 1.0" -->
<!-- id="20100130141706.GC4798_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B63579D.5020906_at_inria.fr" -->
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
<strong>Date:</strong> 2010-01-30 09:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0646.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0644.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1707)"</a>
<li><strong>In reply to:</strong> <a href="0643.php">Brice Goglin: "[hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0646.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0646.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Fri 29 Jan 2010 22:48:13 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I am looking at the remaining tickets for v1.0. Assuming there are no
</span><br>
<span class="quotelev1">&gt; &quot;critical&quot; warning anymore, and assuming we have done enough for people
</span><br>
<span class="quotelev1">&gt; to combine network topologies (manually for now), only 2 ticket remains:
</span><br>
<span class="quotelev1">&gt; #12 support user-defined processor restriction
</span><br>
<span class="quotelev1">&gt; #21 Allow lookup of specific PIDs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand #12 but I am not sure what #21 actually needs. We would do
</span><br>
<span class="quotelev1">&gt; a get_cpubind(pid) and then what ? Do a processor restriction as defined
</span><br>
<span class="quotelev1">&gt; in #12 ?
</span><br>
<p>There is a difference between the current CPU binding (#12) and
<br>
detecting the topology as if being called from another process (and
<br>
getting a different view of the machine because of different applied
<br>
cpusets, etc.)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0646.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0644.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1707)"</a>
<li><strong>In reply to:</strong> <a href="0643.php">Brice Goglin: "[hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0646.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0646.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
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
