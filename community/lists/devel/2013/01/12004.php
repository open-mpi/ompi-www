<?
$subject_val = "Re: [OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 20:05:02 2013" -->
<!-- isoreceived="20130126010502" -->
<!-- sent="Fri, 25 Jan 2013 17:04:55 -0800" -->
<!-- isosent="20130126010455" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="69F4A9F3-B41F-42F1-AF94-203FCC829888_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BA0EC790-7168-4EAC-83AB-833382299637_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-01-25 20:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12005.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12003.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12003.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12006.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the problem - it is an error in hwloc. It's missing a required include &lt;numaif.h&gt;. I'll fix and push it upstream.
<br>
<p><p>On Jan 25, 2013, at 4:59 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2013, at 4:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The repeated libs is something we obviously should fix, but all the libs are there - including lustre. I guess those were dropped due to the shared lib setting, so we probably should fix that in the platform file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps that is the cause of Nathan's issue? shrug...regardless, apps build and run just fine using mpicc for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correction - turns out I misspoke. I find apps *don't* build correctly with this setup:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev1">&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_set_area_membind':
</span><br>
<span class="quotelev1">&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1116: undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1135: undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_get_area_membind':
</span><br>
<span class="quotelev1">&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1337: undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_find_kernel_max_numnodes':
</span><br>
<span class="quotelev1">&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1239: undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_set_thisthread_membind':
</span><br>
<span class="quotelev1">&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1183: undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev1">&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1194: undefined reference to `migrate_pages'
</span><br>
<span class="quotelev1">&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1206: undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev1">&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_get_thisthread_membind':
</span><br>
<span class="quotelev1">&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1284: undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o): In function `hwloc_linux_find_kernel_max_numnodes':
</span><br>
<span class="quotelev1">&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1239: undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make: *** [hello_c] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it looks like hwloc is borked when built static.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sigh
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12005.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12003.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12003.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12006.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
