<?
$subject_val = "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 09:02:24 2008" -->
<!-- isoreceived="20080430130224" -->
<!-- sent="Wed, 30 Apr 2008 16:02:16 +0300" -->
<!-- isosent="20080430130216" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message." -->
<!-- id="453d39990804300602mbcefad8j61c02971597978f8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3efa6bfc0804300306v196b0ad7t7f8d6caf90e6522f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message.<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-30 09:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3785.php">Lenny Verkhovsky: "[OMPI devel] Fwd: Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3783.php">Mukesh K Srivastava: "[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>In reply to:</strong> <a href="3783.php">Mukesh K Srivastava: "[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3785.php">Lenny Verkhovsky: "[OMPI devel] Fwd: Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Reply:</strong> <a href="3785.php">Lenny Verkhovsky: "[OMPI devel] Fwd: Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/30/08, Mukesh K Srivastava &lt;srimks11_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using IMB-3.1, an Intel MPI Benchmark tool with OpenMPI(v-1.2.5). In
</span><br>
<span class="quotelev1">&gt; /IMB-3.1/src/make_mpich file, I had only given the decalartion for MPI_HOME,
</span><br>
<span class="quotelev1">&gt; which takes care for CC, OPTFLAGS &amp; CLINKER. Building IMB_MPI1, IMP-EXT &amp;
</span><br>
<span class="quotelev1">&gt; IMB-IO happens succesfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get proper results of IMB Benchmark with command &quot;-np 1&quot; as mpirun
</span><br>
<span class="quotelev1">&gt; IMB-MPI1, but for &quot;-np 2&quot;, I get below errors -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [mukesh_at_n161 src]$ mpirun -np 2 IMB-MPI1
</span><br>
<span class="quotelev1">&gt; [n161:13390] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n161:13390] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n161:13390] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n161:13390] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 0] /lib64/tls/libpthread.so.0 [0x399e80c4f0]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 1] /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; [0x2a9830f8b4]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 2] /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; [0x2a983109e3]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0xbc)
</span><br>
<span class="quotelev1">&gt; [0x2a9830fc50]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x4b)
</span><br>
<span class="quotelev1">&gt; [0x2a97fce447]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libopen-pal.so.0(opal_progress+0xbc)
</span><br>
<span class="quotelev1">&gt; [0x2a958fc343]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x22)
</span><br>
<span class="quotelev1">&gt; [0x2a962e9e22]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 7]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x677)
</span><br>
<span class="quotelev1">&gt; [0x2a962f1aab]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(mca_oob_recv_packed+0x46)
</span><br>
<span class="quotelev1">&gt; [0x2a9579d243]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_gpr_proxy.so(orte_gpr_proxy_put+0x2f3)
</span><br>
<span class="quotelev1">&gt; [0x2a96508c8f]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [10]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(orte_smr_base_set_proc_state+0x425)
</span><br>
<span class="quotelev1">&gt; [0x2a957c391d]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [11]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libmpi.so.0(ompi_mpi_init+0xa1e)
</span><br>
<span class="quotelev1">&gt; [0x2a9559f042]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [12]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libmpi.so.0(PMPI_Init_thread+0xcb)
</span><br>
<span class="quotelev1">&gt; [0x2a955e1c5b]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [13] IMB-MPI1(main+0x33) [0x403543]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [14] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x399e11c3fb]
</span><br>
<span class="quotelev1">&gt; [n161:13390] [15] IMB-MPI1 [0x40347a]
</span><br>
<span class="quotelev1">&gt; [n161:13390] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [n161:13391] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n161:13391] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n161:13391] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n161:13391] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 0] /lib64/tls/libpthread.so.0 [0x399e80c4f0]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 1] /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; [0x2a9830f8b4]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 2] /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; [0x2a983109e3]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0xbc)
</span><br>
<span class="quotelev1">&gt; [0x2a9830fc50]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x4b)
</span><br>
<span class="quotelev1">&gt; [0x2a97fce447]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libopen-pal.so.0(opal_progress+0xbc)
</span><br>
<span class="quotelev1">&gt; [0x2a958fc343]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x22)
</span><br>
<span class="quotelev1">&gt; [0x2a962e9e22]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 7]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x677)
</span><br>
<span class="quotelev1">&gt; [0x2a962f1aab]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(mca_oob_recv_packed+0x46)
</span><br>
<span class="quotelev1">&gt; [0x2a9579d243]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [ 9] /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0x2a9579e910]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [10]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(mca_oob_xcast+0x140)
</span><br>
<span class="quotelev1">&gt; [0x2a9579d824]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [11]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libmpi.so.0(ompi_mpi_init+0xaf1)
</span><br>
<span class="quotelev1">&gt; [0x2a9559f115]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [12]
</span><br>
<span class="quotelev1">&gt; /home/mukesh/openmpi/prefix/lib/libmpi.so.0(PMPI_Init_thread+0xcb)
</span><br>
<span class="quotelev1">&gt; [0x2a955e1c5b]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [13] IMB-MPI1(main+0x33) [0x403543]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [14] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x399e11c3fb]
</span><br>
<span class="quotelev1">&gt; [n161:13391] [15] IMB-MPI1 [0x40347a]
</span><br>
<span class="quotelev1">&gt; [n161:13391] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Query#1: Any clue for above?
</span><br>
<p><p>It worked for me.
<br>
<p>1. maybe mpirun belongs to another MPI.
<br>
2. try to define hosts ( -H host1,host2 )
<br>
<p><p><p>Query#2:  How can I include seperate exe file and have the IMB for it, e.g,
<br>
<span class="quotelev1">&gt; writing a hello.c with MPI elementary API calls, compiling with mpicc and
</span><br>
<span class="quotelev1">&gt; performing IMB for the same exe.?
</span><br>
<p><p>you have all the sorces
<br>
maybe in IMB's README you can find something
<br>
<p>Best Regards,
<br>
Lenny
<br>
<p>BR
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3785.php">Lenny Verkhovsky: "[OMPI devel] Fwd: Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3783.php">Mukesh K Srivastava: "[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>In reply to:</strong> <a href="3783.php">Mukesh K Srivastava: "[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3785.php">Lenny Verkhovsky: "[OMPI devel] Fwd: Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Reply:</strong> <a href="3785.php">Lenny Verkhovsky: "[OMPI devel] Fwd: Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
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
