<?
$subject_val = "[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 06:07:09 2008" -->
<!-- isoreceived="20080430100709" -->
<!-- sent="Wed, 30 Apr 2008 15:36:56 +0530" -->
<!-- isosent="20080430100656" -->
<!-- name="Mukesh K Srivastava" -->
<!-- email="srimks11_at_[hidden]" -->
<!-- subject="[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message." -->
<!-- id="3efa6bfc0804300306v196b0ad7t7f8d6caf90e6522f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message.<br>
<strong>From:</strong> Mukesh K Srivastava (<em>srimks11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-30 06:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3784.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3782.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3784.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Reply:</strong> <a href="3784.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3790.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>I am using IMB-3.1, an Intel MPI Benchmark tool with OpenMPI(v-1.2.5). In
<br>
/IMB-3.1/src/make_mpich file, I had only given the decalartion for MPI_HOME,
<br>
which takes care for CC, OPTFLAGS &amp; CLINKER. Building IMB_MPI1, IMP-EXT &amp;
<br>
IMB-IO happens succesfully.
<br>
<p>I get proper results of IMB Benchmark with command &quot;-np 1&quot; as mpirun
<br>
IMB-MPI1, but for &quot;-np 2&quot;, I get below errors -
<br>
<p>-----
<br>
[mukesh_at_n161 src]$ mpirun -np 2 IMB-MPI1
<br>
[n161:13390] *** Process received signal ***
<br>
[n161:13390] Signal: Segmentation fault (11)
<br>
[n161:13390] Signal code: Address not mapped (1)
<br>
[n161:13390] Failing at address: (nil)
<br>
[n161:13390] [ 0] /lib64/tls/libpthread.so.0 [0x399e80c4f0]
<br>
[n161:13390] [ 1] /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so
<br>
[0x2a9830f8b4]
<br>
[n161:13390] [ 2] /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so
<br>
[0x2a983109e3]
<br>
[n161:13390] [ 3]
<br>
/home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0xbc)
<br>
[0x2a9830fc50]
<br>
[n161:13390] [ 4]
<br>
/home/mukesh/openmpi/prefix/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x4b)
<br>
[0x2a97fce447]
<br>
[n161:13390] [ 5]
<br>
/home/mukesh/openmpi/prefix/lib/libopen-pal.so.0(opal_progress+0xbc)
<br>
[0x2a958fc343]
<br>
[n161:13390] [ 6]
<br>
/home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x22)
<br>
[0x2a962e9e22]
<br>
[n161:13390] [ 7]
<br>
/home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x677)
<br>
[0x2a962f1aab]
<br>
[n161:13390] [ 8]
<br>
/home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(mca_oob_recv_packed+0x46)
<br>
[0x2a9579d243]
<br>
[n161:13390] [ 9]
<br>
/home/mukesh/openmpi/prefix/lib/openmpi/mca_gpr_proxy.so(orte_gpr_proxy_put+0x2f3)
<br>
[0x2a96508c8f]
<br>
[n161:13390] [10]
<br>
/home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(orte_smr_base_set_proc_state+0x425)
<br>
[0x2a957c391d]
<br>
[n161:13390] [11]
<br>
/home/mukesh/openmpi/prefix/lib/libmpi.so.0(ompi_mpi_init+0xa1e)
<br>
[0x2a9559f042]
<br>
[n161:13390] [12]
<br>
/home/mukesh/openmpi/prefix/lib/libmpi.so.0(PMPI_Init_thread+0xcb)
<br>
[0x2a955e1c5b]
<br>
[n161:13390] [13] IMB-MPI1(main+0x33) [0x403543]
<br>
[n161:13390] [14] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
<br>
[0x399e11c3fb]
<br>
[n161:13390] [15] IMB-MPI1 [0x40347a]
<br>
[n161:13390] *** End of error message ***
<br>
[n161:13391] *** Process received signal ***
<br>
[n161:13391] Signal: Segmentation fault (11)
<br>
[n161:13391] Signal code: Address not mapped (1)
<br>
[n161:13391] Failing at address: (nil)
<br>
[n161:13391] [ 0] /lib64/tls/libpthread.so.0 [0x399e80c4f0]
<br>
[n161:13391] [ 1] /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so
<br>
[0x2a9830f8b4]
<br>
[n161:13391] [ 2] /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so
<br>
[0x2a983109e3]
<br>
[n161:13391] [ 3]
<br>
/home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0xbc)
<br>
[0x2a9830fc50]
<br>
[n161:13391] [ 4]
<br>
/home/mukesh/openmpi/prefix/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x4b)
<br>
[0x2a97fce447]
<br>
[n161:13391] [ 5]
<br>
/home/mukesh/openmpi/prefix/lib/libopen-pal.so.0(opal_progress+0xbc)
<br>
[0x2a958fc343]
<br>
[n161:13391] [ 6]
<br>
/home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x22)
<br>
[0x2a962e9e22]
<br>
[n161:13391] [ 7]
<br>
/home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x677)
<br>
[0x2a962f1aab]
<br>
[n161:13391] [ 8]
<br>
/home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(mca_oob_recv_packed+0x46)
<br>
[0x2a9579d243]
<br>
[n161:13391] [ 9] /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0
<br>
[0x2a9579e910]
<br>
[n161:13391] [10]
<br>
/home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(mca_oob_xcast+0x140)
<br>
[0x2a9579d824]
<br>
[n161:13391] [11]
<br>
/home/mukesh/openmpi/prefix/lib/libmpi.so.0(ompi_mpi_init+0xaf1)
<br>
[0x2a9559f115]
<br>
[n161:13391] [12]
<br>
/home/mukesh/openmpi/prefix/lib/libmpi.so.0(PMPI_Init_thread+0xcb)
<br>
[0x2a955e1c5b]
<br>
[n161:13391] [13] IMB-MPI1(main+0x33) [0x403543]
<br>
[n161:13391] [14] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
<br>
[0x399e11c3fb]
<br>
[n161:13391] [15] IMB-MPI1 [0x40347a]
<br>
[n161:13391] *** End of error message ***
<br>
<p>-----
<br>
<p>Query#1: Any clue for above?
<br>
<p>Query#2:  How can I include seperate exe file and have the IMB for it, e.g,
<br>
writing a hello.c with MPI elementary API calls, compiling with mpicc and
<br>
performing IMB for the same exe.?
<br>
<p>BR
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3784.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3782.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3784.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Reply:</strong> <a href="3784.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3790.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
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
