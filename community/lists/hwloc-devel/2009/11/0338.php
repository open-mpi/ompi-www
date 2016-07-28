<?
$subject_val = "[hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 11:22:43 2009" -->
<!-- isoreceived="20091105162243" -->
<!-- sent="Thu, 05 Nov 2009 17:22:15 +0100" -->
<!-- isosent="20091105162215" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="4AF2FBB7.7050009_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 11:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0339.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="0337.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0366.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0376.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've been looking at the PLPA API and here's what we could do to add a
<br>
hwloc/plpa.h offering kind of the same features.
<br>
<p><p><p>* PLPA-like API is prefixed with hwloc_plpa_ and all functions get a new
<br>
hwloc_topology_t parameter. The problematic ones are:
<br>
<p>+ int hwloc_plpa_sched_getaffinity(pid_t pid, hwloc_cpuset_t cpuset);
<br>
<p>It's just a hwloc_get_cpubind(), but we don't have it since it would not
<br>
be supported on all OS. But I think we should add it anyway.
<br>
<p>+ int hwloc_plpa_get_core_flags(hwloc_topology_t topology, int socket_id, int core_id, int *exists, int *online);
<br>
<p>Is says whether a core (given by core+socket os_index) exists and is
<br>
online. First, we don't have topology information about offline
<br>
processors. Secondly, on Nehalem you can disable a single thread within
<br>
a hyperthreaded core, so an &quot;offline core&quot; doesn't mean much. I would
<br>
just vote for returning whether the core exists and remove the online
<br>
return value here (see below for more about offline CPUs).
<br>
<p>+ int hwloc_plpa_map_to_processor_id(hwloc_topology_t topology, int socket_id, int core_id, int *processor_id);
<br>
<p>Return the os_index of the processor given by socket/core os_index. If
<br>
we have hyperthreading, all thread sibling are valid here. I would just
<br>
return the os_index of first one since this function was supposed to be
<br>
used for binding anyway.
<br>
<p><p><p><p>* Then we have all count-spec related API, which lets you look for
<br>
information about all processors, or all online ones, or all offline ones.
<br>
<p>If people are really interested with offline CPUs, they can look at the
<br>
get_offline_cpuset below. There is no topology information about offline
<br>
CPUs on Linux anyway, so I am not sure it's worth trying to manage
<br>
offline and online CPUs in a uniform way. I would rather remove the
<br>
count-spec argument and just only work on available/online/enabled
<br>
processors with:
<br>
<p>+ int hwloc_plpa_get_processor_data(hwloc_topology_t topology, int *num_processors, int *max_processor_id);
<br>
<p>+ int hwloc_plpa_get_processor_id(int processor_num, int *processor_id);
<br>
<p><p><p><p>* Probing
<br>
<p><span class="quotelev1">&gt;From what I understand, plpa_have_topology_information() tells whether
</span><br>
PLPA knows what's in the hardware, while plpa_api_probe() tells whether
<br>
binding is supported. We could add:
<br>
<p>+ hwloc_topology_support(hwloc_topology_t topology, unsigned *support)
<br>
<p>which fills &quot;support&quot; with a bitmask of things like OS is supported,
<br>
binding a thread is possible, binding a processor is possible, getting
<br>
the binding of a process is possible, ...
<br>
<p>Then we could reimplement
<br>
<p>+ int hwloc_plpa_have_topology_information(hwloc_topology_t topology);
<br>
+ int hwloc_plpa_api_probe(hwloc_topology_t topology);
<br>
<p><p><p><p>* New hwloc general-purpose helpers that will be used by PLPA wrappers
<br>
but may still be useful for other reasons:
<br>
<p>+ hwloc_obj_t hwloc_get_parent_obj_by_type(hwloc_topology_t topology, hwloc_obj_type_t type, hwloc_obj_t obj);
<br>
+ hwloc_obj_t hwloc_get_parent_obj_by_depth(hwloc_topology_t topology, unsigned depth, hwloc_obj_t obj);
<br>
<p>Walks the parent chain until it finds the right type (or depth).
<br>
<p>+ hwloc_obj_t hwloc_get_proc_obj_by_os_index(hwloc_topology_t topology, unsigned proc_os_index);
<br>
<p>Given a processor os_index, returns the corresponding object.
<br>
<p>+ hwloc_cpuset_t hwloc_topology_get_offline_cpuset(hwloc_topology_t topology);
<br>
<p>Returns a CPU set of existing CPUs that are offline, disabled by
<br>
administrator, or unavailable to this process if we're restricting the
<br>
topology to the process origin binding for instance. I am not sure we
<br>
actually need to distinguish all these cases.
<br>
<p><p><p><p>* Finally, I plan to reimplement the PLPA tools, either in tests/plpa/
<br>
or as a real (installed) tools for a transition period.
<br>
<p>+ plpa-info already works in my tree. Are there people that really need
<br>
it? &quot;lstopo -v -&quot; basically shows the same and even more (offline CPUs
<br>
are not reported in the trunk but I modified my tree to print the number
<br>
of offline CPUs and the corresponding cpuset).
<br>
<p>+ plpa-taskset needs a lot of work for convering its own cpuset stuff
<br>
into ours. It has an advanced binding syntax that some people may be
<br>
used to. hwloc-bind has an advanced but different syntax. Apart from
<br>
that, the features are the same.
<br>
<p><p><p>By the way, I wonder if we want to add public functions converting
<br>
between cpusets (0x0f00ffff) and cpulist string (0-15,24-27)
<br>
(plpa-taskset uses something like this).
<br>
<p><p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0339.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="0337.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0366.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0376.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
