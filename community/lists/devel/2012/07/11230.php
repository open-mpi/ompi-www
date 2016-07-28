<?
$subject_val = "Re: [OMPI devel] SM component init unload";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 20:59:50 2012" -->
<!-- isoreceived="20120704005950" -->
<!-- sent="Wed, 4 Jul 2012 02:59:36 +0200" -->
<!-- isosent="20120704005936" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM component init unload" -->
<!-- id="170015D0-E77A-4104-A1DD-6AD70C738E53_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMD57od+66-8GZEigCUw0M1H8-a6sbmH905_sGH3+yhx2GhQPQ_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 20:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11231.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11229.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11229.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11231.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11231.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11232.php">Juan A. Rico: "Re: [OMPI devel] SM component init unload"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Juan,
<br>
<p>Something weird is going on there. The selection mechanism for the SM coll and SM BTL should be very similar. However, the SM BTL successfully select itself while the SM coll fails to determine that all processes are local.
<br>
<p>In the coll SM the issue is that the remote procs do not have the LOCAL flag set, even when they are on the local node (however the ompi_proc_local() return has a special flag stating that all processes in the job are local). I compared the initialization of the SM BTL and the SM coll. It turns out that somehow the procs returned by ompi_proc_all() and the procs provided to the add_proc of the BTLs are not identical. The second have the local flag correctly set, so I went a little bit deeper.
<br>
<p>Here is what I found while toying with gdb inside:
<br>
<p>breakpoint 1, mca_coll_sm_init_query (enable_progress_threads=false, enable_mpi_threads=false) at coll_sm_module.c:132
<br>
<p>(gdb) p procs[0]
<br>
$1 = (ompi_proc_t *) 0x109a1e8c0
<br>
(gdb) p procs[1]
<br>
$2 = (ompi_proc_t *) 0x109a1e970
<br>
(gdb) p procs[0]-&gt;proc_flags
<br>
$3 = 0
<br>
(gdb) p procs[1]-&gt;proc_flags
<br>
$4 = 4095
<br>
<p>Breakpoint 2, mca_btl_sm_add_procs (btl=0x109baa1c0, nprocs=2, procs=0x109a319e0, peers=0x109a319f0, reachability=0x7fff691378e8) at btl_sm.c:427
<br>
<p>(gdb) p procs[0]
<br>
$5 = (struct ompi_proc_t *) 0x109a1e8c0
<br>
(gdb) p procs[1]
<br>
$6 = (struct ompi_proc_t *) 0x109a1e970
<br>
(gdb) p procs[0]-&gt;proc_flags
<br>
$7 = 1920
<br>
(gdb) p procs[1]-&gt;proc_flags
<br>
$8 = 4095
<br>
<p>Thus the problem seems to come from the fact that during the initialization of the SM coll the flags are not correctly set. However, this is somehow expected &#133; as the call to the initialization happens before the exchange of the business cards (and therefore there is no way to have any knowledge about the remote procs).
<br>
<p>So, either something changed drastically in the way we set the flags for remote processes or we did not use the SM coll for the last 3 years. I think the culprit is r21967 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/21967">https://svn.open-mpi.org/trac/ompi/changeset/21967</a>) who added a &quot;selection&quot; logic based on knowledge about remote procs in the coll SM initialization function. But this selection logic was way to early !!!
<br>
<p>I would strongly encourage you not to use this SM collective component in anything related to production runs.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>PS: However, if you want to toy with the SM coll apply the following patch:
<br>
Index: coll_sm_module.c
<br>
===================================================================
<br>
--- coll_sm_module.c	(revision 26737)
<br>
+++ coll_sm_module.c	(working copy)
<br>
@@ -128,6 +128,7 @@
<br>
&nbsp;int mca_coll_sm_init_query(bool enable_progress_threads,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool enable_mpi_threads)
<br>
&nbsp;{
<br>
+#if 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_proc_t *my_proc, **procs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t i, size;
<br>
&nbsp;
<br>
@@ -158,7 +159,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;coll:sm:init_query: no other local procs; disqualifying myself&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_NOT_AVAILABLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Don't do much here because we don't really want to allocate any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shared memory until this component is selected to be used. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(10, mca_coll_base_output,
<br>
<p><p><p><p><p>On Jul 4, 2012, at 02:05 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Okay, please try this again with r26739 or above. You can remove the rest of the &quot;verbose&quot; settings and the --display-map so we declutter the output. Please add &quot;-mca orte_nidmap_verbose 20&quot; to your cmd line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 3, 2012 at 1:50 PM, Juan A. Rico &lt;jarico_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Here is the output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jarico_at_Metropolis-01 examples]$ /home/jarico/shared/packages/openmpi-cas-dbg/bin/mpiexec --bind-to-core --bynode --mca mca_base_verbose 100 --mca mca_coll_base_output 100  --mca coll_sm_priority 99 -mca hwloc_base_verbose 90 --display-map --mca mca_verbose 100 --mca mca_base_verbose 100 --mca coll_base_verbose 100 -n 2 -mca grpcomm_base_verbose 5 ./bmem
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:get_topology
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Node:  Metropolis-01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:get_nbojbs computed data 8 of Core:0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Metropolis-01   Num procs: 2
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [36265,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [36265,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  =============================================================
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,0] tag 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:xcast updating daemon nidmap
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] computing locality - getting object at level CORE, index 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] computing locality - getting object at level CORE, index 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] computing locality - shifting up from L1CACHE
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] computing locality - shifting up from L2CACHE
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] computing locality - shifting up from L3CACHE
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] computing locality - filling level SOCKET
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] computing locality - filling level NUMA
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] locality: CL:CU:N:B:Nu:S
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: Looking for coll components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: opening coll components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: found loaded component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component tuned has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:tuned:component_open: done!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component tuned open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component sm register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component sm has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: found loaded component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component libnbc register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component libnbc open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: found loaded component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component hierarch has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component hierarch open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: found loaded component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component basic register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component basic has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: found loaded component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component inter has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component inter open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] computing locality - getting object at level CORE, index 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] hwloc:base:filter_cpus specified - already done
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] computing locality - getting object at level CORE, index 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] computing locality - shifting up from L1CACHE
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] computing locality - shifting up from L2CACHE
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] computing locality - shifting up from L3CACHE
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] computing locality - filling level SOCKET
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] computing locality - filling level NUMA
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] locality: CL:CU:N:B:Nu:S
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] ADDING [[36265,1],WILDCARD] TO PARTICIPANTS
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:modex: performing modex
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:pack_modex: reporting 4 entries
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:full:modex: executing allgather
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:bad entering allgather
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:bad allgather underway
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:modex: modex posted
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: Looking for coll components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: opening coll components
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: found loaded component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component tuned has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:tuned:component_open: done!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component tuned open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component sm register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component sm has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: found loaded component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component libnbc register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component libnbc open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: found loaded component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component hierarch has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component hierarch open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: found loaded component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component basic register function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component basic has no open function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: found loaded component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component inter has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component inter open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],1]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] COLLECTIVE 0 LOCALLY COMPLETE - SENDING TO GLOBAL COLLECTIVE
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: daemon collective recvd from [[36265,0],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: WORKING COLLECTIVE 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,1] tag 30
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:modex: performing modex
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:pack_modex: reporting 4 entries
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:full:modex: executing allgather
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:bad entering allgather
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:bad allgather underway
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:modex: modex posted
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive processing collective return for id 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] CHECKING COLL id 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] STORING MODEX DATA
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:store_modex adding modex entry for proc [[36265,1],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive processing collective return for id 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] CHECKING COLL id 0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] STORING MODEX DATA
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:store_modex adding modex entry for proc [[36265,1],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:update_modex_entries: adding 4 entries for proc [[36265,1],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:store_modex adding modex entry for proc [[36265,1],1]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:update_modex_entries: adding 4 entries for proc [[36265,1],1]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:update_modex_entries: adding 4 entries for proc [[36265,1],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:store_modex adding modex entry for proc [[36265,1],1]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:update_modex_entries: adding 4 entries for proc [[36265,1],1]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: querying coll component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: coll component tuned is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: querying coll component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: coll component tuned is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: querying coll component sm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: querying coll component sm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: coll component sm is not available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: querying coll component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: coll component libnbc is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: querying coll component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: coll component hierarch is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: querying coll component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: coll component basic is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: coll component sm is not available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: querying coll component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: coll component libnbc is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: querying coll component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: coll component hierarch is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: querying coll component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: coll component basic is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: querying coll component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: coll component inter is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: querying coll component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:find_available: coll component self is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: querying coll component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: coll component inter is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: querying coll component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:find_available: coll component self is available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],1]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] ADDING [[36265,1],WILDCARD] TO PARTICIPANTS
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] COLLECTIVE 1 LOCALLY COMPLETE - SENDING TO GLOBAL COLLECTIVE
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: daemon collective recvd from [[36265,0],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: WORKING COLLECTIVE 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,1] tag 30
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:bad entering barrier
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:bad barrier underway
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:bad entering barrier
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:bad barrier underway
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive processing collective return for id 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] CHECKING COLL id 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive processing collective return for id 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] CHECKING COLL id 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:tuned:module_init called.
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:tuned:module_init called.
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component not available: tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component not available: tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:bad entering barrier
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],1]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] ADDING [[36265,1],WILDCARD] TO PARTICIPANTS
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] COLLECTIVE RECVD FROM [[36265,1],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] WORKING COLLECTIVE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLLECTIVE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] PROGRESSING COLL id 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] ALL LOCAL PROCS CONTRIBUTE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] COLLECTIVE 2 LOCALLY COMPLETE - SENDING TO GLOBAL COLLECTIVE
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: daemon collective recvd from [[36265,0],0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: WORKING COLLECTIVE 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:base:daemon_coll: NUM CONTRIBS: 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,1] tag 30
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:bad entering barrier
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:bad barrier underway
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive processing collective return for id 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] CHECKING COLL id 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:bad barrier underway
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive processing collective return for id 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] CHECKING COLL id 2
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:tuned:component_close: called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] coll:tuned:component_close: done!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: close: component tuned closed
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: close: unloading component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: close: component libnbc closed
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: close: unloading component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: close: unloading component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: close: unloading component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: close: unloading component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] mca: base: close: unloading component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24565] [[36265,1],1] grpcomm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:tuned:component_close: called
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] coll:tuned:component_close: done!
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: close: component tuned closed
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: close: unloading component tuned
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: close: component libnbc closed
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: close: unloading component libnbc
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: close: unloading component hierarch
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: close: unloading component basic
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: close: unloading component inter
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] mca: base: close: unloading component self
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24564] [[36265,1],0] grpcomm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:bad:xcast sent to job [36265,0] tag 1
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] grpcomm:xcast:recv:send_relay
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:24563] [[36265,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev1">&gt; [jarico_at_Metropolis-01 examples]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; El 03/07/2012, a las 21:44, Ralph Castain escribi&#243;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Interesting - yes, coll sm doesn't think they are on the same node for some reason. Try adding -mca grpcomm_base_verbose 5 and let's see why
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 3, 2012, at 1:24 PM, Juan Antonio Rico Gallego wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The code I run is a simple broadcast.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When I do not specify components to run, the output is (more verbose):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [jarico_at_Metropolis-01 examples]$ /home/jarico/shared/packages/openmpi-cas-dbg/bin/mpiexec --mca mca_base_verbose 100 --mca mca_coll_base_output 100  --mca coll_sm_priority 99 -mca hwloc_base_verbose 90 --display-map --mca mca_verbose 100 --mca mca_base_verbose 100 --mca coll_base_verbose 100 -n 2 ./bmem
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24490] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24490] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24490] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24490] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24490] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24490] hwloc:base:get_topology
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24490] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Data for node: Metropolis-01 Num procs: 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Process OMPI jobid: [36336,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Process OMPI jobid: [36336,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =============================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: Looking for hwloc components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: opening hwloc components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component hwloc142
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component hwloc142 has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component hwloc142 has no open function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] locality: CL:CU:N:B
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] hwloc:base: get available cpus
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: Looking for coll components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: opening coll components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component tuned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component tuned has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:tuned:component_open: done!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component tuned open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component sm register function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component sm has no open function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component libnbc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component libnbc register function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component libnbc open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component hierarch has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component hierarch open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component basic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component basic register function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component basic has no open function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component inter has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component inter open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] locality: CL:CU:N:B
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] hwloc:base: get available cpus
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: Looking for coll components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: opening coll components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component tuned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component tuned has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:tuned:component_open: done!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component tuned open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component sm register function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component sm has no open function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component libnbc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component libnbc register function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component libnbc open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component hierarch has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component hierarch open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component basic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component basic register function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component basic has no open function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component inter has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component inter open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component tuned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: coll component tuned is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component sm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: coll component sm is not available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component libnbc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: coll component libnbc is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: coll component hierarch is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component basic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: coll component basic is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component tuned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: coll component tuned is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component sm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: coll component sm is not available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component libnbc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: coll component libnbc is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: coll component hierarch is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component basic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: coll component basic is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: coll component inter is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: querying coll component self
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:find_available: coll component self is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: coll component inter is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: querying coll component self
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:find_available: coll component self is available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:tuned:module_init called.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: tuned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:tuned:module_init called.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:tuned:module_tuned query called
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: tuned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: libnbc, priority: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:tuned:component_close: called
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:tuned:component_close: done!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:tuned:component_close: called
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] coll:tuned:component_close: done!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: close: component tuned closed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component tuned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: close: component libnbc closed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component libnbc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component basic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24492] mca: base: close: unloading component self
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: close: component tuned closed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component tuned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: close: component libnbc closed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component libnbc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component hierarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component basic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component inter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] mca: base: close: unloading component self
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [jarico_at_Metropolis-01 examples]$
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SM is not load because it detects no other processes in the same machine:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Metropolis-01:24491] coll:sm:init_query: no other local procs; disqualifying myself
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The machine is a multicore machine with 8 cores.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I need to run SM component code, and I suppose that raising priority it will be the component selected when problem is solved.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; El 03/07/2012, a las 21:01, Jeff Squyres escribi&#243;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The issue is that the &quot;sm&quot; coll component only implements a few of the MPI collective operations.  It is usually mixed at run-time with other coll components to fill out the rest of the MPI collective operations.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So what is happening is that OMPI is determining that it doesn't have implementations of all the MPI collective operations and aborting.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You shouldn't need to manually select your coll module -- OMPI should automatically select the right collective module for you.  E.g., if all procs are local on a single machine and sm has a matching implementation for that MPI collective operation, it'll be used.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jul 3, 2012, at 2:48 PM, Juan Antonio Rico Gallego wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Output is:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15355] hwloc:base:get_topology
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15355] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for node: Metropolis-01       Num procs: 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    Process OMPI jobid: [59809,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    Process OMPI jobid: [59809,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15356] locality: CL:CU:N:B
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15357] locality: CL:CU:N:B
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15356] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Metropolis-01:15357] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Juan A. Rico
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11230/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11231.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11229.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11229.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11231.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11231.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11232.php">Juan A. Rico: "Re: [OMPI devel] SM component init unload"</a>
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
