<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  6 00:35:54 2011" -->
<!-- isoreceived="20111206053554" -->
<!-- sent="Tue, 06 Dec 2011 00:36:41 -0500" -->
<!-- isosent="20111206053641" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="4EDDA9E9.1040207_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1321926674.44951.YahooMailNeo_at_web24715.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-06 00:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10052.php">Ralph Castain: "[OMPI devel] VT configure problem?"</a>
<li><strong>Previous message:</strong> <a href="10050.php">Jeff Squyres: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/21/11 20:51, Lukas Razik wrote:
<br>
<span class="quotelev1">&gt; Hello everybody!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've Sun T5120 (SPARC64) Servers with
</span><br>
<span class="quotelev1">&gt; - Debian: 6.0.3
</span><br>
<span class="quotelev1">&gt; - linux-2.6.39.4 (from kernel.org)
</span><br>
<span class="quotelev1">&gt; - OFED-1.5.3.2
</span><br>
<span class="quotelev1">&gt; - InfiniBand: Mellanox Technologies MT25418 [ConnectX VPI PCIe 2.0 2.5GT/s - IB DDR / 10GigE] (rev a0)
</span><br>
<span class="quotelev1">&gt;    with newest FW (2.9.1)
</span><br>
<span class="quotelev1">&gt; and the following issue:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try to mpirun a program like the osu_latency benchmark:
</span><br>
<span class="quotelev1">&gt; $ /usr/mpi/gcc/openmpi-1.4.3/bin/mpirun -np 2 --mca btl_base_verbose 50 --mca btl_openib_verbose 1 -host cluster1,cluster2 /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then I get these errors:
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size            Latency (us)
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] Signal: Bus error (10)
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] Failing at address: 0xaa9053
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] [ 0] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_pml_ob1.so(+0x62f0) [0xfffff8010209e2f0]
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] [ 1] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_coll_tuned.so(+0x2904) [0xfffff801031ce904]
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] [ 2] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_coll_tuned.so(+0xb498) [0xfffff801031d7498]
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] [ 3] /usr/mpi/gcc/openmpi-1.4.3/lib64/libmpi.so.0(MPI_Barrier+0xbc) [0xfffff8010005a97c]
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] [ 4] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(main+0x2b0) [0x100f34]
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] [ 5] /lib64/libc.so.6(__libc_start_main+0x100) [0xfffff80100ac1240]
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] [ 6] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(_start+0x2c) [0x100bac]
</span><br>
<span class="quotelev1">&gt; [cluster1:64027] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] Signal: Bus error (10)
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] Failing at address: 0xaa9053
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] [ 0] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_pml_ob1.so(+0x62f0) [0xfffff8010209e2f0]
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] [ 1] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_coll_tuned.so(+0x2904) [0xfffff801031ce904]
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] [ 2] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_coll_tuned.so(+0xb498) [0xfffff801031d7498]
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] [ 3] /usr/mpi/gcc/openmpi-1.4.3/lib64/libmpi.so.0(MPI_Barrier+0xbc) [0xfffff8010005a97c]
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] [ 4] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(main+0x2b0) [0x100f34]
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] [ 5] /lib64/libc.so.6(__libc_start_main+0x100) [0xfffff80100ac1240]
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] [ 6] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(_start+0x2c) [0x100bac]
</span><br>
<span class="quotelev1">&gt; [cluster2:02759] *** End of error message ***
</span><br>
There do indeed seem to be a set of problems here addressing non-aligned 
<br>
words.
<br>
<p>*IF* you were to use Oracle Solaris Studio compilers, you could use 
<br>
-xmemalign=8i as Terry suggested and it appears that eliminates these 
<br>
errors, albeit potentially with a loss of performance.
<br>
<p>Your e-mail thread identified a problem with misalignment in
<br>
<p>551         hdr-&gt;hdr_match.hdr_ctx = sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid;
<br>
<p>It appears one can get past this problem by configuring OMPI with --enable-openib-control-hdr-padding.  This turns on OMPI_OPENIB_PAD_HDR and gives you padding/alignment in ompi/mca/btl/openib/btl_openib_frag.h here:
<br>
<p>struct mca_btl_openib_control_header_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint8_t  type;
<br>
#if OMPI_OPENIB_PAD_HDR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint8_t  padding[15];
<br>
#endif
<br>
};
<br>
typedef struct mca_btl_openib_control_header_t mca_btl_openib_control_header_t;
<br>
<p>struct mca_btl_openib_eager_rdma_header_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_control_header_t control;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint8_t padding[3];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t rkey;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_ptr_t rdma_start;
<br>
};
<br>
typedef struct mca_btl_openib_eager_rdma_header_t mca_btl_openib_eager_rdma_header_t;
<br>
<p>But then perhaps the padding in mca_btl_openib_eager_rdma_header_t needs to be adjusted.  I don't yet know.
<br>
<p>This helps (more tests pass), but in many cases it just delays problems until a later point.
<br>
<p>All of this is I suppose to say:
<br>
1)  Yes, there is a problem with misaligned words in the openib BTL.
<br>
2)  We are interested in and looking at the problem.
<br>
3)  No promises of outcome.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10052.php">Ralph Castain: "[OMPI devel] VT configure problem?"</a>
<li><strong>Previous message:</strong> <a href="10050.php">Jeff Squyres: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
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
