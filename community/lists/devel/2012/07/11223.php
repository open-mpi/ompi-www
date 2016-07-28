<?
$subject_val = "Re: [OMPI devel] SM component init unload";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 15:01:25 2012" -->
<!-- isoreceived="20120703190125" -->
<!-- sent="Tue, 3 Jul 2012 15:01:16 -0400" -->
<!-- isosent="20120703190116" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM component init unload" -->
<!-- id="7325DB43-3C08-488F-815E-FB94F2C46942_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AB83440F-2281-4F17-B9C6-E4C81BE7B178_at_unex.es" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 15:01:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issue is that the &quot;sm&quot; coll component only implements a few of the MPI collective operations.  It is usually mixed at run-time with other coll components to fill out the rest of the MPI collective operations.
<br>
<p>So what is happening is that OMPI is determining that it doesn't have implementations of all the MPI collective operations and aborting.
<br>
<p>You shouldn't need to manually select your coll module -- OMPI should automatically select the right collective module for you.  E.g., if all procs are local on a single machine and sm has a matching implementation for that MPI collective operation, it'll be used.
<br>
<p><p><p>On Jul 3, 2012, at 2:48 PM, Juan Antonio Rico Gallego wrote:
<br>
<p><span class="quotelev1">&gt; Output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15355] hwloc:base:get_topology
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15355] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: Metropolis-01	Num procs: 2
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [59809,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [59809,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15356] locality: CL:CU:N:B
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15356] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15356] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15356] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15356] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15357] locality: CL:CU:N:B
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15357] hwloc:base: get available cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15357] hwloc:base:get_available_cpus first time - filtering cpus
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15357] hwloc:base: no cpus specified - using root available cpuset
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15357] hwloc:base:get_available_cpus root object
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15356] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15357] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Juan A. Rico
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11224.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
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
