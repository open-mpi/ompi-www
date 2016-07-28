<?
$subject_val = "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  9 15:15:23 2011" -->
<!-- isoreceived="20110909191523" -->
<!-- sent="Fri, 09 Sep 2011 21:15:17 +0200" -->
<!-- isosent="20110909191517" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours" -->
<!-- id="4E6A65C5.4010706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LRH.2.02.1109091150310.20242_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-09 15:15:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17210.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Previous message:</strong> <a href="17208.php">Kaizaad Bilimorya: "[OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>In reply to:</strong> <a href="17208.php">Kaizaad Bilimorya: "[OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17210.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Reply:</strong> <a href="17210.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Reply:</strong> <a href="17232.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/09/2011 21:03, Kaizaad Bilimorya a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We seem to have an issue similar to this thread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Bug in openmpi 1.5.4 in paffinity&quot;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/09/17151.php">http://www.open-mpi.org/community/lists/users/2011/09/17151.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using the following version of hwloc (from EPEL repo - we run CentOS 5.6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ hwloc-info --version
</span><br>
<span class="quotelev1">&gt; hwloc-info 1.1rc6
</span><br>
<p>Hello,
<br>
<p>Note that Open MPI 1.5.4 uses its own embedded copy of hwloc 1.2.0.
<br>
<p>Your own 1.1rc6 should actual work fine (does lstopo crash?) but OMPI
<br>
cannot use it :)
<br>
<p><span class="quotelev1">&gt; A simple &quot;mpi_hello&quot; program works fine with cpusets and openMPI 1.4.2
</span><br>
<span class="quotelev1">&gt; but with openMPI 1.5.3 and cpusets we get the following segfault
</span><br>
<span class="quotelev1">&gt; (works fine on the node without cpusets enabled):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [red2:28263] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [red2:28263] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [red2:28263] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [red2:28263] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 0] /lib64/libpthread.so.0 [0x2b3dce315b10]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 1]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so(opal_paffinity_hwloc_bitmap_or+0x142)
</span><br>
<span class="quotelev1">&gt; [0x2b3dcef75cb2]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so
</span><br>
<span class="quotelev1">&gt; [0x2b3dcef71404]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 3]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so
</span><br>
<span class="quotelev1">&gt; [0x2b3dcef6bb26]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 4]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so(opal_paffinity_hwloc_topology_load+0xe2)
</span><br>
<span class="quotelev1">&gt; [0x2b3dcef6e0b2]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 5]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so
</span><br>
<span class="quotelev1">&gt; [0x2b3dcef68b72]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 6]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(mca_base_components_open+0x302)
</span><br>
<span class="quotelev1">&gt; [0x2b3dcd2b08f2]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 7]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(opal_paffinity_base_open+0x67)
</span><br>
<span class="quotelev1">&gt; [0x2b3dcd2d3a87]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 8]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(opal_init+0x71)
</span><br>
<span class="quotelev1">&gt; [0x2b3dcd28bfb1]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [ 9]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(orte_init+0x23)
</span><br>
<span class="quotelev1">&gt; [0x2b3dcd2318f3]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [10] /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun [0x4049b5]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [11] /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun [0x404388]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [12] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x2b3dce540994]
</span><br>
<span class="quotelev1">&gt; [red2:28263] [13] /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun [0x4042b9]
</span><br>
<span class="quotelev1">&gt; [red2:28263] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /var/spool/torque/mom_priv/jobs/968.SC: line 3: 28263 Segmentation
</span><br>
<span class="quotelev1">&gt; fault /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if you need more information about this issue
</span><br>
<p>This looks like the exact same issue. Did you try the patch(es) I sent
<br>
earlier?
<br>
See <a href="http://www.open-mpi.org/community/lists/users/2011/09/17159.php">http://www.open-mpi.org/community/lists/users/2011/09/17159.php</a>
<br>
If it's not enough, try adding the other patch from
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/09/17156.php">http://www.open-mpi.org/community/lists/users/2011/09/17156.php</a>
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17210.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Previous message:</strong> <a href="17208.php">Kaizaad Bilimorya: "[OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>In reply to:</strong> <a href="17208.php">Kaizaad Bilimorya: "[OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17210.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Reply:</strong> <a href="17210.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Reply:</strong> <a href="17232.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
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
