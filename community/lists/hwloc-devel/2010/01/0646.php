<?
$subject_val = "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 09:32:57 2010" -->
<!-- isoreceived="20100130143257" -->
<!-- sent="Sat, 30 Jan 2010 15:32:51 +0100" -->
<!-- isosent="20100130143251" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] processor restriction + lookup of pid for 1.0" -->
<!-- id="4B644313.4020508_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100130141706.GC4798_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2010-01-30 09:32:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0645.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0645.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Brice Goglin, le Fri 29 Jan 2010 22:48:13 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am looking at the remaining tickets for v1.0. Assuming there are no
</span><br>
<span class="quotelev2">&gt;&gt; &quot;critical&quot; warning anymore, and assuming we have done enough for people
</span><br>
<span class="quotelev2">&gt;&gt; to combine network topologies (manually for now), only 2 ticket remains:
</span><br>
<span class="quotelev2">&gt;&gt; #12 support user-defined processor restriction
</span><br>
<span class="quotelev2">&gt;&gt; #21 Allow lookup of specific PIDs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand #12 but I am not sure what #21 actually needs. We would do
</span><br>
<span class="quotelev2">&gt;&gt; a get_cpubind(pid) and then what ? Do a processor restriction as defined
</span><br>
<span class="quotelev2">&gt;&gt; in #12 ?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a difference between the current CPU binding (#12) and
</span><br>
<span class="quotelev1">&gt; detecting the topology as if being called from another process (and
</span><br>
<span class="quotelev1">&gt; getting a different view of the machine because of different applied
</span><br>
<span class="quotelev1">&gt; cpusets, etc.)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I still don't see much difference. In #12, you get_cpubind(pid=0) and
<br>
use the resulting cpuset to restrict our topology. In #21, you
<br>
get_cpubind(another pid) and apply the cpuset to restrict our topology
<br>
as well.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0645.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0645.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0647.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
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
