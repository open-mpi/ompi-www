<?
$subject_val = "Re: [OMPI devel] SM component init unload";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 14:48:44 2012" -->
<!-- isoreceived="20120703184844" -->
<!-- sent="Tue, 3 Jul 2012 20:48:42 +0200" -->
<!-- isosent="20120703184842" -->
<!-- name="Juan Antonio Rico Gallego" -->
<!-- email="jarico_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM component init unload" -->
<!-- id="AB83440F-2281-4F17-B9C6-E4C81BE7B178_at_unex.es" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] SM component init unload" -->
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
<strong>From:</strong> Juan Antonio Rico Gallego (<em>jarico_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 14:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11223.php">Jeff Squyres: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11221.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Maybe in reply to:</strong> <a href="11220.php">Juan Antonio Rico Gallego: "[OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11223.php">Jeff Squyres: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11223.php">Jeff Squyres: "Re: [OMPI devel] SM component init unload"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Output is:
<br>
<p>[Metropolis-01:15355] hwloc:base:get_topology
<br>
[Metropolis-01:15355] hwloc:base: no cpus specified - using root available cpuset
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Metropolis-01	Num procs: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [59809,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [59809,1] App: 0 Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
[Metropolis-01:15356] locality: CL:CU:N:B
<br>
[Metropolis-01:15356] hwloc:base: get available cpus
<br>
[Metropolis-01:15356] hwloc:base:get_available_cpus first time - filtering cpus
<br>
[Metropolis-01:15356] hwloc:base: no cpus specified - using root available cpuset
<br>
[Metropolis-01:15356] hwloc:base:get_available_cpus root object
<br>
[Metropolis-01:15357] locality: CL:CU:N:B
<br>
[Metropolis-01:15357] hwloc:base: get available cpus
<br>
[Metropolis-01:15357] hwloc:base:get_available_cpus first time - filtering cpus
<br>
[Metropolis-01:15357] hwloc:base: no cpus specified - using root available cpuset
<br>
[Metropolis-01:15357] hwloc:base:get_available_cpus root object
<br>
[Metropolis-01:15356] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
<br>
[Metropolis-01:15357] hwloc:base:get_nbojbs computed data 0 of NUMANode:0
<br>
<p><p>Regards,
<br>
Juan A. Rico
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11223.php">Jeff Squyres: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11221.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Maybe in reply to:</strong> <a href="11220.php">Juan Antonio Rico Gallego: "[OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11223.php">Jeff Squyres: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11223.php">Jeff Squyres: "Re: [OMPI devel] SM component init unload"</a>
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
