<?
$subject_val = "[OMPI devel] osu_mbw_mr error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 09:26:10 2014" -->
<!-- isoreceived="20141103142610" -->
<!-- sent="Mon, 3 Nov 2014 16:26:10 +0200" -->
<!-- isosent="20141103142610" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="[OMPI devel] osu_mbw_mr error" -->
<!-- id="CADGp0BT8yJATTzK0r2FGKuwB_6rRTcGx9Lchwg-DCipeUrx1vg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] osu_mbw_mr error<br>
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 09:26:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16143.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16143.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16143.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16159.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 1.8.4rc1 we observe the following assert in the osu_mbw_mr test when
<br>
using the openib BTL.
<br>
<p>When compiled in production mode (i.e. no --enable-debug) the test simply
<br>
hangs.
<br>
<p>When using either the tcp BTL or the cm PML, the benchmark completes
<br>
without error.
<br>
<p>The command line to reproduce this is:
<br>
<p>$ mpirun --bind-to core -display-map -mca btl_openib_if_include mlx5_0:1
<br>
-np 2 -mca pml ob1 -mca btl openib,self,sm ./osu_mbw_mr
<br>
<p># OSU MPI Multiple Bandwidth / Message Rate Test v4.4
<br>
# [ pairs: 1 ] [ window size: 64 ]
<br>
# Size                  MB/s        Messages/s
<br>
osu_mbw_mr: ../../../../opal/class/opal_list.h:547: _opal_list_append:
<br>
Assertion `0 == item-&gt;opal_list_item_refcount' failed.
<br>
[vegas15:30395] *** Process received signal ***
<br>
[vegas15:30395] Signal: Aborted (6)
<br>
[vegas15:30395] Signal code:  (-6)
<br>
[vegas15:30395] [ 0] /lib64/libpthread.so.0[0x30bc40f500]
<br>
[vegas15:30395] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x30bc0328a5]
<br>
[vegas15:30395] [ 2] /lib64/libc.so.6(abort+0x175)[0x30bc034085]
<br>
[vegas15:30395] [ 3] /lib64/libc.so.6[0x30bc02ba1e]
<br>
[vegas15:30395] [ 4]
<br>
/lib64/libc.so.6(__assert_perror_fail+0x0)[0x30bc02bae0]
<br>
[vegas15:30395] [ 5]
<br>
/labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(+0x9087)[0x7ffff3f70087]
<br>
[vegas15:30395] [ 6]
<br>
/labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_alloc+0x403)[0x7ffff3f754b3]
<br>
[vegas15:30395] [ 7]
<br>
/labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_sendi+0xf9e)[0x7ffff3f785b4]
<br>
[vegas15:30395] [ 8]
<br>
/labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(+0xed08)[0x7ffff3308d08]
<br>
[vegas15:30395] [ 9]
<br>
/labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(+0xf8ba)[0x7ffff33098ba]
<br>
[vegas15:30395] [10]
<br>
/labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_isend+0x108)[0x7ffff3309a1f]
<br>
[vegas15:30395] [11]
<br>
/labhome/alinas/workspace/tt/ompi_rc1/openmpi-1.8.4rc1/install/lib/libmpi.so.1(MPI_Isend+0x2ec)[0x7ffff7cff5e8]
<br>
[vegas15:30395] [12]
<br>
/hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x400fa4]
<br>
[vegas15:30395] [13]
<br>
/hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x40167d]
<br>
[vegas15:30395] [14] /lib64/libc.so.6(__libc_start_main+0xfd)[0x30bc01ecdd]
<br>
[vegas15:30395] [15]
<br>
/hpc/local/benchmarks/hpc-stack-gcc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4/osu_mbw_mr[0x400db9]
<br>
[vegas15:30395] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 30395 on node vegas15 exited on
<br>
signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p><p>Thanks,
<br>
Alina.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16142/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16143.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16143.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16143.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16159.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
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
