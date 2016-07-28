<?
$subject_val = "Re: [OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 19:59:28 2013" -->
<!-- isoreceived="20130126005928" -->
<!-- sent="Fri, 25 Jan 2013 16:59:20 -0800" -->
<!-- isosent="20130126005920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="BA0EC790-7168-4EAC-83AB-833382299637_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B6F069CE-B0FC-493C-86D2-A9781EC068C8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI (not quite) on Cray XC30<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 19:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12004.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12002.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12002.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12004.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12004.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12006.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2013, at 4:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The repeated libs is something we obviously should fix, but all the libs are there - including lustre. I guess those were dropped due to the shared lib setting, so we probably should fix that in the platform file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps that is the cause of Nathan's issue? shrug...regardless, apps build and run just fine using mpicc for me.
</span><br>
<p>Correction - turns out I misspoke. I find apps *don't* build correctly with this setup:
<br>
<p>mpicc -g    hello_c.c   -o hello_c
<br>
/usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_set_area_membind':
<br>
/lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1116: undefined reference to `mbind'
<br>
/lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1135: undefined reference to `mbind'
<br>
/usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_get_area_membind':
<br>
/lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1337: undefined reference to `get_mempolicy'
<br>
/usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_find_kernel_max_numnodes':
<br>
/lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1239: undefined reference to `get_mempolicy'
<br>
/usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_set_thisthread_membind':
<br>
/lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1183: undefined reference to `set_mempolicy'
<br>
/lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1194: undefined reference to `migrate_pages'
<br>
/lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1206: undefined reference to `set_mempolicy'
<br>
/usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_get_thisthread_membind':
<br>
/lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1284: undefined reference to `get_mempolicy'
<br>
/usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_find_kernel_max_numnodes':
<br>
/lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1239: undefined reference to `get_mempolicy'
<br>
collect2: ld returned 1 exit status
<br>
make: *** [hello_c] Error 1
<br>
<p>So it looks like hwloc is borked when built static.
<br>
<p>Sigh
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12004.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12002.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12002.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12004.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12004.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12006.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
