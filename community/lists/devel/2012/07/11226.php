<?
$subject_val = "Re: [OMPI devel] SM component init unload";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 15:50:08 2012" -->
<!-- isoreceived="20120703195008" -->
<!-- sent="Tue, 3 Jul 2012 21:50:05 +0200" -->
<!-- isosent="20120703195005" -->
<!-- name="Juan A. Rico" -->
<!-- email="jarico_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM component init unload" -->
<!-- id="A58AD23F-4674-499C-860B-C3B1D2DD56C0_at_unex.es" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="75A23390-EBB8-43A5-92B0-0B3703C07FBC_at_open-mpi.org" -->
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
<strong>From:</strong> Juan A. Rico (<em>jarico_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 15:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11225.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11225.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11229.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the output.
<br>
<p>[jarico_at_Metropolis-01 examples]$ /home/jarico/shared/packages/openmpi-cas-dbg/bin/mpiexec --bind-to-core --bynode --mca mca_base_verbose 100 --mca mca_coll_base_output 100  --mca coll_sm_priority 99 -mca hwloc_base_verbose 90 --display-map --mca mca_verbose 100 --mca mca_base_verbose 100 --mca coll_base_verbose 100 -n 2 -mca grpcomm_base_verbose 5 ./bmem
<br>
[Metropolis-01:24563] mca: base: components_open: Looking for hwloc components
<br>
[Metropolis-01:24563] mca: base: components_open: opening hwloc components
<br>
[Metropolis-01:24563] mca: base: components_open: found loaded component hwloc142
<br>
[Metropolis-01:24563] mca: base: components_open: component hwloc142 has no register function
<br>
[Metropolis-01:24563] mca: base: components_open: component hwloc142 has no open function
<br>
[Metropolis-01:24563] hwloc:base:get_topology
<br>
[Metropolis-01:24563] hwloc:base: no cpus specified - using root available cpuset
<br>
[Metropolis-01:24563] mca:base:select:(grpcomm) Querying component [bad]
<br>
[Metropolis-01:24563] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
<br>
[Metropolis-01:24563] mca:base:select:(grpcomm) Selected component [bad]
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:receive start comm
<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  Metropolis-01
<br>
<p>This is a warning only; your job will continue, though performance may
<br>
be degraded.
<br>
--------------------------------------------------------------------------
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24563] hwloc:base:get_nbojbs computed data 8 of Core:0
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24563] hwloc:base: get available cpus
<br>
[Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Metropolis-01	Num procs: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36265,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36265,1] App: 0 Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,0] tag 1
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:xcast updating daemon nidmap
<br>
[Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
<br>
[Metropolis-01:24564] mca: base: components_open: Looking for hwloc components
<br>
[Metropolis-01:24564] mca: base: components_open: opening hwloc components
<br>
[Metropolis-01:24564] mca: base: components_open: found loaded component hwloc142
<br>
[Metropolis-01:24564] mca: base: components_open: component hwloc142 has no register function
<br>
[Metropolis-01:24564] mca: base: components_open: component hwloc142 has no open function
<br>
[Metropolis-01:24565] mca: base: components_open: Looking for hwloc components
<br>
[Metropolis-01:24565] mca: base: components_open: opening hwloc components
<br>
[Metropolis-01:24565] mca: base: components_open: found loaded component hwloc142
<br>
[Metropolis-01:24565] mca: base: components_open: component hwloc142 has no register function
<br>
[Metropolis-01:24565] mca: base: components_open: component hwloc142 has no open function
<br>
[Metropolis-01:24564] mca:base:select:(grpcomm) Querying component [bad]
<br>
[Metropolis-01:24564] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
<br>
[Metropolis-01:24564] mca:base:select:(grpcomm) Selected component [bad]
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive start comm
<br>
[Metropolis-01:24564] computing locality - getting object at level CORE, index 0
<br>
[Metropolis-01:24564] hwloc:base: get available cpus
<br>
[Metropolis-01:24564] hwloc:base:get_available_cpus first time - filtering cpus
<br>
[Metropolis-01:24564] hwloc:base: no cpus specified - using root available cpuset
<br>
[Metropolis-01:24564] computing locality - getting object at level CORE, index 1
<br>
[Metropolis-01:24564] hwloc:base: get available cpus
<br>
[Metropolis-01:24564] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24564] computing locality - shifting up from L1CACHE
<br>
[Metropolis-01:24564] computing locality - shifting up from L2CACHE
<br>
[Metropolis-01:24564] computing locality - shifting up from L3CACHE
<br>
[Metropolis-01:24564] computing locality - filling level SOCKET
<br>
[Metropolis-01:24564] computing locality - filling level NUMA
<br>
[Metropolis-01:24564] locality: CL:CU:N:B:Nu:S
<br>
[Metropolis-01:24565] mca:base:select:(grpcomm) Querying component [bad]
<br>
[Metropolis-01:24565] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
<br>
[Metropolis-01:24565] mca:base:select:(grpcomm) Selected component [bad]
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive start comm
<br>
[Metropolis-01:24564] mca: base: components_open: Looking for coll components
<br>
[Metropolis-01:24564] mca: base: components_open: opening coll components
<br>
[Metropolis-01:24564] mca: base: components_open: found loaded component tuned
<br>
[Metropolis-01:24564] mca: base: components_open: component tuned has no register function
<br>
[Metropolis-01:24564] coll:tuned:component_open: done!
<br>
[Metropolis-01:24564] mca: base: components_open: component tuned open function successful
<br>
[Metropolis-01:24564] mca: base: components_open: found loaded component sm
<br>
[Metropolis-01:24564] mca: base: components_open: component sm register function successful
<br>
[Metropolis-01:24564] mca: base: components_open: component sm has no open function
<br>
[Metropolis-01:24564] mca: base: components_open: found loaded component libnbc
<br>
[Metropolis-01:24564] mca: base: components_open: component libnbc register function successful
<br>
[Metropolis-01:24564] mca: base: components_open: component libnbc open function successful
<br>
[Metropolis-01:24564] mca: base: components_open: found loaded component hierarch
<br>
[Metropolis-01:24564] mca: base: components_open: component hierarch has no register function
<br>
[Metropolis-01:24564] mca: base: components_open: component hierarch open function successful
<br>
[Metropolis-01:24564] mca: base: components_open: found loaded component basic
<br>
[Metropolis-01:24564] mca: base: components_open: component basic register function successful
<br>
[Metropolis-01:24564] mca: base: components_open: component basic has no open function
<br>
[Metropolis-01:24564] mca: base: components_open: found loaded component inter
<br>
[Metropolis-01:24564] mca: base: components_open: component inter has no register function
<br>
[Metropolis-01:24564] mca: base: components_open: component inter open function successful
<br>
[Metropolis-01:24564] mca: base: components_open: found loaded component self
<br>
[Metropolis-01:24564] mca: base: components_open: component self has no register function
<br>
[Metropolis-01:24564] mca: base: components_open: component self open function successful
<br>
[Metropolis-01:24565] computing locality - getting object at level CORE, index 1
<br>
[Metropolis-01:24565] hwloc:base: get available cpus
<br>
[Metropolis-01:24565] hwloc:base:get_available_cpus first time - filtering cpus
<br>
[Metropolis-01:24565] hwloc:base: no cpus specified - using root available cpuset
<br>
[Metropolis-01:24565] hwloc:base: get available cpus
<br>
[Metropolis-01:24565] hwloc:base:filter_cpus specified - already done
<br>
[Metropolis-01:24565] computing locality - getting object at level CORE, index 0
<br>
[Metropolis-01:24565] computing locality - shifting up from L1CACHE
<br>
[Metropolis-01:24565] computing locality - shifting up from L2CACHE
<br>
[Metropolis-01:24565] computing locality - shifting up from L3CACHE
<br>
[Metropolis-01:24565] computing locality - filling level SOCKET
<br>
[Metropolis-01:24565] computing locality - filling level NUMA
<br>
[Metropolis-01:24565] locality: CL:CU:N:B:Nu:S
<br>
[Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],0]
<br>
[Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 0
<br>
[Metropolis-01:24563] [[36265,0],0] ADDING [[36265,1],WILDCARD] TO PARTICIPANTS
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 0
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 0
<br>
[Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:modex: performing modex
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:pack_modex: reporting 4 entries
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:full:modex: executing allgather
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:bad entering allgather
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:bad allgather underway
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:modex: modex posted
<br>
[Metropolis-01:24565] mca: base: components_open: Looking for coll components
<br>
[Metropolis-01:24565] mca: base: components_open: opening coll components
<br>
[Metropolis-01:24565] mca: base: components_open: found loaded component tuned
<br>
[Metropolis-01:24565] mca: base: components_open: component tuned has no register function
<br>
[Metropolis-01:24565] coll:tuned:component_open: done!
<br>
[Metropolis-01:24565] mca: base: components_open: component tuned open function successful
<br>
[Metropolis-01:24565] mca: base: components_open: found loaded component sm
<br>
[Metropolis-01:24565] mca: base: components_open: component sm register function successful
<br>
[Metropolis-01:24565] mca: base: components_open: component sm has no open function
<br>
[Metropolis-01:24565] mca: base: components_open: found loaded component libnbc
<br>
[Metropolis-01:24565] mca: base: components_open: component libnbc register function successful
<br>
[Metropolis-01:24565] mca: base: components_open: component libnbc open function successful
<br>
[Metropolis-01:24565] mca: base: components_open: found loaded component hierarch
<br>
[Metropolis-01:24565] mca: base: components_open: component hierarch has no register function
<br>
[Metropolis-01:24565] mca: base: components_open: component hierarch open function successful
<br>
[Metropolis-01:24565] mca: base: components_open: found loaded component basic
<br>
[Metropolis-01:24565] mca: base: components_open: component basic register function successful
<br>
[Metropolis-01:24565] mca: base: components_open: component basic has no open function
<br>
[Metropolis-01:24565] mca: base: components_open: found loaded component inter
<br>
[Metropolis-01:24565] mca: base: components_open: component inter has no register function
<br>
[Metropolis-01:24565] mca: base: components_open: component inter open function successful
<br>
[Metropolis-01:24565] mca: base: components_open: found loaded component self
<br>
[Metropolis-01:24565] mca: base: components_open: component self has no register function
<br>
[Metropolis-01:24565] mca: base: components_open: component self open function successful
<br>
[Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],1]
<br>
[Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 0
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 0
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 0
<br>
[Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
<br>
[Metropolis-01:24563] [[36265,0],0] COLLECTIVE 0 LOCALLY COMPLETE - SENDING TO GLOBAL COLLECTIVE
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: daemon collective recvd from [[36265,0],0]
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: WORKING COLLECTIVE 0
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 2
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,1] tag 30
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
<br>
[Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:modex: performing modex
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:pack_modex: reporting 4 entries
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:full:modex: executing allgather
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:bad entering allgather
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:bad allgather underway
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:modex: modex posted
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive processing collective return for id 0
<br>
[Metropolis-01:24564] [[36265,1],0] CHECKING COLL id 0
<br>
[Metropolis-01:24564] [[36265,1],0] STORING MODEX DATA
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:store_modex adding modex entry for proc [[36265,1],0]
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive processing collective return for id 0
<br>
[Metropolis-01:24565] [[36265,1],1] CHECKING COLL id 0
<br>
[Metropolis-01:24565] [[36265,1],1] STORING MODEX DATA
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:store_modex adding modex entry for proc [[36265,1],0]
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:update_modex_entries: adding 4 entries for proc [[36265,1],0]
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:store_modex adding modex entry for proc [[36265,1],1]
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:update_modex_entries: adding 4 entries for proc [[36265,1],1]
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:update_modex_entries: adding 4 entries for proc [[36265,1],0]
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:store_modex adding modex entry for proc [[36265,1],1]
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:update_modex_entries: adding 4 entries for proc [[36265,1],1]
<br>
[Metropolis-01:24564] coll:find_available: querying coll component tuned
<br>
[Metropolis-01:24564] coll:find_available: coll component tuned is available
<br>
[Metropolis-01:24565] coll:find_available: querying coll component tuned
<br>
[Metropolis-01:24565] coll:find_available: coll component tuned is available
<br>
[Metropolis-01:24565] coll:find_available: querying coll component sm
<br>
[Metropolis-01:24564] coll:find_available: querying coll component sm
<br>
[Metropolis-01:24564] coll:sm:init_query: no other local procs; disqualifying myself
<br>
[Metropolis-01:24564] coll:find_available: coll component sm is not available
<br>
[Metropolis-01:24564] coll:find_available: querying coll component libnbc
<br>
[Metropolis-01:24564] coll:find_available: coll component libnbc is available
<br>
[Metropolis-01:24564] coll:find_available: querying coll component hierarch
<br>
[Metropolis-01:24564] coll:find_available: coll component hierarch is available
<br>
[Metropolis-01:24564] coll:find_available: querying coll component basic
<br>
[Metropolis-01:24564] coll:find_available: coll component basic is available
<br>
[Metropolis-01:24565] coll:sm:init_query: no other local procs; disqualifying myself
<br>
[Metropolis-01:24565] coll:find_available: coll component sm is not available
<br>
[Metropolis-01:24565] coll:find_available: querying coll component libnbc
<br>
[Metropolis-01:24565] coll:find_available: coll component libnbc is available
<br>
[Metropolis-01:24565] coll:find_available: querying coll component hierarch
<br>
[Metropolis-01:24565] coll:find_available: coll component hierarch is available
<br>
[Metropolis-01:24565] coll:find_available: querying coll component basic
<br>
[Metropolis-01:24565] coll:find_available: coll component basic is available
<br>
[Metropolis-01:24564] coll:find_available: querying coll component inter
<br>
[Metropolis-01:24564] coll:find_available: coll component inter is available
<br>
[Metropolis-01:24564] coll:find_available: querying coll component self
<br>
[Metropolis-01:24564] coll:find_available: coll component self is available
<br>
[Metropolis-01:24565] coll:find_available: querying coll component inter
<br>
[Metropolis-01:24565] coll:find_available: coll component inter is available
<br>
[Metropolis-01:24565] coll:find_available: querying coll component self
<br>
[Metropolis-01:24565] coll:find_available: coll component self is available
<br>
[Metropolis-01:24565] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
<br>
[Metropolis-01:24564] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
<br>
[Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],1]
<br>
[Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 1
<br>
[Metropolis-01:24563] [[36265,0],0] ADDING [[36265,1],WILDCARD] TO PARTICIPANTS
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 1
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 1
<br>
[Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
<br>
[Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],0]
<br>
[Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 1
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 1
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 1
<br>
[Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
<br>
[Metropolis-01:24563] [[36265,0],0] COLLECTIVE 1 LOCALLY COMPLETE - SENDING TO GLOBAL COLLECTIVE
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: daemon collective recvd from [[36265,0],0]
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: WORKING COLLECTIVE 1
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 2
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,1] tag 30
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
<br>
[Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:bad entering barrier
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:bad barrier underway
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:bad entering barrier
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:bad barrier underway
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive processing collective return for id 1
<br>
[Metropolis-01:24564] [[36265,1],0] CHECKING COLL id 1
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive processing collective return for id 1
<br>
[Metropolis-01:24565] [[36265,1],1] CHECKING COLL id 1
<br>
[Metropolis-01:24565] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
<br>
[Metropolis-01:24565] coll:base:comm_select: Checking all available modules
<br>
[Metropolis-01:24565] coll:tuned:module_tuned query called
<br>
[Metropolis-01:24565] coll:base:comm_select: component available: tuned, priority: 30
<br>
[Metropolis-01:24565] coll:base:comm_select: component available: libnbc, priority: 10
<br>
[Metropolis-01:24565] coll:base:comm_select: component not available: hierarch
<br>
[Metropolis-01:24565] coll:base:comm_select: component available: basic, priority: 10
<br>
[Metropolis-01:24565] coll:base:comm_select: component not available: inter
<br>
[Metropolis-01:24565] coll:base:comm_select: component not available: self
<br>
[Metropolis-01:24565] coll:tuned:module_init called.
<br>
[Metropolis-01:24565] coll:tuned:module_init Tuned is in use
<br>
[Metropolis-01:24565] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
<br>
[Metropolis-01:24565] coll:base:comm_select: Checking all available modules
<br>
[Metropolis-01:24564] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
<br>
[Metropolis-01:24564] coll:base:comm_select: Checking all available modules
<br>
[Metropolis-01:24564] coll:tuned:module_tuned query called
<br>
[Metropolis-01:24564] coll:base:comm_select: component available: tuned, priority: 30
<br>
[Metropolis-01:24564] coll:base:comm_select: component available: libnbc, priority: 10
<br>
[Metropolis-01:24564] coll:base:comm_select: component not available: hierarch
<br>
[Metropolis-01:24564] coll:base:comm_select: component available: basic, priority: 10
<br>
[Metropolis-01:24564] coll:base:comm_select: component not available: inter
<br>
[Metropolis-01:24564] coll:base:comm_select: component not available: self
<br>
[Metropolis-01:24564] coll:tuned:module_init called.
<br>
[Metropolis-01:24565] coll:tuned:module_tuned query called
<br>
[Metropolis-01:24565] coll:base:comm_select: component not available: tuned
<br>
[Metropolis-01:24565] coll:base:comm_select: component available: libnbc, priority: 10
<br>
[Metropolis-01:24565] coll:base:comm_select: component not available: hierarch
<br>
[Metropolis-01:24565] coll:base:comm_select: component available: basic, priority: 10
<br>
[Metropolis-01:24565] coll:base:comm_select: component not available: inter
<br>
[Metropolis-01:24565] coll:base:comm_select: component available: self, priority: 75
<br>
[Metropolis-01:24564] coll:tuned:module_init Tuned is in use
<br>
[Metropolis-01:24564] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
<br>
[Metropolis-01:24564] coll:base:comm_select: Checking all available modules
<br>
[Metropolis-01:24564] coll:tuned:module_tuned query called
<br>
[Metropolis-01:24564] coll:base:comm_select: component not available: tuned
<br>
[Metropolis-01:24564] coll:base:comm_select: component available: libnbc, priority: 10
<br>
[Metropolis-01:24564] coll:base:comm_select: component not available: hierarch
<br>
[Metropolis-01:24564] coll:base:comm_select: component available: basic, priority: 10
<br>
[Metropolis-01:24564] coll:base:comm_select: component not available: inter
<br>
[Metropolis-01:24564] coll:base:comm_select: component available: self, priority: 75
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:bad entering barrier
<br>
[Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],1]
<br>
[Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 2
<br>
[Metropolis-01:24563] [[36265,0],0] ADDING [[36265,1],WILDCARD] TO PARTICIPANTS
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 2
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 2
<br>
[Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
<br>
[Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],0]
<br>
[Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 2
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 2
<br>
[Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 2
<br>
[Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
<br>
[Metropolis-01:24563] [[36265,0],0] COLLECTIVE 2 LOCALLY COMPLETE - SENDING TO GLOBAL COLLECTIVE
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: daemon collective recvd from [[36265,0],0]
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: WORKING COLLECTIVE 2
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 2
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,1] tag 30
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
<br>
[Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:bad entering barrier
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:bad barrier underway
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive processing collective return for id 2
<br>
[Metropolis-01:24564] [[36265,1],0] CHECKING COLL id 2
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:bad barrier underway
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive processing collective return for id 2
<br>
[Metropolis-01:24565] [[36265,1],1] CHECKING COLL id 2
<br>
[Metropolis-01:24565] coll:tuned:component_close: called
<br>
[Metropolis-01:24565] coll:tuned:component_close: done!
<br>
[Metropolis-01:24565] mca: base: close: component tuned closed
<br>
[Metropolis-01:24565] mca: base: close: unloading component tuned
<br>
[Metropolis-01:24565] mca: base: close: component libnbc closed
<br>
[Metropolis-01:24565] mca: base: close: unloading component libnbc
<br>
[Metropolis-01:24565] mca: base: close: unloading component hierarch
<br>
[Metropolis-01:24565] mca: base: close: unloading component basic
<br>
[Metropolis-01:24565] mca: base: close: unloading component inter
<br>
[Metropolis-01:24565] mca: base: close: unloading component self
<br>
[Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive stop comm
<br>
[Metropolis-01:24564] coll:tuned:component_close: called
<br>
[Metropolis-01:24564] coll:tuned:component_close: done!
<br>
[Metropolis-01:24564] mca: base: close: component tuned closed
<br>
[Metropolis-01:24564] mca: base: close: unloading component tuned
<br>
[Metropolis-01:24564] mca: base: close: component libnbc closed
<br>
[Metropolis-01:24564] mca: base: close: unloading component libnbc
<br>
[Metropolis-01:24564] mca: base: close: unloading component hierarch
<br>
[Metropolis-01:24564] mca: base: close: unloading component basic
<br>
[Metropolis-01:24564] mca: base: close: unloading component inter
<br>
[Metropolis-01:24564] mca: base: close: unloading component self
<br>
[Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive stop comm
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,0] tag 1
<br>
[Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
<br>
[Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
<br>
[jarico_at_Metropolis-01 examples]$ 
<br>
<p><p><p>El 03/07/2012, a las 21:44, Ralph Castain escribi&#243;:
<br>
<p><span class="quotelev1">&gt; Interesting - yes, coll sm doesn't think they are on the same node for some reason. Try adding -mca grpcomm_base_verbose 5 and let's see why
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 3, 2012, at 1:24 PM, Juan Antonio Rico Gallego wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code I run is a simple broadcast. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I do not specify components to run, the output is (more verbose):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jarico_at_Metropolis-01 examples]$ /home/jarico/shared/packages/openmpi-cas-dbg/bin/mpiexec --mca mca_base_verbose 100 --mca mca_coll_base_output 100  --mca coll_sm_priority 99 -mca hwloc_base_verbose 90 --display-map --mca mca_verbose 100 --mca mca_base_verbose 100 --mca coll_base_verbose 100 -n 2 ./bmem
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24490] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24490] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24490] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24490] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24490] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24490] hwloc:base:get_topology
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24490] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Metropolis-01	Num procs: 2
</span><br>
<span class="quotelev2">&gt;&gt; 	Process OMPI jobid: [36336,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev2">&gt;&gt; 	Process OMPI jobid: [36336,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; =============================================================
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] locality: CL:CU:N:B
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] hwloc:base: get available cpus
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: Looking for coll components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: opening coll components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component tuned
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component tuned has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:tuned:component_open: done!
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component tuned open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component sm register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component sm has no open function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component libnbc
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component libnbc register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component libnbc open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component hierarch has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component hierarch open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component basic
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component basic register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component basic has no open function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component inter has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component inter open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] locality: CL:CU:N:B
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] hwloc:base: get available cpus
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: Looking for coll components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: opening coll components
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component tuned
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component tuned has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:tuned:component_open: done!
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component tuned open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component sm register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component sm has no open function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component libnbc
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component libnbc register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component libnbc open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component hierarch has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component hierarch open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component basic
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component basic register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component basic has no open function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component inter has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component inter open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component tuned
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: coll component tuned is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component sm
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: coll component sm is not available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component libnbc
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: coll component libnbc is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: coll component hierarch is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component basic
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: coll component basic is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component tuned
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: coll component tuned is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component sm
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: coll component sm is not available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component libnbc
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: coll component libnbc is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: coll component hierarch is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component basic
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: coll component basic is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: coll component inter is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component self
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:find_available: coll component self is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: coll component inter is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component self
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:find_available: coll component self is available
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:tuned:module_init called.
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: tuned
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:tuned:module_init called.
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: tuned
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:tuned:component_close: called
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:tuned:component_close: done!
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:tuned:component_close: called
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] coll:tuned:component_close: done!
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: close: component tuned closed
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component tuned
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: close: component libnbc closed
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component libnbc
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component basic
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component self
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: close: component tuned closed
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component tuned
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: close: component libnbc closed
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component libnbc
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component hierarch
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component basic
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component inter
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component self
</span><br>
<span class="quotelev2">&gt;&gt; [jarico_at_Metropolis-01 examples]$ 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SM is not load because it detects no other processes in the same machine:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [Metropolis-01:24491] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The machine is a multicore machine with 8 cores.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I need to run SM component code, and I suppose that raising priority it will be the component selected when problem is solved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; El 03/07/2012, a las 21:01, Jeff Squyres escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue is that the &quot;sm&quot; coll component only implements a few of the MPI collective operations.  It is usually mixed at run-time with other coll components to fill out the rest of the MPI collective operations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So what is happening is that OMPI is determining that it doesn't have implementations of all the MPI collective operations and aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You shouldn't need to manually select your coll module -- OMPI should automatically select the right collective module for you.  E.g., if all procs are local on a single machine and sm has a matching implementation for that MPI collective operation, it'll be used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 3, 2012, at 2:48 PM, Juan Antonio Rico Gallego wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Output is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15355] hwloc:base:get_topology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15355] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Metropolis-01	Num procs: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	Process OMPI jobid: [59809,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	Process OMPI jobid: [59809,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15356] locality: CL:CU:N:B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base: get available cpus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15357] locality: CL:CU:N:B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base: get available cpus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Juan A. Rico
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11225.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11225.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11229.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
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
