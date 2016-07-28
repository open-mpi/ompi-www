<?
$subject_val = "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 20:51:22 2011" -->
<!-- isoreceived="20111122015122" -->
<!-- sent="Tue, 22 Nov 2011 01:51:14 +0000 (GMT)" -->
<!-- isosent="20111122015114" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="1321926674.44951.YahooMailNeo_at_web24715.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)<br>
<strong>From:</strong> Lukas Razik (<em>linux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 20:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10009.php">Ralph Castain: "[OMPI devel] Trunk VT breakage"</a>
<li><strong>Previous message:</strong> <a href="10007.php">Bruce Foster: "[OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10011.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10011.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe reply:</strong> <a href="10021.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe reply:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe reply:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10051.php">Eugene Loh: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody!
<br>
<p>I've Sun T5120 (SPARC64) Servers with
<br>
- Debian: 6.0.3
<br>
- linux-2.6.39.4 (from kernel.org)
<br>
- OFED-1.5.3.2
<br>
- InfiniBand: Mellanox Technologies MT25418 [ConnectX VPI PCIe 2.0 2.5GT/s - IB DDR / 10GigE] (rev a0)
<br>
&#160; with newest FW (2.9.1)
<br>
and the following issue:
<br>
<p>If I try to mpirun a program like the osu_latency benchmark:
<br>
$ /usr/mpi/gcc/openmpi-1.4.3/bin/mpirun -np 2 --mca btl_base_verbose 50 --mca btl_openib_verbose 1 -host cluster1,cluster2 /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency
<br>
<p>then I get these errors:
<br>
&lt;snip&gt;
<br>
# OSU MPI Latency Test v3.1.1
<br>
# Size&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Latency (us)
<br>
[cluster1:64027] *** Process received signal ***
<br>
[cluster1:64027] Signal: Bus error (10)
<br>
[cluster1:64027] Signal code: Invalid address alignment (1)
<br>
[cluster1:64027] Failing at address: 0xaa9053
<br>
[cluster1:64027] [ 0] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_pml_ob1.so(+0x62f0) [0xfffff8010209e2f0]
<br>
[cluster1:64027] [ 1] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_coll_tuned.so(+0x2904) [0xfffff801031ce904]
<br>
[cluster1:64027] [ 2] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_coll_tuned.so(+0xb498) [0xfffff801031d7498]
<br>
[cluster1:64027] [ 3] /usr/mpi/gcc/openmpi-1.4.3/lib64/libmpi.so.0(MPI_Barrier+0xbc) [0xfffff8010005a97c]
<br>
[cluster1:64027] [ 4] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(main+0x2b0) [0x100f34]
<br>
[cluster1:64027] [ 5] /lib64/libc.so.6(__libc_start_main+0x100) [0xfffff80100ac1240]
<br>
[cluster1:64027] [ 6] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(_start+0x2c) [0x100bac]
<br>
[cluster1:64027] *** End of error message ***
<br>
[cluster2:02759] *** Process received signal ***
<br>
[cluster2:02759] Signal: Bus error (10)
<br>
[cluster2:02759] Signal code: Invalid address alignment (1)
<br>
[cluster2:02759] Failing at address: 0xaa9053
<br>
[cluster2:02759] [ 0] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_pml_ob1.so(+0x62f0) [0xfffff8010209e2f0]
<br>
[cluster2:02759] [ 1] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_coll_tuned.so(+0x2904) [0xfffff801031ce904]
<br>
[cluster2:02759] [ 2] /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_coll_tuned.so(+0xb498) [0xfffff801031d7498]
<br>
[cluster2:02759] [ 3] /usr/mpi/gcc/openmpi-1.4.3/lib64/libmpi.so.0(MPI_Barrier+0xbc) [0xfffff8010005a97c]
<br>
[cluster2:02759] [ 4] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(main+0x2b0) [0x100f34]
<br>
[cluster2:02759] [ 5] /lib64/libc.so.6(__libc_start_main+0x100) [0xfffff80100ac1240]
<br>
[cluster2:02759] [ 6] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(_start+0x2c) [0x100bac]
<br>
[cluster2:02759] *** End of error message ***
<br>
<pre>
---
The whole output can be found here:
<a href="http://net.razik.de/linux/T5120/openmpi-1.4.3-verbose.txt">http://net.razik.de/linux/T5120/openmpi-1.4.3-verbose.txt</a>
That's my 'ompi_info --param all all' output:
<a href="http://net.razik.de/linux/T5120/openmpi-1.4.3_param_all_all.txt">http://net.razik.de/linux/T5120/openmpi-1.4.3_param_all_all.txt</a>
Same error with OFED-1.5.4-rc4 and also the same with openmpi-1.4.4.
If I disable openib the I get the right results:
$ /usr/mpi/gcc/openmpi-1.4.3/bin/mpirun --mca btl ^openib -np 2 -host cluster1,cluster2 /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency
# OSU MPI Latency Test v3.1.1
# Size&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Latency (us)
0&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 143.53
1&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 140.50
&lt;snip&gt;
---
ibverbs seems to work:
$ ibv_srq_pingpong -n 1000000 cluster2
&lt;snip&gt;
8192000000 bytes in 4.15 seconds = 15806.63 Mbit/sec
1000000 iters in 4.15 seconds = 4.15 usec/iter
---
These are the installed OFED packets:
kernel-ib
ofed-scripts
libibverbs
libibverbs-devel
libibverbs-utils
libmlx4
libmlx4-devel
libibumad
libibumad-devel
libibmad
libibmad-devel
librdmacm
librdmacm-utils
librdmacm-devel
opensm-libs
ibutils
infiniband-diags
qperf
ofed-docs
mpi-selector
openmpi_gcc
mpitests_openmpi_gcc
---
I don't know which mailing list is the right one and I'm very thankful for any help!
If you have questions, please ask!
Best regards,
Lukas
The archives of the lists I've sent this email to:
<a href="http://lists.openfabrics.org/pipermail/ewg/2011-November/thread.html">http://lists.openfabrics.org/pipermail/ewg/2011-November/thread.html</a>
<a href="http://www.open-mpi.org/community/lists/devel/2011/11/date.php">http://www.open-mpi.org/community/lists/devel/2011/11/date.php</a>
<a href="http://thread.gmane.org/gmane.linux.drivers.rdma/">http://thread.gmane.org/gmane.linux.drivers.rdma/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10009.php">Ralph Castain: "[OMPI devel] Trunk VT breakage"</a>
<li><strong>Previous message:</strong> <a href="10007.php">Bruce Foster: "[OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10011.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10011.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe reply:</strong> <a href="10021.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe reply:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe reply:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10051.php">Eugene Loh: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
