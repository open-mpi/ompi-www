<?
$subject_val = "Re: [OMPI devel] osu_mbw_mr error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 18:03:46 2014" -->
<!-- isoreceived="20141103230346" -->
<!-- sent="Mon, 3 Nov 2014 16:03:45 -0700" -->
<!-- isosent="20141103230345" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] osu_mbw_mr error" -->
<!-- id="20141103230345.GB6508_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 18:03:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16160.php">Paul Hargrove: "[OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Previous message:</strong> <a href="16158.php">Jed Brown: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-198-g68bec0a"</a>
<li><strong>In reply to:</strong> <a href="16142.php">Alina Sklarevich: "[OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the problem. The openib btl does not properly handle the following
<br>
call sequence (this is an openib btl bug IMHO):
<br>
<p>btl_sendi (..., &amp;descriptor);
<br>
btl_free (..., descriptor);
<br>
<p>The bug is in the message coalescing code and it looks like extra logic
<br>
needs to be added to the openib btl's btl_free function for this to work
<br>
properly. I am working on a fix now.
<br>
<p>-Nathan
<br>
<p>On Mon, Nov 03, 2014 at 04:26:10PM +0200, Alina Sklarevich wrote:
<br>
<span class="quotelev1">&gt;    Hi,
</span><br>
<span class="quotelev1">&gt;    On 1.8.4rc1 we observe the following assert in the osu_mbw_mr test when
</span><br>
<span class="quotelev1">&gt;    using the openib BTL.
</span><br>
<span class="quotelev1">&gt;    When compiled in production mode (i.e. no --enable-debug) the test simply
</span><br>
<span class="quotelev1">&gt;    hangs.
</span><br>
<span class="quotelev1">&gt;    When using either the tcp BTL or the cm PML, the benchmark completes
</span><br>
<span class="quotelev1">&gt;    without error.
</span><br>
<span class="quotelev1">&gt;    The command line to reproduce this is:
</span><br>
<span class="quotelev1">&gt;    $ mpirun --bind-to core -display-map -mca btl_openib_if_include mlx5_0:1
</span><br>
<span class="quotelev1">&gt;    -np 2 -mca pml ob1 -mca btl openib,self,sm ./osu_mbw_mr
</span><br>
<span class="quotelev1">&gt;    # OSU MPI Multiple Bandwidth / Message Rate Test v4.4
</span><br>
<span class="quotelev1">&gt;    # [ pairs: 1 ] [ window size: 64 ]
</span><br>
<span class="quotelev1">&gt;    # Size                  MB/s        Messages/s
</span><br>
<span class="quotelev1">&gt;    osu_mbw_mr: ../../../../opal/class/opal_list.h:547: _opal_list_append:
</span><br>
<span class="quotelev1">&gt;    Assertion `0 == item-&gt;opal_list_item_refcount' failed.
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 0] /lib64/libpthread.so.0[0x30bc40f500]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x30bc0328a5]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 2] /lib64/libc.so.6(abort+0x175)[0x30bc034085]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 3] /lib64/libc.so.6[0x30bc02ba1e]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 4]
</span><br>
<span class="quotelev1">&gt;    /lib64/libc.so.6(__assert_perror_fail+0x0)[0x30bc02bae0]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 5]
</span><br>
<span class="quotelev1">&gt;    /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(+0x9087)[0x7ffff3f70087]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 6]
</span><br>
<span class="quotelev1">&gt;    /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_alloc+0x403)[0x7ffff3f754b3]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 7]
</span><br>
<span class="quotelev1">&gt;    /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_sendi+0xf9e)[0x7ffff3f785b4]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 8]
</span><br>
<span class="quotelev1">&gt;    /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(+0xed08)[0x7ffff3308d08]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [ 9]
</span><br>
<span class="quotelev1">&gt;    /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(+0xf8ba)[0x7ffff33098ba]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [10]
</span><br>
<span class="quotelev1">&gt;    /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_isend+0x108)[0x7ffff3309a1f]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [11]
</span><br>
<span class="quotelev1">&gt;    /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/libmpi.so.1(MPI_Isend+0x2ec)[0x7ffff7cff5e8]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [12]
</span><br>
<span class="quotelev1">&gt;    /hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x400fa4]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [13]
</span><br>
<span class="quotelev1">&gt;    /hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x40167d]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [14]
</span><br>
<span class="quotelev1">&gt;    /lib64/libc.so.6(__libc_start_main+0xfd)[0x30bc01ecdd]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] [15]
</span><br>
<span class="quotelev1">&gt;    /hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x400db9]
</span><br>
<span class="quotelev1">&gt;    [vegas15:30395] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    mpirun noticed that process rank 0 with PID 30395 on node vegas15 exited
</span><br>
<span class="quotelev1">&gt;    on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;    Alina.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16142.php">http://www.open-mpi.org/community/lists/devel/2014/11/16142.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16159/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16160.php">Paul Hargrove: "[OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Previous message:</strong> <a href="16158.php">Jed Brown: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-198-g68bec0a"</a>
<li><strong>In reply to:</strong> <a href="16142.php">Alina Sklarevich: "[OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
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
