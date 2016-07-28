<?
$subject_val = "[OMPI users] Bug in openmpi 1.5.4 in paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  4 16:00:11 2011" -->
<!-- isoreceived="20110904200011" -->
<!-- sent="Sun, 04 Sep 2011 22:00:03 +0200" -->
<!-- isosent="20110904200003" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in openmpi 1.5.4 in paffinity" -->
<!-- id="1315166403.9050.8.camel_at_skalman.hpc2n.umu.se" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Bug in openmpi 1.5.4 in paffinity<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-04 16:00:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17152.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17150.php">Andrew Senin: "Re: [OMPI users] Mellanox/Voltaire FCA support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17152.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17152.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Maybe reply:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I'm getting a segfault in hwloc_setup_distances_from_os_matrix in the
<br>
call to hwloc_bitmap_or due to objs or objs[i]-&gt;cpuset being freed and
<br>
containing garbage, objs[i]-&gt;cpuset has infinite &lt; 0.
<br>
<p>I only get this when using slurm with cgroups, asking for 2 nodes with 1
<br>
cpu each. The cpuset is then already set when mpiexec starts and
<br>
something breaks down.
<br>
<p>valgrind on mpiexec says:
<br>
==27540== Invalid read of size 8
<br>
==27540==    at 0x7178F79:
<br>
opal_paffinity_hwloc_finalize_logical_distances (distances.c:412)
<br>
==27540==    by 0x7172C1E: hwloc_discover (topology.c:1805)
<br>
==27540==    by 0x71745F2: opal_paffinity_hwloc_topology_load
<br>
(topology.c:2244)
<br>
==27540==    by 0x7164FB4: hwloc_open (paffinity_hwloc_component.c:93)
<br>
==27540==    by 0x4F98D2E: mca_base_components_open
<br>
(mca_base_components_open.c:214)
<br>
==27540==    by 0x500084B: opal_paffinity_base_open
<br>
(paffinity_base_open.c:120)
<br>
==27540==    by 0x4F525BB: opal_init (opal_init.c:307)
<br>
==27540==    by 0x4E50CA8: orte_init (orte_init.c:78)
<br>
==27540==    by 0x403C8F: orterun (orterun.c:615)
<br>
==27540==    by 0x4032C3: main (main.c:13)
<br>
==27540==  Address 0x6e38380 is 160 bytes inside a block of size 248
<br>
free'd
<br>
==27540==    at 0x4C270BD: free (vg_replace_malloc.c:366)
<br>
==27540==    by 0x716B6A1: unlink_and_free_object_and_children
<br>
(topology.c:1131)
<br>
==27540==    by 0x716BB35: remove_empty (topology.c:1150)
<br>
==27540==    by 0x7170CBB: hwloc_discover (topology.c:1768)
<br>
==27540==    by 0x71745F2: opal_paffinity_hwloc_topology_load
<br>
(topology.c:2244)
<br>
==27540==    by 0x7164FB4: hwloc_open (paffinity_hwloc_component.c:93)
<br>
==27540==    by 0x4F98D2E: mca_base_components_open
<br>
(mca_base_components_open.c:214)
<br>
==27540==    by 0x500084B: opal_paffinity_base_open
<br>
(paffinity_base_open.c:120)
<br>
==27540==    by 0x4F525BB: opal_init (opal_init.c:307)
<br>
==27540==    by 0x4E50CA8: orte_init (orte_init.c:78)
<br>
==27540==    by 0x403C8F: orterun (orterun.c:615)
<br>
==27540==    by 0x4032C3: main (main.c:13)
<br>
<p>I hope the above info is enough and that you can fix it :-)
<br>
<p>/&#195;&#133;ke S.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17152.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17150.php">Andrew Senin: "Re: [OMPI users] Mellanox/Voltaire FCA support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17152.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Reply:</strong> <a href="17152.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Maybe reply:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
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
