<?
$subject_val = "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  4 16:13:48 2011" -->
<!-- isoreceived="20110904201348" -->
<!-- sent="Sun, 04 Sep 2011 22:13:40 +0200" -->
<!-- isosent="20110904201340" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity" -->
<!-- id="4E63DBF4.1020001_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1315166403.9050.8.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-04 16:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17151.php">Ake Sandgren: "[OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>In reply to:</strong> <a href="17151.php">Ake Sandgren: "[OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Could you log again on this node (with same cgroups enabled), run
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc-gather-topology &lt;name&gt;
<br>
and send the resulting &lt;name&gt;.output and &lt;name&gt;.tar.bz2?
<br>
<p>Send them to the hwloc-devel or open a ticket on
<br>
<a href="https://svn.open-mpi.org/trac/hwloc">https://svn.open-mpi.org/trac/hwloc</a> (or send them to me in private if
<br>
you don't want to subscribe).
<br>
<p>thanks
<br>
Brice
<br>
<p><p><p>Le 04/09/2011 22:00, Ake Sandgren a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting a segfault in hwloc_setup_distances_from_os_matrix in the
</span><br>
<span class="quotelev1">&gt; call to hwloc_bitmap_or due to objs or objs[i]-&gt;cpuset being freed and
</span><br>
<span class="quotelev1">&gt; containing garbage, objs[i]-&gt;cpuset has infinite &lt; 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I only get this when using slurm with cgroups, asking for 2 nodes with 1
</span><br>
<span class="quotelev1">&gt; cpu each. The cpuset is then already set when mpiexec starts and
</span><br>
<span class="quotelev1">&gt; something breaks down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valgrind on mpiexec says:
</span><br>
<span class="quotelev1">&gt; ==27540== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==27540==    at 0x7178F79:
</span><br>
<span class="quotelev1">&gt; opal_paffinity_hwloc_finalize_logical_distances (distances.c:412)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x7172C1E: hwloc_discover (topology.c:1805)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x71745F2: opal_paffinity_hwloc_topology_load
</span><br>
<span class="quotelev1">&gt; (topology.c:2244)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x7164FB4: hwloc_open (paffinity_hwloc_component.c:93)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x4F98D2E: mca_base_components_open
</span><br>
<span class="quotelev1">&gt; (mca_base_components_open.c:214)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x500084B: opal_paffinity_base_open
</span><br>
<span class="quotelev1">&gt; (paffinity_base_open.c:120)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x4F525BB: opal_init (opal_init.c:307)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x4E50CA8: orte_init (orte_init.c:78)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x403C8F: orterun (orterun.c:615)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x4032C3: main (main.c:13)
</span><br>
<span class="quotelev1">&gt; ==27540==  Address 0x6e38380 is 160 bytes inside a block of size 248
</span><br>
<span class="quotelev1">&gt; free'd
</span><br>
<span class="quotelev1">&gt; ==27540==    at 0x4C270BD: free (vg_replace_malloc.c:366)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x716B6A1: unlink_and_free_object_and_children
</span><br>
<span class="quotelev1">&gt; (topology.c:1131)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x716BB35: remove_empty (topology.c:1150)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x7170CBB: hwloc_discover (topology.c:1768)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x71745F2: opal_paffinity_hwloc_topology_load
</span><br>
<span class="quotelev1">&gt; (topology.c:2244)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x7164FB4: hwloc_open (paffinity_hwloc_component.c:93)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x4F98D2E: mca_base_components_open
</span><br>
<span class="quotelev1">&gt; (mca_base_components_open.c:214)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x500084B: opal_paffinity_base_open
</span><br>
<span class="quotelev1">&gt; (paffinity_base_open.c:120)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x4F525BB: opal_init (opal_init.c:307)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x4E50CA8: orte_init (orte_init.c:78)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x403C8F: orterun (orterun.c:615)
</span><br>
<span class="quotelev1">&gt; ==27540==    by 0x4032C3: main (main.c:13)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope the above info is enough and that you can fix it :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /&#195;&#133;ke S.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17151.php">Ake Sandgren: "[OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>In reply to:</strong> <a href="17151.php">Ake Sandgren: "[OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
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
