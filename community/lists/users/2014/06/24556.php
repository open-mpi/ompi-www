<?
$subject_val = "Re: [OMPI users] openib segfaults with Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 17:16:29 2014" -->
<!-- isoreceived="20140605211629" -->
<!-- sent="Thu, 5 Jun 2014 17:16:20 -0400" -->
<!-- isosent="20140605211620" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib segfaults with Torque" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE159EE10877_at_SWEC9985.w-intra.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] openib segfaults with Torque" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib segfaults with Torque<br>
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 17:16:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24555.php">Dan Dietz: "[OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="24554.php">Fischer, Greg A.: "[OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24559.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24559.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the command I'm invoking and the terminal output.  (Some of this information doesn't appear to be captured in the backtrace.)
<br>
<p>[binf316:fischega] $ mpirun -np 1 -mca btl openib,self ring_c
<br>
ring_c: ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734: udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
<br>
[binf316:04549] *** Process received signal ***
<br>
[binf316:04549] Signal: Aborted (6)
<br>
[binf316:04549] Signal code:  (-6)
<br>
[binf316:04549] [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x7f7f5955e7c0]
<br>
[binf316:04549] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x7f7f5920ab55]
<br>
[binf316:04549] [ 2] /lib64/libc.so.6(abort+0x181)[0x7f7f5920c131]
<br>
[binf316:04549] [ 3] /lib64/libc.so.6(__assert_fail+0xf0)[0x7f7f59203a10]
<br>
[binf316:04549] [ 4] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x3784b)[0x7f7f548a484b]
<br>
[binf316:04549] [ 5] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x36474)[0x7f7f548a3474]
<br>
[binf316:04549] [ 6] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b)[0x7f7f5489c316]
<br>
[binf316:04549] [ 7] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x18817)[0x7f7f54885817]
<br>
[binf316:04549] [ 8] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_btl_base_select+0x1b2)[0x7f7f5982da5e]
<br>
[binf316:04549] [ 9] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x20)[0x7f7f54ac7d42]
<br>
[binf316:04549] [10] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_bml_base_init+0xd6)[0x7f7f5982cd1b]
<br>
[binf316:04549] [11] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_pml_ob1.so(+0x7739)[0x7f7f539ed739]
<br>
[binf316:04549] [12] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_pml_base_select+0x26e)[0x7f7f598539b2]
<br>
[binf316:04549] [13] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(ompi_mpi_init+0x5f6)[0x7f7f597c033c]
<br>
[binf316:04549] [14] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(MPI_Init+0x17e)[0x7f7f597f5386]
<br>
[binf316:04549] [15] ring_c[0x40096f]
<br>
[binf316:04549] [16] /lib64/libc.so.6(__libc_start_main+0xe6)[0x7f7f591f6c36]
<br>
[binf316:04549] [17] ring_c[0x400889]
<br>
[binf316:04549] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 4549 on node xxxx316 exited on signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p>From: Fischer, Greg A.
<br>
Sent: Thursday, June 05, 2014 5:10 PM
<br>
To: users_at_[hidden]
<br>
Cc: Fischer, Greg A.
<br>
Subject: openib segfaults with Torque
<br>
<p>OpenMPI Users,
<br>
<p>After encountering difficulty with the Intel compilers (see the &quot;intermittent segfaults with openib on ring_c.c&quot; thread), I installed GCC-4.8.3 and recompiled OpenMPI. I ran the simple examples (ring, etc.) with the openib BTL in a typical BASH environment. Everything appeared to work fine, so I went on my merry way compiling the rest of my dependencies.
<br>
<p>After getting my dependencies and applications compiled, I began observing segfaults when submitting the applications through Torque. I recompiled OpenMPI with debug options, ran &quot;ring_c&quot; over the openib BTL in an interactive Torque session (&quot;qsub -I&quot;), and got the backtrace below. All other system settings described in the previous thread are the same. Any thoughts on how to resolve this issue?
<br>
<p>Core was generated by `ring_c'.
<br>
Program terminated with signal 6, Aborted.
<br>
#0  0x00007f7f5920ab55 in raise () from /lib64/libc.so.6
<br>
(gdb) bt
<br>
#0  0x00007f7f5920ab55 in raise () from /lib64/libc.so.6
<br>
#1  0x00007f7f5920c0c5 in abort () from /lib64/libc.so.6
<br>
#2  0x00007f7f59203a10 in __assert_fail () from /lib64/libc.so.6
<br>
#3  0x00007f7f548a484b in udcm_module_finalize (btl=0x716680, cpc=0x718c40) at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734
<br>
#4  0x00007f7f548a3474 in udcm_component_query (btl=0x716680, cpc=0x717be8) at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:476
<br>
#5  0x00007f7f5489c316 in ompi_btl_openib_connect_base_select_for_local_port (btl=0x716680) at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_base.c:273
<br>
#6  0x00007f7f54885817 in btl_openib_component_init (num_btl_modules=0x7fff906aa420, enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:2703
<br>
#7  0x00007f7f5982da5e in mca_btl_base_select (enable_progress_threads=false, enable_mpi_threads=false) at ../../../../openmpi-1.8.1/ompi/mca/btl/base/btl_base_select.c:108
<br>
#8  0x00007f7f54ac7d42 in mca_bml_r2_component_init (priority=0x7fff906aa4f4, enable_progress_threads=false, enable_mpi_threads=false) at ../../../../../openmpi-1.8.1/ompi/mca/bml/r2/bml_r2_component.c:88
<br>
#9  0x00007f7f5982cd1b in mca_bml_base_init (enable_progress_threads=false, enable_mpi_threads=false) at ../../../../openmpi-1.8.1/ompi/mca/bml/base/bml_base_init.c:69
<br>
#10 0x00007f7f539ed739 in mca_pml_ob1_component_init (priority=0x7fff906aa630, enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.8.1/ompi/mca/pml/ob1/pml_ob1_component.c:271
<br>
#11 0x00007f7f598539b2 in mca_pml_base_select (enable_progress_threads=false, enable_mpi_threads=false) at ../../../../openmpi-1.8.1/ompi/mca/pml/base/pml_base_select.c:128
<br>
#12 0x00007f7f597c033c in ompi_mpi_init (argc=1, argv=0x7fff906aa928, requested=0, provided=0x7fff906aa7d8) at ../../openmpi-1.8.1/ompi/runtime/ompi_mpi_init.c:604
<br>
#13 0x00007f7f597f5386 in PMPI_Init (argc=0x7fff906aa82c, argv=0x7fff906aa820) at pinit.c:84
<br>
#14 0x000000000040096f in main (argc=1, argv=0x7fff906aa928) at ring_c.c:19
<br>
<p>Greg
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24556/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24555.php">Dan Dietz: "[OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="24554.php">Fischer, Greg A.: "[OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24559.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24559.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
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
