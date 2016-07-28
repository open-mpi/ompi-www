<?
$subject_val = "[OMPI devel]  osu_mbw_mr error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 16:06:25 2014" -->
<!-- isoreceived="20141106210625" -->
<!-- sent="Thu, 6 Nov 2014 16:06:23 -0500" -->
<!-- isosent="20141106210623" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="[OMPI devel]  osu_mbw_mr error" -->
<!-- id="CAG4F6z_i5QvS=L4=WdMAfJ7HCXWpE-LHTL=BgGht=HO7tG3oFA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG4F6z8=CunaX2yi5s1cDs9gO5EaLVphomYMCn3HFmudDP+Zog_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel]  osu_mbw_mr error<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 16:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16249.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16254.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT diligence"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Has this bug always been present in OpenIB or is this a recent addition? If
<br>
this is regression, I would also be inclined to say that this is a blocker
<br>
for 1.8.4. This is a SIGNIFICANT bug. Both Howard and I were quite
<br>
surprised that all the while this code has been in use at LANL
<br>
in production systems, this issue was never discovered.
<br>
<p>Once again, many thanks to Alina for discovering and reporting this. Keep
<br>
up the MTT vigilance!
<br>
<p>Josh
<br>
<p><p><p>On Tuesday, November 4, 2014, Joshua Ladd &lt;jladd.mlnx_at_[hidden]
<br>
&lt;javascript:_e(%7B%7D,'cvml','jladd.mlnx_at_[hidden]');&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, Nathan. After a bit more investigation yesterday, this was our
</span><br>
<span class="quotelev1">&gt; conclusion too; that it is a longstanding bug in OpenIB BTL we just
</span><br>
<span class="quotelev1">&gt; happened to start triggering the broken flow with some recent changes made
</span><br>
<span class="quotelev1">&gt; to the default max_lmc parameter. Let us know if you need anything from our
</span><br>
<span class="quotelev1">&gt; end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 3, 2014 at 6:03 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see the problem. The openib btl does not properly handle the following
</span><br>
<span class="quotelev2">&gt;&gt; call sequence (this is an openib btl bug IMHO):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_sendi (..., &amp;descriptor);
</span><br>
<span class="quotelev2">&gt;&gt; btl_free (..., descriptor);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The bug is in the message coalescing code and it looks like extra logic
</span><br>
<span class="quotelev2">&gt;&gt; needs to be added to the openib btl's btl_free function for this to work
</span><br>
<span class="quotelev2">&gt;&gt; properly. I am working on a fix now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Nov 03, 2014 at 04:26:10PM +0200, Alina Sklarevich wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    On 1.8.4rc1 we observe the following assert in the osu_mbw_mr test
</span><br>
<span class="quotelev2">&gt;&gt; when
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    using the openib BTL.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    When compiled in production mode (i.e. no --enable-debug) the test
</span><br>
<span class="quotelev2">&gt;&gt; simply
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    hangs.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    When using either the tcp BTL or the cm PML, the benchmark completes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    without error.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    The command line to reproduce this is:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    $ mpirun --bind-to core -display-map -mca btl_openib_if_include
</span><br>
<span class="quotelev2">&gt;&gt; mlx5_0:1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    -np 2 -mca pml ob1 -mca btl openib,self,sm ./osu_mbw_mr
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    # OSU MPI Multiple Bandwidth / Message Rate Test v4.4
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    # [ pairs: 1 ] [ window size: 64 ]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    # Size                  MB/s        Messages/s
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    osu_mbw_mr: ../../../../opal/class/opal_list.h:547:
</span><br>
<span class="quotelev2">&gt;&gt; _opal_list_append:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Assertion `0 == item-&gt;opal_list_item_refcount' failed.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] Signal: Aborted (6)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] Signal code:  (-6)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 0] /lib64/libpthread.so.0[0x30bc40f500]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x30bc0328a5]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 2] /lib64/libc.so.6(abort+0x175)[0x30bc034085]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 3] /lib64/libc.so.6[0x30bc02ba1e]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    /lib64/libc.so.6(__assert_perror_fail+0x0)[0x30bc02bae0]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(+0x9087)[0x7ffff3f70087]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_alloc+0x403)[0x7ffff3f754b3]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_sendi+0xf9e)[0x7ffff3f785b4]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(+0xed08)[0x7ffff3308d08]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(+0xf8ba)[0x7ffff33098ba]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [10]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_isend+0x108)[0x7ffff3309a1f]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [11]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/libmpi.so.1(MPI_Isend+0x2ec)[0x7ffff7cff5e8]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [12]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x400fa4]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [13]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x40167d]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [14]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    /lib64/libc.so.6(__libc_start_main+0xfd)[0x30bc01ecdd]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] [15]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x400db9]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [vegas15:30395] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    mpirun noticed that process rank 0 with PID 30395 on node vegas15
</span><br>
<span class="quotelev2">&gt;&gt; exited
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    on signal 6 (Aborted).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Alina.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16142.php">http://www.open-mpi.org/community/lists/devel/2014/11/16142.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16159.php">http://www.open-mpi.org/community/lists/devel/2014/11/16159.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16249.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16254.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT diligence"</a>
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
