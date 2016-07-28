<?
$subject_val = "Re: [OMPI devel] osu_mbw_mr error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 09:47:05 2014" -->
<!-- isoreceived="20141103144705" -->
<!-- sent="Mon, 3 Nov 2014 06:47:00 -0800" -->
<!-- isosent="20141103144700" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] osu_mbw_mr error" -->
<!-- id="55E31C0C-FFD3-4365-B555-27A3B81DFA0D_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADGp0BT8yJATTzK0r2FGKuwB_6rRTcGx9Lchwg-DCipeUrx1vg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] osu_mbw_mr error<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 09:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16142.php">Alina Sklarevich: "[OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16142.php">Alina Sklarevich: "[OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16159.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you please let me know when you fix this? I intend to release 1.8.4 by the end of the week. Since Mellanox is the only member with IB, you folks have been maintaining this BTL.
<br>
<p><p><span class="quotelev1">&gt; On Nov 3, 2014, at 6:26 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1.8.4rc1 we observe the following assert in the osu_mbw_mr test when using the openib BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When compiled in production mode (i.e. no --enable-debug) the test simply hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using either the tcp BTL or the cm PML, the benchmark completes without error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command line to reproduce this is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --bind-to core -display-map -mca btl_openib_if_include mlx5_0:1 -np 2 -mca pml ob1 -mca btl openib,self,sm ./osu_mbw_mr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OSU MPI Multiple Bandwidth / Message Rate Test v4.4
</span><br>
<span class="quotelev1">&gt; # [ pairs: 1 ] [ window size: 64 ]
</span><br>
<span class="quotelev1">&gt; # Size                  MB/s        Messages/s
</span><br>
<span class="quotelev1">&gt; osu_mbw_mr: ../../../../opal/class/opal_list.h:547: _opal_list_append: Assertion `0 == item-&gt;opal_list_item_refcount' failed.
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 0] /lib64/libpthread.so.0[0x30bc40f500]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x30bc0328a5]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 2] /lib64/libc.so.6(abort+0x175)[0x30bc034085]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 3] /lib64/libc.so.6[0x30bc02ba1e]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 4] /lib64/libc.so.6(__assert_perror_fail+0x0)[0x30bc02bae0]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 5] /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(+0x9087)[0x7ffff3f70087]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 6] /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_alloc+0x403)[0x7ffff3f754b3]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 7] /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_sendi+0xf9e)[0x7ffff3f785b4]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 8] /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(+0xed08)[0x7ffff3308d08]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [ 9] /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(+0xf8ba)[0x7ffff33098ba]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [10] /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_isend+0x108)[0x7ffff3309a1f]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [11] /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/libmpi.so.1(MPI_Isend+0x2ec)[0x7ffff7cff5e8]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [12] /hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x400fa4]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [13] /hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x40167d]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [14] /lib64/libc.so.6(__libc_start_main+0xfd)[0x30bc01ecdd]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] [15] /hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x400db9]
</span><br>
<span class="quotelev1">&gt; [vegas15:30395] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 30395 on node vegas15 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alina.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16142.php">http://www.open-mpi.org/community/lists/devel/2014/11/16142.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16142.php">Alina Sklarevich: "[OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16142.php">Alina Sklarevich: "[OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16159.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
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
