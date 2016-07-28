<?
$subject_val = "[OMPI users] openmpi 1.5.4 paffinity with Magny-Cours";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  9 15:04:47 2011" -->
<!-- isoreceived="20110909190447" -->
<!-- sent="Fri, 9 Sep 2011 15:03:44 -0400 (EDT)" -->
<!-- isosent="20110909190344" -->
<!-- name="Kaizaad Bilimorya" -->
<!-- email="kaizaad_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.5.4 paffinity with Magny-Cours" -->
<!-- id="alpine.LRH.2.02.1109091150310.20242_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours<br>
<strong>From:</strong> Kaizaad Bilimorya (<em>kaizaad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-09 15:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Previous message:</strong> <a href="17207.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Reply:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We seem to have an issue similar to this thread
<br>
<p>&quot;Bug in openmpi 1.5.4 in paffinity&quot;
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/09/17151.php">http://www.open-mpi.org/community/lists/users/2011/09/17151.php</a>
<br>
<p>Using the following version of hwloc (from EPEL repo - we run CentOS 5.6)
<br>
<p>$ hwloc-info --version
<br>
hwloc-info 1.1rc6
<br>
<p>A simple &quot;mpi_hello&quot; program works fine with cpusets and openMPI 1.4.2 but 
<br>
with openMPI 1.5.3 and cpusets we get the following segfault (works fine 
<br>
on the node without cpusets enabled):
<br>
<p>[red2:28263] *** Process received signal ***
<br>
[red2:28263] Signal: Segmentation fault (11)
<br>
[red2:28263] Signal code: Address not mapped (1)
<br>
[red2:28263] Failing at address: 0x8
<br>
[red2:28263] [ 0] /lib64/libpthread.so.0 [0x2b3dce315b10]
<br>
[red2:28263] [ 1] /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so(opal_paffinity_hwloc_bitmap_or+0x142) [0x2b3dcef75cb2]
<br>
[red2:28263] [ 2] /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so [0x2b3dcef71404]
<br>
[red2:28263] [ 3] /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so [0x2b3dcef6bb26]
<br>
[red2:28263] [ 4] /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so(opal_paffinity_hwloc_topology_load+0xe2) [0x2b3dcef6e0b2]
<br>
[red2:28263] [ 5] /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so [0x2b3dcef68b72]
<br>
[red2:28263] [ 6] /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(mca_base_components_open+0x302) [0x2b3dcd2b08f2]
<br>
[red2:28263] [ 7] /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(opal_paffinity_base_open+0x67) [0x2b3dcd2d3a87]
<br>
[red2:28263] [ 8] /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(opal_init+0x71) [0x2b3dcd28bfb1]
<br>
[red2:28263] [ 9] /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(orte_init+0x23) [0x2b3dcd2318f3]
<br>
[red2:28263] [10] /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun [0x4049b5]
<br>
[red2:28263] [11] /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun [0x404388]
<br>
[red2:28263] [12] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b3dce540994]
<br>
[red2:28263] [13] /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun [0x4042b9]
<br>
[red2:28263] *** End of error message ***
<br>
/var/spool/torque/mom_priv/jobs/968.SC: line 3: 28263 Segmentation fault 
<br>
/opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun -np 2 ./a.out
<br>
<p>Please let me know if you need more information about this issue
<br>
<p>thanks
<br>
-k
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Previous message:</strong> <a href="17207.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Reply:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
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
