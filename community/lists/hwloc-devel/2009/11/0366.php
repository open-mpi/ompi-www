<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 20:46:30 2009" -->
<!-- isoreceived="20091112014630" -->
<!-- sent="Thu, 12 Nov 2009 02:46:25 +0100" -->
<!-- isosent="20091112014625" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="20091112014625.GM4729_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AF2FBB7.7050009_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 20:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0367.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1335)"</a>
<li><strong>Previous message:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0376.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 05 Nov 2009 17:22:15 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; + int hwloc_plpa_sched_getaffinity(pid_t pid, hwloc_cpuset_t cpuset);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's just a hwloc_get_cpubind(), but we don't have it since it would not
</span><br>
<span class="quotelev1">&gt; be supported on all OS. But I think we should add it anyway.
</span><br>
<p>Being discussed in another thread.
<br>
<p><span class="quotelev1">&gt; * Then we have all count-spec related API, which lets you look for
</span><br>
<span class="quotelev1">&gt; information about all processors, or all online ones, or all offline ones.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If people are really interested with offline CPUs, they can look at the
</span><br>
<span class="quotelev1">&gt; get_offline_cpuset below. There is no topology information about offline
</span><br>
<span class="quotelev1">&gt; CPUs on Linux anyway,
</span><br>
<p>And at least on some other OSes as well, but not on Solaris for
<br>
instance.
<br>
<p><span class="quotelev1">&gt; + hwloc_cpuset_t hwloc_topology_get_offline_cpuset(hwloc_topology_t topology);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Returns a CPU set of existing CPUs that are offline, disabled by
</span><br>
<span class="quotelev1">&gt; administrator, or unavailable to this process if we're restricting the
</span><br>
<span class="quotelev1">&gt; topology to the process origin binding for instance. I am not sure we
</span><br>
<span class="quotelev1">&gt; actually need to distinguish all these cases.
</span><br>
<p>Mmm, I think there's one more thing that is actually more precise in
<br>
some way: &quot;the CPUs that we don't provide topology objects for&quot;: some
<br>
OSes don't expose unauthorized CPUs even if they are online.  It would
<br>
thus also include CPUs which have explicitly been ignored because
<br>
HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM is not set.
<br>
<p>I think it can be useful to provide the cpuset of allowed cpus.  One
<br>
could imagine a tool that negociates with the administrator tools
<br>
which cpus to be added/removed from the allowed set, knowing the whole
<br>
topology and which CPUs are allowed would be useful.  Maybe powering
<br>
up/down could be involved too, thus the offline mask too.  The current
<br>
binding is already available from hwloc_get_cpubind.
<br>
<p>Actually, that gives me the idea that it'd be probably nice to somehow
<br>
show that in the graphical lstopo :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0367.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1335)"</a>
<li><strong>Previous message:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0376.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
