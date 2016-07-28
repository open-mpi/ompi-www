<?
$subject_val = "[OMPI users] disappearance of the memory registration error in 1.8.x?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 10:44:47 2015" -->
<!-- isoreceived="20150310144447" -->
<!-- sent="Tue, 10 Mar 2015 10:44:39 -0400" -->
<!-- isosent="20150310144439" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="[OMPI users] disappearance of the memory registration error in 1.8.x?" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE17F2707FD0_at_SWEC9985.w-intra.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] disappearance of the memory registration error in 1.8.x?<br>
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-10 10:44:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26452.php">Joshua Ladd: "Re: [OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>Reply:</strong> <a href="26452.php">Joshua Ladd: "Re: [OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to run the &quot;connectivity_c&quot; test on a variety of systems using OpenMPI 1.8.4. The test returns segmentation faults when running across nodes on one particular type of system, and only when using the openib BTL. (The test runs without error if I stipulate &quot;--mca btl tcp,self&quot;.) Here's the output:
<br>
<p>1033 fischega_at_bl1415[~/tmp/openmpi/1.8.4_test_examples_SLES11_SP2/error]&gt; mpirun -np 16 connectivity_c
<br>
[bl1415:29526] *** Process received signal ***
<br>
[bl1415:29526] Signal: Segmentation fault (11)
<br>
[bl1415:29526] Signal code:  (128)
<br>
[bl1415:29526] Failing at address: (nil)
<br>
[bl1415:29526] [ 0] /lib64/libpthread.so.0(+0xf5d0)[0x2ab1e72915d0]
<br>
[bl1415:29526] [ 1] /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/libopen-pal.so.6(opal_memory_ptmalloc2_int_malloc+0x29e)[0x2ab1e7c550be]
<br>
[bl1415:29526] [ 2] /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/libopen-pal.so.6(opal_memory_ptmalloc2_int_memalign+0x69)[0x2ab1e7c58829]
<br>
[bl1415:29526] [ 3] /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/libopen-pal.so.6(opal_memory_ptmalloc2_memalign+0x6f)[0x2ab1e7c583ff]
<br>
[bl1415:29526] [ 4] /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/openmpi/mca_btl_openib.so(+0x2867b)[0x2ab1eac8a67b]
<br>
[bl1415:29526] [ 5] /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/openmpi/mca_btl_openib.so(+0x1f712)[0x2ab1eac81712]
<br>
[bl1415:29526] [ 6] /lib64/libpthread.so.0(+0x75f0)[0x2ab1e72895f0]
<br>
[bl1415:29526] [ 7] /lib64/libc.so.6(clone+0x6d)[0x2ab1e757484d]
<br>
[bl1415:29526] *** End of error message ***
<br>
<p>When I run the same test using a previous build of OpenMPI 1.6.5 on this system, it returns a memory registration warning, but otherwise executes normally:
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.  This can cause MPI jobs to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>OpenMPI 1.8.4 does not seem to be reporting a memory registration warning in situations where previous versions would report such a warning. Is this because OpenMPI 1.8.4 is no longer vulnerable to this type of condition?
<br>
<p>Thanks,
<br>
Greg
<br>
<p>________________________________
<br>
This e-mail may contain proprietary information of the sending organization. Any unauthorized or improper disclosure, copying, distribution, or use of the contents of this e-mail and attached document(s) is prohibited. The information contained in this e-mail and attached document(s) is intended only for the personal and private use of the recipient(s) named above. If you have received this communication in error, please notify the sender immediately by email and delete the original e-mail and attached document(s).
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26452.php">Joshua Ladd: "Re: [OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>Reply:</strong> <a href="26452.php">Joshua Ladd: "Re: [OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
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
