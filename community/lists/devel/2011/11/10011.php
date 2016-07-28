<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 05:49:18 2011" -->
<!-- isoreceived="20111122104918" -->
<!-- sent="Tue, 22 Nov 2011 05:49:04 -0500" -->
<!-- isosent="20111122104904" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="4ECB7E20.2050103_at_oracle.com" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 05:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10010.php">Matthias Jurenz: "Re: [OMPI devel] Trunk VT breakage"</a>
<li><strong>In reply to:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error you are seeing is usually indicative of some code operating on 
<br>
memory that isn't aligned properly for a SPARC instruction being used.  
<br>
The address that is causing the failure is odd aligned which is more 
<br>
than likely the culprit.  If you have a core dump and can disassemble 
<br>
the code that is being ran at the time it probably will be some sort of 
<br>
instruction requiring an alignment.  If the MPI you are using is 
<br>
something you built can you try and build OMPI with -g and get the line 
<br>
number in the PML that is failing?
<br>
<p>I haven't seen this type of error for some time but I do all of my SPARC 
<br>
testing on Solaris with Solaris Studio Compilers.  You may want to try 
<br>
to compile the benchmark with &quot;-m32&quot; to see if that helps.  Though being 
<br>
an odd address I suspect it might not.  If you can use the Studio 
<br>
Compilers you could try giving the compilers the -xmemalign=8i option 
<br>
when building the benchmark and see if that resolves the issue.  This 
<br>
would help to assure the issue is just an alignment of data we are 
<br>
slicing and dicing as opposed to wrongly addressing memory.
<br>
<p>--td
<br>
<p>On 11/21/2011 8:51 PM, Lukas Razik wrote:
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
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The whole output can be found here:
</span><br>
<span class="quotelev1">&gt; <a href="http://net.razik.de/linux/T5120/openmpi-1.4.3-verbose.txt">http://net.razik.de/linux/T5120/openmpi-1.4.3-verbose.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's my 'ompi_info --param all all' output:
</span><br>
<span class="quotelev1">&gt; <a href="http://net.razik.de/linux/T5120/openmpi-1.4.3_param_all_all.txt">http://net.razik.de/linux/T5120/openmpi-1.4.3_param_all_all.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same error with OFED-1.5.4-rc4 and also the same with openmpi-1.4.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I disable openib the I get the right results:
</span><br>
<span class="quotelev1">&gt; $ /usr/mpi/gcc/openmpi-1.4.3/bin/mpirun --mca btl ^openib -np 2 -host cluster1,cluster2 /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size            Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                       143.53
</span><br>
<span class="quotelev1">&gt; 1                       140.50
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ibverbs seems to work:
</span><br>
<span class="quotelev1">&gt; $ ibv_srq_pingpong -n 1000000 cluster2
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 8192000000 bytes in 4.15 seconds = 15806.63 Mbit/sec
</span><br>
<span class="quotelev1">&gt; 1000000 iters in 4.15 seconds = 4.15 usec/iter
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the installed OFED packets:
</span><br>
<span class="quotelev1">&gt; kernel-ib
</span><br>
<span class="quotelev1">&gt; ofed-scripts
</span><br>
<span class="quotelev1">&gt; libibverbs
</span><br>
<span class="quotelev1">&gt; libibverbs-devel
</span><br>
<span class="quotelev1">&gt; libibverbs-utils
</span><br>
<span class="quotelev1">&gt; libmlx4
</span><br>
<span class="quotelev1">&gt; libmlx4-devel
</span><br>
<span class="quotelev1">&gt; libibumad
</span><br>
<span class="quotelev1">&gt; libibumad-devel
</span><br>
<span class="quotelev1">&gt; libibmad
</span><br>
<span class="quotelev1">&gt; libibmad-devel
</span><br>
<span class="quotelev1">&gt; librdmacm
</span><br>
<span class="quotelev1">&gt; librdmacm-utils
</span><br>
<span class="quotelev1">&gt; librdmacm-devel
</span><br>
<span class="quotelev1">&gt; opensm-libs
</span><br>
<span class="quotelev1">&gt; ibutils
</span><br>
<span class="quotelev1">&gt; infiniband-diags
</span><br>
<span class="quotelev1">&gt; qperf
</span><br>
<span class="quotelev1">&gt; ofed-docs
</span><br>
<span class="quotelev1">&gt; mpi-selector
</span><br>
<span class="quotelev1">&gt; openmpi_gcc
</span><br>
<span class="quotelev1">&gt; mpitests_openmpi_gcc
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know which mailing list is the right one and I'm very thankful for any help!
</span><br>
<span class="quotelev1">&gt; If you have questions, please ask!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The archives of the lists I've sent this email to:
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.openfabrics.org/pipermail/ewg/2011-November/thread.html">http://lists.openfabrics.org/pipermail/ewg/2011-November/thread.html</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/11/date.php">http://www.open-mpi.org/community/lists/devel/2011/11/date.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://thread.gmane.org/gmane.linux.drivers.rdma/">http://thread.gmane.org/gmane.linux.drivers.rdma/</a>
</span><br>
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
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10011/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10010.php">Matthias Jurenz: "Re: [OMPI devel] Trunk VT breakage"</a>
<li><strong>In reply to:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
