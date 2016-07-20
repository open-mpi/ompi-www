<?
$subject_val = "[hwloc-users] Assembling multiple node XMLs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 21:14:03 2015" -->
<!-- isoreceived="20151030011403" -->
<!-- sent="Thu, 29 Oct 2015 21:13:57 -0400" -->
<!-- isosent="20151030011357" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="[hwloc-users] Assembling multiple node XMLs" -->
<!-- id="20151029211357.210fc725_at_antares" -->
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
<strong>Subject:</strong> [hwloc-users] Assembling multiple node XMLs<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 21:13:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have a 6-node cluster with the buggy L3 H8QG6 AMD boards. Brice
<br>
Goglin recently provided a fix to Fabian Wein and I applied the same
<br>
fix (by diffing Fabian's original and Brice's fixed XML and then
<br>
incorporating the equivalent changes to our XML). It did the trick
<br>
perfectly, using openmpi-1.10.0 and hwloc 1.11.1. I then proceeded to
<br>
produce a patched XML for each node in our cluster.
<br>
<p>The problem arises when I try to combine the XMLs. To test the assembly
<br>
of just two XMLs, I ran:
<br>
<p>hwloc-assembler combo.xml \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--name clusty clusty_fixed.xml \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--name node1 node1_fixed.xml
<br>
<p>I then set HWLOC_XMLFILE to combo.xml and, when trying to mpirun a test
<br>
program on either of the two nodes, I get a segfault:
<br>
<p>andrej_at_clusty:~/MPI$ mpirun -np 44 python testmpi.py 
<br>
[clusty:19136] *** Process received signal ***
<br>
[clusty:19136] Signal: Segmentation fault (11)
<br>
[clusty:19136] Signal code: Address not mapped (1)
<br>
[clusty:19136] Failing at address: (nil)
<br>
[clusty:19136]
<br>
[ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x7fdf37f38340]
<br>
[clusty:19136]
<br>
[ 1] /usr/local/hwloc/lib/libhwloc.so.5(hwloc_bitmap_and+0x17)[0x7fdf37934e77]
<br>
[clusty:19136]
<br>
[ 2] /opt/openmpi-1.10.0/lib/libopen-pal.so.13(opal_hwloc_base_filter_cpus+0x37c)[0x7fdf381b239c]
<br>
[clusty:19136]
<br>
[ 3] /opt/openmpi-1.10.0/lib/libopen-pal.so.13(opal_hwloc_base_get_topology+0xcb)[0x7fdf381b412b]
<br>
[clusty:19136]
<br>
[ 4] /opt/openmpi-1.10.0/lib/openmpi/mca_ess_hnp.so(+0x47ea)[0x7fdf35c1c7ea]
<br>
[clusty:19136]
<br>
[ 5] /opt/openmpi-1.10.0/lib/libopen-rte.so.12(orte_init+0x168)[0x7fdf384062b8]
<br>
[clusty:19136] [ 6] mpirun[0x404497] [clusty:19136] [ 7]
<br>
mpirun[0x40363d] [clusty:19136]
<br>
[ 8] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7fdf37b81ec5]
<br>
[clusty:19136] [ 9] mpirun[0x403559] [clusty:19136] *** End of error
<br>
message *** Segmentation fault (core dumped)
<br>
<p>Each individual XML file works (i.e. no hwloc complaints and mpirun
<br>
works perfectly), but the assembled one does not. I'm attaching all
<br>
three XMLs: clusty.xml, node1.xml and combo.xml. Any ideas?
<br>
<p>Thanks,
<br>
Andrej
<br>
<p>


<br><hr>
<ul>
<li>application/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1214/clusty.xml">clusty.xml</a>
</ul>
<!-- attachment="clusty.xml" -->
<hr>
<ul>
<li>application/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1214/combo.xml">combo.xml</a>
</ul>
<!-- attachment="combo.xml" -->
<hr>
<ul>
<li>application/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1214/node1.xml">node1.xml</a>
</ul>
<!-- attachment="node1.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
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
