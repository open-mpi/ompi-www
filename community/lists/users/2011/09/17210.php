<?
$subject_val = "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  9 15:40:32 2011" -->
<!-- isoreceived="20110909194032" -->
<!-- sent="Fri, 9 Sep 2011 15:39:29 -0400 (EDT)" -->
<!-- isosent="20110909193929" -->
<!-- name="Kaizaad Bilimorya" -->
<!-- email="kaizaad_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours" -->
<!-- id="alpine.LRH.2.02.1109091518570.18357_at_localhost.localdomain" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E6A65C5.4010706_at_inria.fr" -->
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
<strong>From:</strong> Kaizaad Bilimorya (<em>kaizaad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-09 15:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17211.php">Kevin.Buckley_at_[hidden]: "[OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>In reply to:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17232.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 9 Sep 2011, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 09/09/2011 21:03, Kaizaad Bilimorya a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We seem to have an issue similar to this thread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Bug in openmpi 1.5.4 in paffinity&quot;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/09/17151.php">http://www.open-mpi.org/community/lists/users/2011/09/17151.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using the following version of hwloc (from EPEL repo - we run CentOS 5.6)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ hwloc-info --version
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-info 1.1rc6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that Open MPI 1.5.4 uses its own embedded copy of hwloc 1.2.0.
</span><br>
<p>Ok thanks, good to know.
<br>
<p><span class="quotelev1">&gt; Your own 1.1rc6 should actual work fine (does lstopo crash?) but OMPI
</span><br>
<span class="quotelev1">&gt; cannot use it :)
</span><br>
<p>lstopo works. When we first got these chips I ran it (great tool btw, gave 
<br>
me a better understanding of the chip architecture). It shows an 
<br>
&quot;interesting&quot; picture for Magny-Cours (ie: 2 die's per socket along with 2 
<br>
NumaNodes - yes Magny-Cours is a strange beast). We knew this was the 
<br>
case, it is just nice to see the diagram in all its glory:
<br>
<p><a href="http://www.sharcnet.ca/~kaizaad/orca/orca_lstopo.jpg">http://www.sharcnet.ca/~kaizaad/orca/orca_lstopo.jpg</a>
<br>
<p><span class="quotelev2">&gt;&gt; A simple &quot;mpi_hello&quot; program works fine with cpusets and openMPI 1.4.2
</span><br>
<span class="quotelev2">&gt;&gt; but with openMPI 1.5.3 and cpusets we get the following segfault
</span><br>
<span class="quotelev2">&gt;&gt; (works fine on the node without cpusets enabled):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [red2:28263] *** Process received signal *** [red2:28263] Signal: 
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (11) [red2:28263] Signal code: Address not mapped 
</span><br>
<span class="quotelev2">&gt;&gt; (1) [red2:28263] Failing at address: 0x8 [red2:28263] [ 0] 
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libpthread.so.0 [0x2b3dce315b10] [red2:28263] [ 1] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so(opal_paffinity_hwloc_bitmap_or+0x142) [0x2b3dcef75cb2] [red2:28263] [ 2] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so [0x2b3dcef71404] [red2:28263] [ 3] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so [0x2b3dcef6bb26] [red2:28263] [ 4] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so(opal_paffinity_hwloc_topology_load+0xe2) [0x2b3dcef6e0b2] [red2:28263] [ 5] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/openmpi/mca_paffinity_hwloc.so [0x2b3dcef68b72] [red2:28263] [ 6] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(mca_base_components_open+0x302) [0x2b3dcd2b08f2] [red2:28263] [ 7] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(opal_paffinity_base_open+0x67) [0x2b3dcd2d3a87] [red2:28263] [ 8] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(opal_init+0x71) [0x2b3dcd28bfb1] [red2:28263] [ 9] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/lib/libopen-rte.so.3(orte_init+0x23) [0x2b3dcd2318f3] [red2:28263] [10] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun [0x4049b5] [red2:28263] [11] /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun [0x404388] 
</span><br>
<span class="quotelev2">&gt;&gt; [red2:28263] [12] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b3dce540994] [red2:28263] [13] 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun [0x4042b9] [red2:28263] 
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message *** /var/spool/torque/mom_priv/jobs/968.SC: 
</span><br>
<span class="quotelev2">&gt;&gt; line 3: 28263 Segmentation fault 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sharcnet/openmpi/1.5.4/intel/bin/mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if you need more information about this issue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks like the exact same issue. Did you try the patch(es) I sent
</span><br>
<span class="quotelev1">&gt; earlier?
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/community/lists/users/2011/09/17159.php">http://www.open-mpi.org/community/lists/users/2011/09/17159.php</a>
</span><br>
<span class="quotelev1">&gt; If it's not enough, try adding the other patch from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/09/17156.php">http://www.open-mpi.org/community/lists/users/2011/09/17156.php</a>
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>I'll do that now.
<br>
<p>thanks a bunch
<br>
-k
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17211.php">Kevin.Buckley_at_[hidden]: "[OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>In reply to:</strong> <a href="17209.php">Brice Goglin: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17232.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
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
