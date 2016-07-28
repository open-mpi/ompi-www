<?
$subject_val = "Re: [OMPI devel] SM component init unload";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 15:45:05 2012" -->
<!-- isoreceived="20120703194505" -->
<!-- sent="Tue, 3 Jul 2012 13:44:57 -0600" -->
<!-- isosent="20120703194457" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM component init unload" -->
<!-- id="75A23390-EBB8-43A5-92B0-0B3703C07FBC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="003B5442-0B81-4B9A-AD62-7F7DAA925C48_at_unex.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM component init unload<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 15:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11226.php">Juan A. Rico: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11226.php">Juan A. Rico: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11226.php">Juan A. Rico: "Re: [OMPI devel] SM component init unload"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting - yes, coll sm doesn't think they are on the same node for some reason. Try adding -mca grpcomm_base_verbose 5 and let's see why
<br>
<p><p>On Jul 3, 2012, at 1:24 PM, Juan Antonio Rico Gallego wrote:
<br>
<p><span class="quotelev1">&gt; The code I run is a simple broadcast. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I do not specify components to run, the output is (more verbose):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jarico_at_Metropolis-01 examples]$ /home/jarico/shared/packages/openmpi-cas-dbg/bin/mpiexec --mca mca_base_verbose 100 --mca mca_coll_base_output 100  --mca coll_sm_priority 99 -mca hwloc_base_verbose 90 --display-map --mca mca_verbose 100 --mca mca_base_verbose 100 --mca coll_base_verbose 100 -n 2 ./bmem
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24490] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24490] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24490] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24490] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24490] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24490] hwloc:base:get_topology
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24490] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: Metropolis-01	Num procs: 2
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [36336,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [36336,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] locality: CL:CU:N:B
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: Looking for coll components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: opening coll components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component tuned has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:tuned:component_open: done!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component tuned open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component sm register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component sm has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component libnbc register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component libnbc open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component hierarch has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component hierarch open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component basic register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component basic has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component inter has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component inter open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] locality: CL:CU:N:B
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: Looking for coll components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: opening coll components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component tuned has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:tuned:component_open: done!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component tuned open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component sm register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component sm has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component libnbc register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component libnbc open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component hierarch has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component hierarch open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component basic register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component basic has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component inter has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component inter open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: querying coll component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: coll component tuned is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: querying coll component sm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: coll component sm is not available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: querying coll component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: coll component libnbc is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: querying coll component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: coll component hierarch is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: querying coll component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: coll component basic is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: querying coll component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: querying coll component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: coll component tuned is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: querying coll component sm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: coll component sm is not available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: querying coll component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: coll component libnbc is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: querying coll component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: coll component hierarch is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: querying coll component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: coll component basic is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: querying coll component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: coll component inter is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: querying coll component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:find_available: coll component self is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: coll component inter is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: querying coll component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:find_available: coll component self is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:tuned:module_init called.
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:tuned:module_init called.
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:tuned:component_close: called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:tuned:component_close: done!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:tuned:component_close: called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] coll:tuned:component_close: done!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: close: component tuned closed
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: close: unloading component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: close: component libnbc closed
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: close: unloading component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: close: unloading component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: close: unloading component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: close: unloading component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24492] mca: base: close: unloading component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: close: component tuned closed
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: close: unloading component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: close: component libnbc closed
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: close: unloading component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: close: unloading component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: close: unloading component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: close: unloading component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] mca: base: close: unloading component self
</span><br>
<span class="quotelev1">&gt; [jarico_at_Metropolis-01 examples]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SM is not load because it detects no other processes in the same machine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24491] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The machine is a multicore machine with 8 cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to run SM component code, and I suppose that raising priority it will be the component selected when problem is solved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; El 03/07/2012, a las 21:01, Jeff Squyres escribi&#243;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The issue is that the &quot;sm&quot; coll component only implements a few of the MPI collective operations.  It is usually mixed at run-time with other coll components to fill out the rest of the MPI collective operations.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So what is happening is that OMPI is determining that it doesn't have implementations of all the MPI collective operations and aborting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You shouldn't need to manually select your coll module -- OMPI should automatically select the right collective module for you.  E.g., if all procs are local on a single machine and sm has a matching implementation for that MPI collective operation, it'll be used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 3, 2012, at 2:48 PM, Juan Antonio Rico Gallego wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Output is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15355] hwloc:base:get_topology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15355] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Metropolis-01	Num procs: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [59809,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [59809,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15356] locality: CL:CU:N:B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base: get available cpus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15357] locality: CL:CU:N:B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base: get available cpus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Juan A. Rico
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11226.php">Juan A. Rico: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11226.php">Juan A. Rico: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11226.php">Juan A. Rico: "Re: [OMPI devel] SM component init unload"</a>
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
